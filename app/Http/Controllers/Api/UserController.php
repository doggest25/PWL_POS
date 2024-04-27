<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return UserModel::all();
    }
    public function store(Request $request){
        $user_id = UserModel::create($request->all());
        return response()->json($user_id, 201);
    }
    public function show(UserModel $user_id){
        return UserModel::find($user_id);
    }
    public function update(Request $request, UserModel $user_id){
        $user_id->update($request->all());
        return UserModel::find($user_id);

    }
    public function destroy(UserModel $user_id){
        $user_id->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data terhapus'
        ]);
    }
}
