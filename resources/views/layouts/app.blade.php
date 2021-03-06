<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="Admin Buana Food Market">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @stack('before-style')
    @include('includes.admin.style')
    @stack('after-style')
</head>

<body>
    <!-- Left Panel -->
    @include('includes.admin.sidebar')
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        @include('includes.admin.navbar')
        <!-- /#header -->
        <!-- Content -->
        @yield('content')
        <!-- /.content -->
        <div class="clearfix"></div>
        @include('includes.admin.footer')
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    @stack('before-script')
    @include('includes.admin.script')
    @stack('after-script')
</body>
</html>
