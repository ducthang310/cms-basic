@extends('layouts.admin')

@section('title', 'Images')

@section('content')
    <main class="admin-main">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h4>Images</h4>
                </div>
            </div>

            <div class="row">
                <div class="slider">
                    <ul class="slides">
                        <li>
                            <img src="assets/images/sample-2.jpg"> <!-- random image -->
                            <div class="caption center-align">
                                <h3>This is our big Tagline!</h3>
                                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                            </div>
                        </li>
                        <li>
                            <img src="assets/images/sample-3.jpg"> <!-- random image -->
                            <div class="caption left-align">
                                <h3>Left Aligned Caption</h3>
                                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                            </div>
                        </li>
                        <li>
                            <img src="assets/images/sample-4.jpg"> <!-- random image -->
                            <div class="caption right-align">
                                <h3>Right Aligned Caption</h3>
                                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                            </div>
                        </li>
                        <li>
                            <img src="assets/images/sample-5.jpg"> <!-- random image -->
                            <div class="caption center-align">
                                <h3>This is our big Tagline!</h3>
                                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                            </div>
                        </li>
                    </ul>
                </div>
                <p></p>
                <p></p>

                <img class="materialboxed" data-caption="A picture of a way with a group of trees in a park" width="250" src="assets/images/sample-2.jpg">
                <p></p>
                <p></p>

                <img class="materialboxed" width="650" src="assets/images/sample-4.jpg">
            </div>
        </div>
    </main>
@endsection



@push('footer-scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('.materialboxed').materialbox();
            $('.slider').slider();
        });
    </script>
@endpush