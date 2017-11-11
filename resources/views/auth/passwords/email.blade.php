@extends('layouts.auth')

@section('title', 'Forgot password')

@section('content')
    <main class="admin-auth">
        <div class="container">
            <div class="row">
                <form class="admin-auth__form card" action="{{route('password.email')}}" method="post">
                    {{ csrf_field() }}
                    <h4 class="admin-auth__title">Forgot password</h4>
                    <div class="card-content row">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" name="email" id="email" class="validate" value="{{ old('email') }}" required>
                            <label for="email">Email</label>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="input-field col s12">
                            <a class="left link-gray admin-auth__second-link" href="{{route('login')}}"><i class="material-icons">keyboard_arrow_left</i>   back</a>
                        </div>
                    </div>
                    <div class="card-action center">
                        <button class="btn-large waves-effect waves-light btn-primary" type="submit" name="action">Send Password Reset Link</button>
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