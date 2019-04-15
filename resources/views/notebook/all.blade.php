@extends('master')
@section('content')

    <div class="col-lg-12">
        <div class="card-box">

            <ul class="nav navbar-nav navbar-right">

                <li class="hidden-xs">
                    <form role="search" action="{{ route('notebook.search') }}" method="post" class="app-search">
                        @csrf
                        <input type="text" name="search" placeholder="به دنبال چه می گردی ؟؟؟" class="form-control">
                       <a> <i class="fa fa-search"></i></a>
                    </form>
                </li>
            </ul>




            <h4 class="header-title m-t-0 m-b-30">لیست یادداشت ها</h4>

            <p class="text-muted font-13 m-b-15">







                <a href="#" class="create-modal btn btn-success btn-trans waves-effect w-md waves-success m-b-5">
                    افزودن

                </a>
            </p>

            <table class="table table-striped m-0" id="table">
                <thead>

                    <tr>

                    <th>موضوع</th>
                    <th>توضیحات</th>
                    <th>تاریخ</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>

                @foreach($notebooks as $value)
                <tr class="post{{$value->id}}">

                    <td>{{ $value->title }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($value->body,70) }}</td>
                    <td>{{ \Hekmatinasser\Verta\Verta::instance($value->created_at)->formatDifference() }}</td>
                    <td>
                        <a href="#" class="show-modal btn btn-info btn-sm" data-id="{{$value->id}}" data-code="{{$value->code}}" data-title="{{$value->title}}" data-body="{{$value->body}}">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="#" class="edit-modal btn btn-warning btn-sm" data-id="{{$value->id}}" data-code="{{$value->code}}" data-title="{{$value->title}}" data-body="{{$value->body}}">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                        <a href="#"  class="delete-modal btn btn-danger btn-sm" data-id="{{$value->id}}" data-code="{{$value->code}}" data-title="{{$value->title}}" data-body="{{$value->body}}">
                            <i class="glyphicon glyphicon-trash"></i>
                        </a>
                    </td>
                </tr>
@endforeach

                </tbody>
            </table>

            {{$notebooks->links()}}
        </div>
    </div>




    {{-- Modal Form Create Post --}}
    <div id="create" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        @csrf
                        <div class="form-group row add">
                            <div class="col-sm-12">
                                <label class="control-label" for="title">موضوع :</label>
                                <input type="text" class="form-control" id="title" name="title"
                                placeholder="لطفا نام موضوع خود را وارد کنید" required>
                                <p class="error text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-md-12">
                                <label class="control-label" for="body">توضیحات :</label>
                                <textarea class="form-control" id="body" name="body" rows="5" placeholder="لطفا توضیحات را وارد نمایید"></textarea>
                                <p class="error text-center alert alert-danger hidden"></p>
                            </div>
                        </div>


                        <div class="form-group">

                            <div class="col-md-12">
                                <label class="control-label" for="code">کد :</label>


                                <textarea class="form-control textCustomleft" id="code" name="code" rows="5" placeholder="محل قرار گرفتن کد"></textarea>
                                <p class="error text-center alert alert-danger hidden"></p>
                            </div>
                        </div>




                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal" >بستن</button>
                    <button type="button" class="btn btn-info waves-effect waves-light" id="add">ذخیره</button>
                </div>

            </div>
        </div>
    </div>
    {{-- Modal Form Show POST --}}
    <div id="show" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">موضوع</label>
                        <br>
                        <b id="ti"></b>

                    </div>
                    <hr>
                    <div class="form-group">
                        <label  for="">توضیحات :</label> <br>
                        <b id="by"></b>
                    </div><hr>
                    <div class="form-group">
                        <label for="">کد :</label> <br>
                        <pre class="pre-scrollable  textCustomleft" ><code id="co" class="textCustomleft"></code></pre>

                    </div><hr>
                </div>
            </div>
        </div>
    </div>









    {{-- Modal Form Edit and Delete Post --}}







    <div id="myModal"class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="modal">
                      <div class="hidden">

                          <div class="form-group">
                              <div class="col-sm-12">
                                  <label class="control-label"for="id">ID</label>
                                  <input type="text" class="form-control" id="fid" disabled>
                              </div>
                          </div>

                      </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label"for="title">موضوع</label>
                                <input type="name" class="form-control" id="t">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label"for="body">توضیحات</label>
                                <textarea class="form-control" id="b"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label textCustomleft"for="code">کد</label>
                                <textarea class="form-control" id="c"></textarea>
                            </div>
                        </div>
                    </form>
                    {{-- Form Delete Post --}}
                    <div class="deleteContent">
                       آیا برای حذف مطمئن هستید؟ <span class="title"></span>
                        <span class="hidden id"></span>
                    </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn actionBtn" data-dismiss="modal">
                        <span id="footer_action_button" class="glyphicon"></span>
                    </button>
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal" >بستن</button>
                </div>
               {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal" >بستن</button>
                    <button type="button" class="btn btn-info waves-effect waves-light aaa">

                    </button>
                </div>--}}
              {{--  <div class="modal-footer">
                    <button type="button" class="btn actionBtn btn btn-info waves-effect waves-light aaa" data-dismiss="modal">
                        <span id="footer_action_button" class="glyphicon"></span>
                    </button>
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">
                        <span class="glyphicon glyphicon"></span>بستن
                    </button>
                </div>--}}


            </div>
        </div>
    </div>
    @endsection


@section('script')

    <script type="text/javascript">
        {{-- ajax Form Add Post--}}
        $(document).on('click','.create-modal', function() {
            $('#create').modal('show');
            $('.form-horizontal').show();
            $('.modal-title').text('افزودن یادداشت');
        });
        $("#add").click(function() {
            var body = jQuery("textarea#body").val();
            var code = jQuery("textarea#code").val();
            $.ajax({
                type: 'POST',
                url: '{{ route('notebook.store') }}',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'title': $('input[name=title]').val(),
                    'body': body,
                    'code': code
                },
                success: function(data){
                    if ((data.errors)) {
                        $('.error').removeClass('hidden');
                        $('.error').text(data.errors.title);
                        $('.error').text(data.errors.body);
                        $('.error').text(data.errors.code);
                    } else {
                        $('.error').remove();
                        $('#table').append("<tr class='post" + data.id + "'>"+

                            "<td>" + data.title + "</td>"+
                            "<td>" + data.body + "</td>"+
                            "<td>" + data.created_at + "</td>"+
                            "<td><button class='show-modal btn btn-info btn-sm' data-id='" + data.id + "' data-title='" + data.title + "' data-code='" + data.code + "' data-body='" + data.body + "'><span class='fa fa-eye'></span></button> <button class='edit-modal btn btn-warning btn-sm' data-id='" + data.id + "' data-code='" + data.code + "' data-title='" + data.title + "' data-body='" + data.body + "'><span class='glyphicon glyphicon-pencil'></span></button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "' data-title='"  + data.title + "' data-code='" + data.code + "' data-body='" + data.body + "'><span class='glyphicon glyphicon-trash'></span></button></td>"+
                            "</tr>");
                    }
                },
            });
            $('#title').val('');
            $('#body').val('');
            $('#code').val('');
        });

        // function Edit POST
        $(document).on('click', '.edit-modal', function() {


            $('.actionBtn').addClass('btn-success');
            $('.actionBtn').removeClass('btn-danger');
            $('.actionBtn').addClass('edit');
            $('.actionBtn').text('ویرایش');
            $('.modal-title').text('ویرایش یادداشت');
            $('.deleteContent').hide();
            $('.form-horizontal').show();
            $('#c').val($(this).data('code'));
            $('#fid').val($(this).data('id'));
            $('#t').val($(this).data('title'));
            $('#b').val($(this).data('body'));
            $('.aaa').text('ویرایش');
            $('#myModal').modal('show');
        });

        $('.modal-footer').on('click', '.edit', function() {
            $.ajax({
                type: 'PATCH',
                url: 'notebook/'+$("#fid").val(),
                data: {
                    '_token': $('input[name=_token]').val(),

                    'id': $("#fid").val(),
                    'title': $('#t').val(),
                    'body': $('#b').val(),
                    'code': $('#c').val()
                },
                success: function(data) {
                    $('.post' + data.id).replaceWith(" "+
                        "<tr class='post" + data.id + "'>"+

                        "<td>" + data.title + "</td>"+
                        "<td>" + data.body + "</td>"+
                        "<td>" + data.created_at + "</td>"+
                        "<td><button class='show-modal btn btn-info btn-sm' data-id='" + data.id + "' data-code='" + data.code + "' data-title='" + data.title + "' data-body='" + data.body + "'><span class='fa fa-eye'></span></button> <button class='edit-modal btn btn-warning btn-sm' data-id='" + data.id + "' data-code='" + data.code + "' data-title='" + data.title + "' data-body='" + data.body + "'><span class='glyphicon glyphicon-pencil'></span></button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "' data-code='" + data.code + "' data-title='" + data.title + "' data-body='" + data.body + "'><span class='glyphicon glyphicon-trash'></span></button></td>"+
                        "</tr>");
                }
            });
        });

        // form Delete function
        $(document).on('click', '.delete-modal', function() {

            $('#footer_action_button').removeClass('glyphicon-check');
            $('#footer_action_button').addClass('glyphicon-trash');
            $('.actionBtn').removeClass('btn-success');
            $('.actionBtn').addClass('btn-danger');
            $('.actionBtn').addClass('delete');
            $('.actionBtn').text('حذف');
            $('.modal-title').text('حذف یادداشت');
            $('.id').text($(this).data('id'));
            $('.deleteContent').show();
            $('.form-horizontal').hide();
            $('.title').html($(this).data('title'));
            $('.aaa').text('حذف');
            $('#myModal').modal('show');
        });

        $('.modal-footer').on('click', '.delete', function(){
            $.ajax({
                type: 'POST',

                url: '{{ route('notebook.delete') }}',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'id': $('.id').text()
                },
                success: function(data){
                    $('.post' + $('.id').text()).remove();
                }
            });
        });

        // Show function
        $(document).on('click', '.show-modal', function() {
            $('#show').modal('show');

            $('#ti').text($(this).data('title'));
            $('#fid').text($(this).data('id'));
            $('#by').text($(this).data('body'));
            $('#co').text($(this).data('code'));
            $('.modal-title').text('نمایش یادداشت');
        });
    </script>



    @endsection

