<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\User;
use App\Services\ListPostsByUser;
use App\Services\StorePost;

class PostController extends Controller
{
    public function index()
    {
        if (!$userId = request()->get('user_id')) {
            return response()->json(['message' => 'please enter the user_id in the params in the "user_Id" field']);
        }

        if (!$user = User::find($userId)) {
            return response()->json(['message' => 'please enter a valid user']);
        }

        $page = (int) request()->get('user_id') ?? 1;
        $perPage = (int) request()->get('user_id') ?? 10;
        $follow = (bool) request()->get('follows') ?? false;

        return response()->json(ListPostsByUser::Execute($user, $page, $perPage, $follow));
    }

    public function store(StorePostRequest $request)
    {
        $data = $request->validated();

        return response()->json(StorePost::Execute($data));
    }
}
