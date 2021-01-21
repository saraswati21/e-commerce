@extends('master')

@section('content')

    <div class="container row">

        <div class="col-sm-6">
            <table class="table">
                <tbody>
                <tr>
                    <td>Price</td>
                    <td>{{$total}} NRP</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>0 NRP</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>Total AMount</td>
                    <td>{{$total+100}}</td>
                </tr>
                </tbody>
            </table>
            <form method="post" action="orderplace">
                @csrf
                <div class="form-group">
                    <textarea class="form-control" name="address" placeholder="Enter your Address"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Payment Method</label>
                    <p><input type="radio" value="cash" name="payment"> <span>Online Payment</span></p>
                    <p><input type="radio" value="cash" name="payment"> <span>EMI</span></p>
                    <p><input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span></p>
                </div>
                <button type="submit" class="btn btn-primary">Order Now</button>
            </form>
        </div>
    </div>

@endsection

