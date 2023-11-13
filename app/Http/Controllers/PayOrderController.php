<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Billing\PaymentGateway;
use App\Orders\OrderDetails;

class PayOrderController extends Controller
{
    public function store(OrderDetails $orderDetails, PaymentGateway $paymentGateway) {
        $allOrderDetails = $orderDetails->all();
        dd($paymentGateway->charge(2500));
    }
}
