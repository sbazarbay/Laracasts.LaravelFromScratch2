<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\PaymentReceived;
use App\Events\ProductPurchased;

class PaymentsController extends Controller
{
    public function create()
    {
    	return view('payments.create');
    }

    public function store()
    {
    	request()->user()->notify(new PaymentReceived(900));
    	// Notification::send(request()->user(), new PaymentReceived()); if sending notification to multiple users

    	ProductPurchased::dispatch('toy');
    	// event(new ProductPurchased('toy')); alternative way to use
    }
}
