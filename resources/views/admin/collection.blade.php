@extends('layouts.admin')

@section('title', 'Collections')

@section('content')
    <main class="admin-main">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h4>Collections</h4>
                </div>

                <p class="header">Basic</p>
                <ul class="collection">
                    <li class="collection-item">Alvin</li>
                    <li class="collection-item">Alvin</li>
                    <li class="collection-item">Alvin</li>
                    <li class="collection-item">Alvin</li>
                </ul>

                <p class="header">Links</p>
                <div class="collection">
                    <a href="#!" class="collection-item">Alvin</a>
                    <a href="#!" class="collection-item active">Alvin</a>
                    <a href="#!" class="collection-item">Alvin</a>
                    <a href="#!" class="collection-item">Alvin</a>
                </div>
                <ul class="collection">
                    <li class="collection-item"><a href="#!">Link 1</a></li>
                    <li class="collection-item"><a href="#!">Link 1</a></li>
                    <li class="collection-item"><a href="#!">Link 1</a></li>
                </ul>


                <p class="header">Avatar</p>
                <ul class="collection">
                    <li class="collection-item avatar">
                        <img src="assets/images/sample-1.jpg" alt="" class="circle">
                        <span class="title">Title</span>
                        <p>First Line <br>
                            Second Line
                        </p>
                        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                    </li>
                    <li class="collection-item avatar">
                        <i class="material-icons circle">folder</i>
                        <span class="title">Title</span>
                        <p>First Line <br>
                            Second Line
                        </p>
                        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                    </li>
                    <li class="collection-item avatar">
                        <i class="material-icons circle green">insert_chart</i>
                        <span class="title">Title</span>
                        <p>First Line <br>
                            Second Line
                        </p>
                        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                    </li>
                    <li class="collection-item avatar">
                        <i class="material-icons circle red">play_arrow</i>
                        <span class="title">Title</span>
                        <p>First Line <br>
                            Second Line
                        </p>
                        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                    </li>
                </ul>
            </div>
        </div>
    </main>
@endsection

