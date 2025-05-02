<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.parts.meta')
    @include('layouts.parts.style')
    @stack('css')
</head>

<body data-pc-preset="preset-5">
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <div class="auth-container">
        <div class="logo text-center">
            <img src="{{ $setting->business_logo }}" alt="Logo">
        </div>
        @yield('content')
    </div>
    @include('layouts.parts.script')
</body>

</html>
