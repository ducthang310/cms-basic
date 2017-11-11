@extends('layouts.auth')

@section('title', 'Register')

@section('content')
    <main class="admin-auth">
        <div class="container">
            <div class="row">
                <form class="admin-auth__form card" action="{{route('password.request')}}" method="post">
                    {{ csrf_field() }}

                    <input type="hidden" name="token" value="{{ $token }}">

                    <h4 class="admin-auth__title">Reset Password</h4>
                    <div class="card-content row">
                        <div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>
                            <label for="password">Email</label>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="input-field col s12 {{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" class="validate" name="password" required>
                            <label for="confirmed">Password</label>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="input-field col s12 {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <input id="password-confirm" type="password" class="validate" name="password_confirmation" required>
                            <label for="confirmed">Confirm password</label>

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="input-field col s12">
                            <a class="left link-gray admin-auth__second-link" href="{{route('login')}}"><i class="material-icons">keyboard_arrow_left</i>   back</a>
                        </div>
                    </div>
                    <div class="card-action center">
                        <button class="btn-large waves-effect waves-light btn-primary" type="submit" name="action">Reset Password</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection



@push('footer-scripts')
    <script type="text/javascript">
        $(document).ready(function(){

        });
    </script>
@endpush