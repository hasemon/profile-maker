<?php

namespace App\Http\Controllers;

use App\Models\MyUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function create()
    {
        return view('create_user');
    }

    public function store(Request $request)
    {
        $data_insert = MyUser::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => $request->password
        ]);
        return redirect()->route('user.create')->with('success', 'User created successfully');
    }

    public function user_list()
    {
        $users = MyUser::all();
        return view('user_list', compact('users'));
    }
    public function destroy($id)
    {
        $user = MyUser::find($id);
        $user->delete();
        return redirect()->route('user.list')->with('success', 'User deleted successfully');
    }

    // update user
    public function edit($id){
        $user = MyUser::find($id);
        return view('update_user', compact('user'));
    }

    public function update(Request $request, $id){
        $user = MyUser::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => $request->password
        ]);
        return redirect()->route('user.list')->with('success', 'User updated successfully');
    }

}
