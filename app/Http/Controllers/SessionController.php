<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * @group Sessions
 *
 *
 */
class SessionController extends Controller
{

    /**
     * Display information user by session.
     */
    public function informationUser(Request $request)
    {
        $valueSession = $request->session()->get('user-information', NULL);
        return response()->json($valueSession);
    }
}
