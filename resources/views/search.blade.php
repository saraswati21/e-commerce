@extends('master')

@section('content')

    <div class="container row">
       <div class="col-sm-4">
           <a href="#">Filter Products</a>
       </div>
        <div class="col-sm-4">
            <div class="trending-wrapper">
                <h2>Result for Products</h2>
                <div class="row ">
                    @foreach($product as $item)
                        <div class="search-item m-0">
                            <a href="detail/{{$item['id']}}">
                                <img class="d-block w-100" src="{{$item["gallery"]}}">
                                <div>
                                    <h2>{{$item['name']}}</h2>
                                    <h5>{{$item['description']}}</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection

