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

        // Jeito 1
        // $user = new User();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;
        // $user->save();

        // Jeito 2 -> fillable
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        // $validateData = $request->validate([
        //     'name' => 'required|string:users',
        //     'email' => 'required|string:users',
        //     'password' => 'required|numeric:users',
        // ]);

        return response()->json($user);

        // return response('User inserido com sucesso.');

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
    
    public function findAll() {
        $users = User::all();
        return response()->json($users);
    }

    public function findMultiple(Request $request) {
        $allId = $request->input('ids');
        $users = User::whereIn('id', $allId)->get();
        return response()->json($users);        
    }

    // update
    public function update() {}
    // delete
    public function delete() {}

}
