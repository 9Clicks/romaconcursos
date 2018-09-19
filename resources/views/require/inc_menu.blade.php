<nav class="navbar navbar-expand-lg navbar-light" id="nav-style">
    <a class="navbar-brand" href="#"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto"  id="nav-menus">
            <li class="nav-item active">
                <a class="nav-link" href="#"><span class="icon-browser"></span>&nbsp; {{ $appNavs->tbl_menu_1 }} <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><span class="icon-briefcase1"></span>&nbsp; {{ $appNavs->tbl_menu_2 }}</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="icon-trophy"></span>&nbsp; {{ $appNavs->tbl_menu_3 }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><span class="icon-wallet2"></span>&nbsp; {{ $appNavs->tbl_menu_4 }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><span class="icon-newspaper1"></span>&nbsp; {{ $appNavs->tbl_menu_5 }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><span class="icon-chat3"></span>&nbsp; {{ $appNavs->tbl_menu_6 }}</a>
            </li>
        </ul>
    </div>
</nav>

