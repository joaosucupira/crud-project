<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Requests\UserCreateRequest;
use Illuminate\Http\Request;

//

class UserController extends Controller
{
    // create
    public function create(UserCreateRequest $request) {
        $validateData = $request->validate([
            'name' => 'required|string:users',
            'email' => 'required|string:users',
            'password' => 'required|numeric:users',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        // return response()->json($user);
        return response('User inserido com sucesso.');

    }
    // read
    public function findById($id) {
        try {
            $user = User::findOrFail($id);
            return response()->json(['user' => $user], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Usuário não encontrado'], 404);
        }
    }
    
    public function findAll() {}
    // update
    public function update() {}
    // delete
    public function delete() {}

}
