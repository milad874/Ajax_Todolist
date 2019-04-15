                        <!DOCTYPE html>
                        <html lang="en" dir="rtl">
                        <head>
                            <meta charset="utf-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
                            <meta name="author" content="Coderthemes">

                            <!-- App Favicon -->
                            <link rel="shortcut icon" href="assets/images/favicon.ico">

                            <!-- App title -->
                            <title>ورود</title>

                            <!-- App CSS -->
                            <link href="assets/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
                            <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
                            <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
                            <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
                            <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
                            <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
                            <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

                            <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
                            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                            <!--[if lt IE 9]>
                            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
                            <![endif]-->

                            <script src="assets/js/modernizr.min.js"></script>

                        </head>
                        <body>

                        <div class="account-pages"></div>
                        <div class="clearfix"></div>
                        <div class="wrapper-page">
                            <div class="text-center">
                                <a href="{{ route('login') }}" class="logo"><span>یادداشت<span>آنلاین</span></span></a>
                                <h5 class="text-muted m-t-0 font-600">دفترچه یادداشت آنلاین دیجیتال برای ذخیره مطالب شما می باشد</h5>
                            </div>
                            <div class="m-t-40 card-box">
                                <div class="text-center">
                                    <h4 class="text-uppercase font-bold m-b-0">ورود</h4>
                                </div>
                                <div class="panel-body">
                                    <form class="form-horizontal m-t-20" method="post" action="{{ route('login') }}">
                                            @csrf
                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input class="form-control {{ $errors->has('email') ? ' has-error' : '' }}" type="email" name="email" required="" placeholder="ایمیل">
                                                <small class="text-danger">{{ $errors->first('email') }}</small>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="password" name="password" required="" placeholder="پسورد">
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <div class="checkbox checkbox-custom">
                                                    <input id="checkbox-signup" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}
                                                   >
                                                    <label for="checkbox-signup">
                                                        مرا به خاطر بسپار
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group text-center m-t-30">
                                            <div class="col-xs-12">
                                                <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">ورود</button>
                                            </div>
                                        </div>

                                        <div class="form-group m-t-30 m-b-0">
                                            <div class="col-sm-12">
                                                <a href="{{ route('password.request') }}" class="text-muted"><i class="fa fa-lock m-r-5"></i> آیا رمز خود را فراموش کرده اید؟</a>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <!-- end card-box-->

                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">حساب کاربری ندارید? <a href="{{ route('register') }}" class="text-primary m-l-5"><b>ثبت نام</b></a></p>
                                </div>
                            </div>

                        </div>
                        <!-- end wrapper page -->



                        <script>
                            var resizefunc = [];
                        </script>

                        <!-- jQuery  -->
                        <script src="assets/js/jquery.min.js"></script>
                        <script src="assets/js/bootstrap-rtl.min.js"></script>
                        <script src="assets/js/detect.js"></script>
                        <script src="assets/js/fastclick.js"></script>
                        <script src="assets/js/jquery.slimscroll.js"></script>
                        <script src="assets/js/jquery.blockUI.js"></script>
                        <script src="assets/js/waves.js"></script>
                        <script src="assets/js/wow.min.js"></script>
                        <script src="assets/js/jquery.nicescroll.js"></script>
                        <script src="assets/js/jquery.scrollTo.min.js"></script>

                        <!-- App js -->
                        <script src="assets/js/jquery.core.js"></script>
                        <script src="assets/js/jquery.app.js"></script>

                        </body>
                        </html>