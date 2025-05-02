{{-- Favicon --}}

{{-- Font/Icons --}}
<link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}">
<link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}">

{{-- Bootstrap --}}
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

{{-- CSS --}}
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link">
<link rel="stylesheet" href="{{ asset('assets/css/style-preset.css') }}">

{{-- Alertify --}}
<link rel="stylesheet" href="{{ asset('assets/css/alertify/alertify.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/alertify/bootstrap.min.css') }}">

@push('css')
    <style>
        /* General */
        body {
            background-color: oklch(96.8% 0.007 247.896);
        }

        /* Header */
        .dropdown-user-profile.custom-user-dropdown {
            width: 2000px !important;
            min-width: 180px !important;
        }

        .dropdown-user-profile .dropdown-header {
            padding: 10px;
            font-size: 15px;
            font-weight: 600;
        }

        .dropdown-user-profile .dropdown-item {
            font-size: 14px;
            padding: 8px 15px;
        }

        /* Guest */
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 2rem;
        }

        .login-card {
            width: 100%;
            max-width: 400px;
        }

        .logo {
            margin-bottom: 3rem;
        }

        .logo img {
            height: 50px;
        }
    </style>
@endpush
