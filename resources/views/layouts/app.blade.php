<!doctype html>
<html lang="en">

<head>
    @include('layouts.parts.meta')
    @include('layouts.parts.style')
    @stack('css')
</head>

<body data-pc-preset="preset-5" data-pc-direction="ltr" data-pc-theme="light">
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    @include('layouts.parts.sidebar')
    @include('layouts.parts.header')
    <div class="pc-container">
        <div class="pc-content">
            @yield('content')
        </div>
    </div>
    @include('layouts.parts.footer')
    @include('layouts.parts.common-modal', ['id' => 'common-modal'])
    @include('layouts.parts.script')
    @stack('js')
</body>

</html>
