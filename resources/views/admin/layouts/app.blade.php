<!DOCTYPE HTML>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'HuiMai') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('plugs/datetimepicker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet"> --}}

    <link href="{{ asset('css/load/load.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    @yield('css')
</head>
<body>
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
            <div class="object" id="object_four"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_one"></div>
            </div>
        </div>
    </div>
    <div id="adminapp" class="wrapper">
        @include('admin.layouts.header')
        <el-row class="tac">
            <el-col :xs="8" :sm="6" :md="4" :lg="3" class="slider">
                @include('admin.layouts.slider')
            </el-col>
            <el-col :xs="16" :sm="18" :md="20" :lg="21">
                <section class="content-header">
                    <h6>
                    {!! Breadcrumbs::render(Route::currentRouteName()) !!}
                    </h6>
                </section>
                <div class="content">
                @yield('content')
                </div>
            </el-col>
        </el-row>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/admin.js') }}"></script>
    {{-- <script src="{{ asset('js/jquery-ui.js') }}"></script> --}}
    <script src="{{ asset('plugs/datetimepicker/bootstrap-datetimepicker.js') }}"></script>
    <script src="{{ asset('plugs/datetimepicker/bootstrap-datetimepicker.zh-CN.js') }}"></script>

    @yield('js')
        <!-- Main Footer -->
    @include('admin.layouts.footer')
</body>
</html>
