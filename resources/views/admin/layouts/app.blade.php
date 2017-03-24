<!DOCTYPE html>
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

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="adminapp">
        @include('admin.layouts.header')
        <el-row class="tac">
            <el-col :xs="8" :sm="6" :md="4" :lg="3" class="slider">
                @include('admin.layouts.slider')
            </el-col>
            <el-col :xs="16" :sm="18" :md="20" :lg="21">
                @yield('content')
            </el-col>
        </el-row>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/admin.js') }}"></script>
    @yield('js')
        <!-- Main Footer -->
    @include('admin.layouts.footer')
</body>
</html>
