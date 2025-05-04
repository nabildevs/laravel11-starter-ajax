{{-- Favicon --}}
<link rel="icon" href="{{ $setting->business_icon }}" type="image/png" />

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
    <!-- prettier-ignore -->
    <style>
    /* General */
    body { background-color: oklch(96.5% 0 0) }
    .img-index { max-width: 5rem; max-height: 3rem; border: none; }
    .img-thumbnail { max-width: 10rem; max-height: 5rem; border: none; }
    .btn-sm { border-radius: 0.375rem; }
    .badge { padding: 0.5rem; border-radius: 0.375rem; font-weight: bold; }
    .table-hover tbody tr:hover { background-color: oklch(96.5% 0 0); }

    /* Header */
    .dropdown-user-profile.custom-user-dropdown { width: 2000px !important; min-width: 180px !important; }
    .dropdown-user-profile .dropdown-header { padding: 10px; font-size: 15px; font-weight: 600; }
    .dropdown-user-profile .dropdown-item { font-size: 14px; padding: 8px 15px; }

    /* Guest */
    .auth-container { min-height: 100vh; display: flex; align-items: center; justify-content: center; flex-direction:
    column; padding: 2rem; }
    .auth-card { width: 100%; max-width: 400px; }
    .logo { margin-bottom: 3rem; }
    .logo img { height: 60px; }

    /* Color Theme Preview */
    .color-preview { width: 3rem; height: 2.5rem; border: 1px solid #ccc; border-radius: 4px; }
    .preset-1 { background-color: #1890ff; }
    .preset-2 { background-color: #3366ff; }
    .preset-3 { background-color: #7265e6; }
    .preset-4 { background-color: #068e44; }
    .preset-5 { background-color: #3c64d0; }
    .preset-6 { background-color: #f27013; }
    .preset-7 { background-color: #2aa1af; }
    .preset-8 { background-color: #00a854; }
    .preset-9 { background-color: #009688; }
    .preset-10 { background-color: #f6339a; }
    </style>
@endpush
