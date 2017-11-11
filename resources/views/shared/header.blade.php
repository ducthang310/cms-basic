<header>
    <div class="container">
        <a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a>
    </div>
    <ul class="side-nav side-nav-header fixed hidden-scrollbar">
        <li class="{{vipGetRouterClass('dashboard')}}"><a href="{{route('admin_dashboard')}}" class="waves-effect waves-teal"><i class="material-icons">dashboard</i>Dashboard</a></li>
        <li class="{{vipGetRouterClass('forms')}}"><a href="{{route('admin_forms')}}" class="waves-effect waves-teal"><i class="material-icons">layers</i>Forms</a></li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li class="bold"><a class="collapsible-header waves-effect waves-teal"><i class="material-icons">my_location</i>CSS</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#!"><i class="material-icons">remove</i>Color</a></li>
                            <li><a href="#!"><i class="material-icons">remove</i>Grid</a></li>
                            <li><a href="#!"><i class="material-icons">remove</i>Grid</a></li>
                            <li><a href="#!"><i class="material-icons">remove</i>Grid</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li class="{{vipGetRouterClass('tabs')}}"><a href="{{route('admin_tabs')}}" class="waves-effect waves-teal"><i class="material-icons">tab</i>Tabs</a></li>
        <li class="{{vipGetRouterClass('tables')}}"><a href="{{route('admin_tables')}}" class="waves-effect waves-teal"><i class="material-icons">table</i>Tables</a></li>
        <li class="{{vipGetRouterClass('collection')}}"><a href="{{route('admin_collection')}}" class="waves-effect waves-teal"><i class="material-icons">list</i>Collection<span class="new badge"></span></a>
        <li class="{{vipGetRouterClass('cards')}}"><a href="{{route('admin_cards')}}" class="waves-effect waves-teal"><i class="material-icons">crop_rotate</i>Cards</a></li>
        <li class="{{vipGetRouterClass('sliders')}}"><a href="{{route('admin_sliders')}}" class="waves-effect waves-teal"><i class="material-icons">casino</i>Sliders</a></li>
        <li class="{{vipGetRouterClass('images')}}"><a href="" class="waves-effect waves-teal"><i class="material-icons">image</i>Images</a></li>
        </li>
    </ul>
    <nav class="top-nav fixed">
        <div class="nav-wrapper">
            <a href="#!" class="top-logo">
                <i class="material-icons">menu</i>
                <img src="assets/images/logo-small.png"/>
            </a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#!"><i class="material-icons">search</i></a></li>
                <li><a href="#!"><i class="material-icons">notifications_none</i></a></li>
                <li>
                    <a href="#!" data-activates="dropdown1" class="dropdown-button" data-alignment="right" data-constrainwidth="false" data-beloworigin="true"><i class="material-icons">camera</i></a>


                    <!-- Dropdown Structure -->
                    <ul id='dropdown1' class='dropdown-content'>
                        <li><a href="{{route('admin_dashboard')}}">My account</a></li>
                        <li class="divider"></li>
                        <li><a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                <li><a href="#!"><i class="material-icons">more_horiz</i></a></li>
            </ul>
        </div>
    </nav>
</header>