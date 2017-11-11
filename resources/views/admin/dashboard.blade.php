@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <main class="admin-main">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h4>Dashboard</h4>

                    <!-- Dropdown Trigger -->
                    <a class='dropdown-button btn right' href='#' data-activates='dropdown1'>Drop Me!</a>

                    <!-- Dropdown Structure -->
                    <ul id='dropdown1' class='dropdown-content'>
                        <li><a href="#!">one</a></li>
                        <li><a href="#!">two</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">three</a></li>
                        <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
                        <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <h5>Introduction</h5>
                <p class="caption">
                    Collapsibles are accordion elements that expand when clicked on. They allow you to hide content that is not immediately relevant to the user.

                </p>

                <div class="col s12">
                    <div class="preloader-wrapper big active">
                        <div class="spinner-layer spinner-blue">
                            <div class="circle-clipper left">
                                <div class="circle"></div>
                            </div><div class="gap-patch">
                                <div class="circle"></div>
                            </div><div class="circle-clipper right">
                                <div class="circle"></div>
                            </div>
                        </div>

                        <div class="spinner-layer spinner-red">
                            <div class="circle-clipper left">
                                <div class="circle"></div>
                            </div><div class="gap-patch">
                                <div class="circle"></div>
                            </div><div class="circle-clipper right">
                                <div class="circle"></div>
                            </div>
                        </div>

                        <div class="spinner-layer spinner-yellow">
                            <div class="circle-clipper left">
                                <div class="circle"></div>
                            </div><div class="gap-patch">
                                <div class="circle"></div>
                            </div><div class="circle-clipper right">
                                <div class="circle"></div>
                            </div>
                        </div>

                        <div class="spinner-layer spinner-green">
                            <div class="circle-clipper left">
                                <div class="circle"></div>
                            </div><div class="gap-patch">
                                <div class="circle"></div>
                            </div><div class="circle-clipper right">
                                <div class="circle"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col s6">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                            <div class="collapsible-body">
                                <table class="striped">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Item Name</th>
                                        <th>Item Price</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>Alvin</td>
                                        <td>Eclair</td>
                                        <td>$0.87</td>
                                    </tr>
                                    <tr>
                                        <td>Alan</td>
                                        <td>Jellybean</td>
                                        <td>$3.76</td>
                                    </tr>
                                    <tr>
                                        <td>Jonathan</td>
                                        <td>Lollipop</td>
                                        <td>$7.00</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                        </li>
                    </ul>
                </div>

                <div class="col s6">
                    <ul class="collapsible" data-collapsible="expandable">
                        <li>
                            <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                            <div class="collapsible-body">
                                <p class="flow-text">I am Flow Text</p>
                                <table class="bordered">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Item Name</th>
                                        <th>Item Price</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>Alvin</td>
                                        <td>Eclair</td>
                                        <td>$0.87</td>
                                    </tr>
                                    <tr>
                                        <td>Alan</td>
                                        <td>Jellybean</td>
                                        <td>$3.76</td>
                                    </tr>
                                    <tr>
                                        <td>Jonathan</td>
                                        <td>Lollipop</td>
                                        <td>$7.00</td>
                                    </tr>
                                    </tbody>
                                </table>

                                <blockquote>
                                    This is an example quotation that uses the blockquote tag.
                                </blockquote>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                            <div class="collapsible-body">
                                <div class="progress">
                                    <div class="indeterminate"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <br><br>

            </div>
        </div>
    </main>
@endsection



@push('footer-scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('.collapsible').collapsible();
        });
    </script>
@endpush