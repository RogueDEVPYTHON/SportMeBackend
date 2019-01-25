<header>
    <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand col-md-3 " href="#"><img src="{{ url('img/logo.png') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <a href="#" class="back">Back to <b>Home page</b></a>
        <form class="form-inline my-2 my-lg-0 mr-auto">
            <button class="btn my-2 my-sm-0" type="submit"></button>
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        </form>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
            <?php
                $currentuser = App\Models\Users::where('id', auth()->user()->id)->first();
            ?>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Hi, {{ $currentuser->username }} 
                <?php
                if(!empty($currentuser->photo)){
                    $files = Storage::files($currentuser->photo);
                }
                ?>
                <div class="avatar">
                @if(!empty($currentuser->photo) && count($files) != 0)
                    <img src="{{ url('storage/'.$files[0]) }}" width="64" height="64" alt="">
                @else
                    <img src="{{ url('img/Blank_Avatar.png') }}" width="64" height="64" alt="">
                @endif
                </div>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('account/'.auth()->user()->id) }}">Account Information</a>
                <a class="dropdown-item" href="{{ url('/profile') }}">Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ url('logout') }}">Log out</a>
            </div>
            </li>
            <li class="nav-item">
            <a class="nav-link settings" href="#"></a>
            </li>
        </ul>
        
        </div>
    </nav>
</header>