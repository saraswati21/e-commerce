<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
    {
        $total=ProductController::cartItem();
    }
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">E-Commerce</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/myorders">Orders</a>
            </li>


            <form class="form-inline my-2 my-lg-0" action="/search">
                <input class="form-control mr-sm-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item"><a class="nav-link" href="/cartList">Add To Cart{{$total}}</a></li>
            @if(Session::has('user'))
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    {{Session::get('user')['name']}}
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/logout">Logout</a>
                </div>
            </li>
            @else
                <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="register" class="nav-link">Register</a></li>
            @endif
        </ul>
    </div>
</nav>
