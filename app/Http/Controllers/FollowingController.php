<?php

namespace App\Http\Controllers;

use App\Http\Requests\FollowRequest;
use App\Http\Requests\UnfollowRequest;
use App\Models\User;
use App\Services\DestroyFollow;
use App\Services\StoreFollow;

class FollowingController extends Controller
{
    public function follow(FollowRequest $request)
    {
        if (!$userId = $request->get('user_id')) {
            return response()->json(['message' => 'please enter the user_id in the params in the "user_Id" field']);
        }

        if (!$user = User::find($userId)) {
            return response()->json(['message' => 'please enter a valid user']);
        }

        if (!$userFollowId = $request->get('following_user_id')) {
            return response()->json(['message' => 'please enter the user_id in the params in the "user_Id" field']);
        }

        if (!$userFollow = User::find($userFollowId)) {
            return response()->json(['message' => 'please enter a valid user']);
        }

        return response()->json(StoreFollow::Execute($user, $userFollow));
    }

    public function unfollow(UnfollowRequest $request)
    {
        if (!$userId = $request->get('user_id')) {
            return response()->json(['message' => 'please enter the user_id in the params in the "user_Id" field']);
        }

        if (!$user = User::find($userId)) {
            return response()->json(['message' => 'please enter a valid user']);
        }

        if (!$userFollowId = $request->get('following_user_id')) {
            return response()->json(['message' => 'please enter the user_id in the params in the "user_Id" field']);
        }

        if (!$userFollow = User::find($userFollowId)) {
            return response()->json(['message' => 'please enter a valid user']);
        }

        return response()->json(DestroyFollow::Execute($user, $userFollow));
    }
}
