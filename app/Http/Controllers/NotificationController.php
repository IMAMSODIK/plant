<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Http\Requests\StoreNotificationRequest;
use App\Http\Requests\UpdateNotificationRequest;
use Illuminate\Http\Request;

class NotificationController extends Controller
{

    public function index()
    {
        $notifications = Notification::latest()->get();
        $pageTitle = "Notifications";
        return view('histori.index', compact('notifications', 'pageTitle'));
    }

    public function store(Request $request)
    {
        $notif = Notification::create([
            'title' => $request->title,
            'message' => $request->message,
        ]);

        return response()->json(['success' => true, 'data' => $notif]);
    }
}
