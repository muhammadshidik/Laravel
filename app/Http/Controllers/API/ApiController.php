<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function getUsers()
    {
        $users = User::get();
        return response()->json(['data' => $users, 'message' => 'Request Success'], 201);
    }
    public function editUsers($id)
    {
        $user = User::findOrFail($id);
        return response()->json(['status' => 'success', 'message' => 'Request Success', 'data' => $user]);
    }


    public function storeUsers(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required|min:3',
            ]);
            if ($validator->fails()) {
                return response()->json(['status' => 'error', 'errors' => $validator->errors()], 442);
            }
            $users = User::create($request->all());
            return response()->json(['data' => $users, 'message' => 'Request Success'], 201);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'error', 'message' => 'Request Failed', 'errors' => $th->getMessage()], 500);
        }
    }

    public function updateUsers(Request $request, $id)
    {
        try {
            $user = User::findOrFail($id);
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'nullable|min:3',
            ]);
            if ($validator->fails()) {
                return response()->json(['status' => 'error', 'errors' => $validator->errors()], 442);
            }
            $user->name = $request->name;
            $user->email = $request->email;
            if ($request->filled('password')) {
                $user->password = Hash::make($request->password);
            }
            $user->save();
            return response()->json(['status' => 'success', 'message' => 'Request Update Success', 'data' => $user]);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'error', 'message' => 'Request Failed', 'errors' => $th->getMessage()], 500);
        }
    }

    public function deleteUsers(Request $request, $id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();
            return response()->json(['status' => 'success', 'message' => 'Request Delete Success']);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'error', 'message' => 'Request Failed', 'errors' => $th->getMessage()], 500);
        }
    }
}
