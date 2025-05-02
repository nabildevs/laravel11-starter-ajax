@extends('layouts.guest')
@section('content')
    <div class="card login-card shadow-sm">
        <div class="card-body">
            <div class="text-center mb-4">
                <h3 style="margin-bottom: 5px;"><strong>{{ $setting->business_name ?? env('EMPTY_STRING') }}</strong></h3>
                <span class="text-primary">{{ $title }} to your account</span>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}"
                        placeholder="Email Address">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="********">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="d-grid mt-3">
                    <button type="submit" class="btn btn-primary">Login Account</button>
                </div>
            </form>

            <div class="mt-3 text-center">
                <a href="{{ route('register') }}" class="link-primary">Don't have an account?</a>
            </div>
        </div>
    </div>
@endsection
