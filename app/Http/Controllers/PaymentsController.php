<?php

namespace App\Http\Controllers;

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
    request()->user()->notify(new PaymentReceived(900));
    return redirect()->route('notifications');
  }
}
