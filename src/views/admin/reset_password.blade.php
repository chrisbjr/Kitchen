<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>Kitchen | Reset Password</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="{{{ asset('packages/chrisbjr/kitchen/assets/global/plugins/font-awesome/css/font-awesome.min.css') }}}" rel="stylesheet" type="text/css"/>
    <link href="{{{ asset('packages/chrisbjr/kitchen/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}}" rel="stylesheet" type="text/css"/>
    <link href="{{{ asset('packages/chrisbjr/kitchen/assets/global/plugins/bootstrap/css/bootstrap.min.css') }}}" rel="stylesheet" type="text/css"/>
    <link href="{{{ asset('packages/chrisbjr/kitchen/assets/global/plugins/uniform/css/uniform.default.css') }}}" rel="stylesheet" type="text/css"/>
    <link href="{{{ asset('packages/chrisbjr/kitchen/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}}" rel="stylesheet"
          type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{{ asset('packages/chrisbjr/kitchen/assets/global/plugins/select2/select2.css') }}}" rel="stylesheet" type="text/css"/>
    <link href="{{{ asset('packages/chrisbjr/kitchen/assets/admin/pages/css/login.css') }}}" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME STYLES -->
    <link href="{{{ asset('packages/chrisbjr/kitchen/assets/global/css/components.css') }}}" rel="stylesheet" type="text/css"/>
    <link href="{{{ asset('packages/chrisbjr/kitchen/assets/global/css/plugins.css') }}}" rel="stylesheet" type="text/css"/>
    <link href="{{{ asset('packages/chrisbjr/kitchen/assets/admin/layout/css/layout.css') }}}" rel="stylesheet" type="text/css"/>
    <link id="style_color" href="{{{ asset('packages/chrisbjr/kitchen/assets/admin/layout/css/themes/default.css') }}}" rel="stylesheet" type="text/css"/>
    <link href="{{{ asset('packages/chrisbjr/kitchen/assets/admin/layout/css/custom.css') }}}" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="{{{ url('/') }}}">
        <img src="{{{ asset('packages/chrisbjr/kitchen/assets/admin/layout/img/logo.png') }}}" alt=""/>
    </a>
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" method="post" action="{{{ url('user/reset') }}}">
        <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
        <input type="hidden" name="token" value="{{{ $token }}}">

        <h3 class="form-title">Reset your password</h3>

        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span>You need to fill both fields</span>
        </div>
        @if (Session::get('error'))
        <div class="alert alert-danger">
            <button class="close" data-close="alert"></button>
            <span>{{{ Session::get('error') }}}</span>
        </div>
        @endif
        @if (Session::get('notice'))
        <div class="alert alert-warning">
            <button class="close" data-close="alert"></button>
            <span>{{{ Session::get('notice') }}}</span>
        </div>
        @endif
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">{{{ Lang::get('confide::confide.password') }}}</label>

            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="{{{ Lang::get('confide::confide.password') }}}" name="password"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">{{{ Lang::get('confide::confide.password_confirmation') }}}</label>

            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="{{{ Lang::get('confide::confide.password_confirmation') }}}" name="password_confirmation"/>
            </div>
        </div>
        <div class="form-actions">
            <label class="checkbox">&nbsp;</label>
            <button type="submit" class="btn green pull-right">
                {{{ Lang::get('confide::confide.forgot.submit') }}} <i class="m-icon-swapright m-icon-white"></i>
            </button>
        </div>
    </form>
    <!-- END LOGIN FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
    {{{ date('Y') }}} &copy; Kitchen by <a href="https://github.com/chrisbjr" target="_blank">@chrisbjr</a>.
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="{{{ asset('packages/chrisbjr/kitchen/assets/global/plugins/respond.min.js') }}}"></script>
<script src="{{{ asset('packages/chrisbjr/kitchen/assets/global/plugins/excanvas.min.js') }}}"></script>
<![endif]-->
<script src="{{{ asset('packages/chrisbjr/kitchen/assets/global/plugins/jquery-1.11.0.min.js') }}}" type="text/javascript"></script>
<script src="{{{ asset('packages/chrisbjr/kitchen/assets/global/plugins/jquery-migrate-1.2.1.min.js') }}}" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{{ asset('packages/chrisbjr/kitchen/assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js') }}}" type="text/javascript"></script>
<script src="{{{ asset('packages/chrisbjr/kitchen/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}}" type="text/javascript"></script>
<script src="{{{ asset('packages/chrisbjr/kitchen/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}}"
        type="text/javascript"></script>
<script src="{{{ asset('packages/chrisbjr/kitchen/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}}" type="text/javascript"></script>
<script src="{{{ asset('packages/chrisbjr/kitchen/assets/global/plugins/jquery.blockui.min.js') }}}" type="text/javascript"></script>
<script src="{{{ asset('packages/chrisbjr/kitchen/assets/global/plugins/jquery.cokie.min.js') }}}" type="text/javascript"></script>
<script src="{{{ asset('packages/chrisbjr/kitchen/assets/global/plugins/uniform/jquery.uniform.min.js') }}}" type="text/javascript"></script>
<script src="{{{ asset('packages/chrisbjr/kitchen/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{{ asset('packages/chrisbjr/kitchen/assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}}" type="text/javascript"></script>
<script type="text/javascript" src="{{{ asset('packages/chrisbjr/kitchen/assets/global/plugins/select2/select2.min.js') }}}"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{{ asset('packages/chrisbjr/kitchen/assets/global/scripts/metronic.js') }}}" type="text/javascript"></script>
<script src="{{{ asset('packages/chrisbjr/kitchen/assets/admin/layout/scripts/layout.js') }}}" type="text/javascript"></script>
<script src="{{{ asset('packages/chrisbjr/kitchen/assets/admin/layout/scripts/quick-sidebar.js') }}}" type="text/javascript"></script>
<script src="{{{ asset('packages/chrisbjr/kitchen/assets/admin/pages/scripts/login.js') }}}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function () {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        QuickSidebar.init() // init quick sidebar
        Login.init();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>