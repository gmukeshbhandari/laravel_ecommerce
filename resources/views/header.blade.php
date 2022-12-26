<?php 
use App\Http\Controllers\ProductController;
$total = 0; //In Logout mode, cart item = 0
if (Session::has('user'))
{
  $total = ProductController::cartItem();
}

?>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home') }}">ECommerce</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Order</a>
        </li>
        
        <form action="{{  route('searchheader') }}" class="d-flex" role="search">
          <input name="query" class="form-control me-2 search-box" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

      </ul>

      <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Cart ({{ $total }})</a>
      </li>

      @if(Session::has('user'))
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{  Session::get('user')['name'] }}
        </a>
        <ul class="dropdown-menu">
          <li> <a class="dropdown-item" href="{{ route('log_out') }}">Logout</a> </li>
        </ul>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link" href="#"> Login </a>
      </li>
      @endif
    </ul>
    </div>
  </div>
</nav>