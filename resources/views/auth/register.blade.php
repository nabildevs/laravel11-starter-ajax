@extends('layouts.guest')
@section('content')
    <div class="card auth-card shadow-sm">
        <div class="card-body">
            <div class="text-center mb-4">
                <h3 style="margin-bottom: 5px;"><strong>{{ $setting->business_name ?? env('EMPTY_STRING') }}</strong></h3>
                <span class="text-primary">{{ $title }} your account</span>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                        placeholder="Full Name">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}"
                        placeholder="Email Address">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="********">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation" placeholder="********">
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                    </div>
                </div>

                <div class="d-grid mt-3">
                    <button type="submit" class="btn btn-primary">Register Account</button>
                </div>
            </form>

            <div class="mt-3 text-center">
                <a href="{{ route('login') }}" class="link-primary">Already have an account?</a>
            </div>
        </div>
    </div>
@endsection
