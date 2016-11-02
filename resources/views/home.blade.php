@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Orders</div>

                <div class="panel-body">
                    <ul>
                        @forelse($Orders as $Order)
                            <li>
                                <small>{{$Order->created_at}}</small>
                                <strong>{{$Order->order_number}}</strong>
                            </li>
                        @empty
                            No orders
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
