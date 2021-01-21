@extends('master')

@section('content')

    <div class="container row">

        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h2>Cart List for Products</h2>
                <a href="/ordernow" class="btn btn-success">Order Now</a> <br> <br>
                <div class="row ">
                    @foreach($products as $item)
                        <div class=" row search-item m-0 cart-list-divider">
                            <div class="col-sm-4">
                                <a href="detail/{{$item->id}}">
                                    <img class="d-block w-100" src="{{$item->gallery}}">
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <div>
                                        <h2>{{$item->name}}</h2>
                                        <h5>{{$item->description}}</h5>
                                </div>
                            </div>
                            <div class="col-sm-4 ">
                                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove Cart</a>
                            </div>
                        </div>
                    @endforeach

                </div>
                <a href="/ordernow" class="btn btn-success">Order Now</a>
            </div>
        </div>
    </div>

@endsection

