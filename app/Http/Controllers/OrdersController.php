<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;

class OrdersController extends Controller
{
    public function index(){

    }

    public function store(Request $request){
    	$Input = $request->all();

    	$Order = new Order;
        $Order->user_id = User::where('email', 'danj@comms-express.com')->first()->id;
        $Order->order_number = $Input['order_number'];
        $Order->save();
    }

    public function update(){

    }

    public function destroy(){

    }
}
