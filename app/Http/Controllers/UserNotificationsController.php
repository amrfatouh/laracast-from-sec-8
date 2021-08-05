<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserNotificationsController extends Controller
{
  public function show()
  {
    $notifications = request()->user()->unreadNotifications;
    $notifications->markAsRead();
    return view('notifications.index', ['notifications' => $notifications]);
  }
}
