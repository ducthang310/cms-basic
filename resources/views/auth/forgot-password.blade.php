@extends('layouts.auth')

@section('title', 'Forgot password')

@section('content')
    <main class="admin-auth">
        <div class="container">
            <div class="row">
                <form class="admin-auth__form card" action="{{route('auth_forgot_password_post')}}" method="post">
                    <h4 class="admin-auth__title">Forgot password</h4>
                    <div class="card-content row">
                        <div class="input-field col s12">
                            <input type="email" name="email" id="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field col s12">
                            <a class="left link-gray admin-auth__second-link" href="{{route('auth_login')}}"><i class="material-icons">keyboard_arrow_left</i>   back</a>
                        </div>
                    </div>
                    <div class="card-action center">
                        <button class="btn-large waves-effect waves-light btn-primary" type="submit" name="action">Submit</button>
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