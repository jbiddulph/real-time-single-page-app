<?php
use App\Model\User;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //
    public function index() {
        return [
            'read' => auth()->user()->readNotifications(),
            'unread' => auth()->user()->unreadNotifications(),
        ];
    }
}
