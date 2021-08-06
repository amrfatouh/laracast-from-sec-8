<?php

namespace App\Http\Controllers;

use App\Events\ProductPurchased;
use App\Notifications\PaymentReceived;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class PaymentsController extends Controller
{
  public function show()
  {
    return view('payments');
  }

  public function store()
  {
    ProductPurchased::dispatch('toy');
  }
}
