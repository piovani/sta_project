<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\InfoUser;

class UserController extends Controller
{
    public function index()
    {
        if (!$userId = request()->get('user_id')) {
            return response()->json(['message' => 'please enter the user_id in the params in the "user_Id" field']);
        }

        if (!$user = User::find($userId)) {
            return response()->json(['message' => 'please enter a valid user']);
        }

        return response()->json(InfoUser::Execute($user));
    }
}
