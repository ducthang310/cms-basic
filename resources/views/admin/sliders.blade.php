@extends('layouts.admin')

@section('title', 'Sliders')

@section('content')
    <main class="admin-main">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h4>Sliders</h4>
                </div>

                <div class="col s12">
                    <div class="carousel carousel-slider center" data-indicators="true" id="cal-1">
                        <div class="carousel-fixed-item center">
                            <a class="btn waves-effect white grey-text darken-text-2">button</a>
                        </div>
                        <div class="carousel-item red white-text" href="#one!">
                            <h2>First Panel</h2>
                            <p class="white-text">This is your first panel</p>
                        </div>
                        <div class="carousel-item amber white-text" href="#two!">
                            <h2>Second Panel</h2>
                            <p class="white-text">This is your second panel</p>
                        </div>
                        <div class="carousel-item green white-text" href="#three!">
                            <h2>Third Panel</h2>
                            <p class="white-text">This is your third panel</p>
                        </div>
                        <div class="carousel-item blue white-text" href="#four!">
                            <h2>Fourth Panel</h2>
                            <p class="white-text">This is your fourth panel</p>
                        </div>
                    </div>
                    <p></p>
                </div>


                <div class="col s12">
                    <div class="carousel carousel-slider" id="cal-2">
                        <a class="carousel-item" href="#one!"><img src="assets/images/sample-2.jpg"></a>
                        <a class="carousel-item" href="#two!"><img src="assets/images/sample-3.jpg"></a>
                        <a class="carousel-item" href="#three!"><img src="assets/images/sample-4.jpg"></a>
                        <a class="carousel-item" href="#four!"><img src="assets/images/sample-5.jpg"></a>
                    </div>
                    <p></p>
                </div>


                <div class="col s12">
                    <div class="carousel" id="cal-3">
                        <a class="carousel-item" href="#one!"><img src="assets/images/sample-1.jpg"></a>
                        <a class="carousel-item" href="#two!"><img src="assets/images/sample-2.jpg"></a>
                        <a class="carousel-item" href="#three!"><img src="assets/images/sample-3.jpg"></a>
                        <a class="carousel-item" href="#four!"><img src="assets/images/sample-4.jpg"></a>
                        <a class="carousel-item" href="#five!"><img src="assets/images/sample-5.jpg"></a>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

@push('footer-scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#cal-1').carousel({fullWidth: true});
            $('#cal-2').carousel({fullWidth: true});
            $('#cal-3').carousel();
        })
    </script>
@endpush