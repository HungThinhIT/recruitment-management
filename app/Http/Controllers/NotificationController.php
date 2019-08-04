<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;

/**
 * @group Notification management
 *
 */
class NotificationController extends Controller
{
	/**
     * Display list notifications haven't read.
     * 
     */
    public function notifications()
    {
        return response()->json(auth()->user()->unreadNotifications()->get()->toArray());
    }

    /**
     * Display a candidate when click a notification.
     */
    public function show($id)
    {
        $notification = auth()->user()->notifications()->where('id', $id)->first();
        if ($notification) {
            $notification->markAsRead();
            return response()->json(Candidate::findOrFail($notification->data['candidate_id']));
        }
    }
}
