
{{--

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>--}}







<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- App title -->
    <title>آقای ادمین | قالب واکنشگرا مدیریتی</title>

    <!-- App CSS -->
    <link href="/assets/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="/assets/js/modernizr.min.js"></script>

</head>
<body>

<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class="text-center">
        <a href="index.html" class="logo"><span>آقای<span>ادمین</span></span></a>
        <h5 class="text-muted m-t-0 font-600">پرفروش ترین و محیوب ترین قالب مدیریتی در جهان</h5>
    </div>
    <div class="m-t-40 card-box">
        <div class="text-center">
            <h4 class="text-uppercase font-bold m-b-0">تایید ایمیل</h4>
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('لینک حاوی فعال سازی اکانت شما ارسال گردید') }}
                </div>
            @endif
        </div>
        <div class="panel-body text-center">
            <img src="/assets/images/mail_confirm.png" alt="img" class="thumb-lg m-t-20 center-block" />
            <p class="text-muted font-13 m-t-20">لینک حاوی فعال سازی اکانت شما به ایمیلتان ارسال گردیده لطفا تایید نمایید </p>
        </div>

            <p class="text-muted font-13 m-t-20">اگر ایمیل دریافت نکردید <a href="{{ route('verification.resend') }}">{{ __('اینجا کلیک کنید') }}</a> </p>

    </div>

    <div class="row">
        <div class="col-sm-12 text-center">
            <p class="text-muted">بازگشت به <a href="page-login.html" class="text-primary m-l-5"><b>ثبت نام</b></a></p>
        </div>
    </div>

</div>
<!-- end wrapper page -->




<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap-rtl.min.js"></script>
<script src="/assets/js/detect.js"></script>
<script src="/assets/js/fastclick.js"></script>
<script src="/assets/js/jquery.slimscroll.js"></script>
<script src="/assets/js/jquery.blockUI.js"></script>
<script src="/assets/js/waves.js"></script>
<script src="/assets/js/wow.min.js"></script>
<script src="/assets/js/jquery.nicescroll.js"></script>
<script src="/assets/js/jquery.scrollTo.min.js"></script>


<script src="/assets/js/jquery.core.js"></script>
<script src="/assets/js/jquery.app.js"></script>

</body>
</html>
