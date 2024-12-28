<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function panelUserList() {
        // System - 1
        // $data['getRecord'] = User::get();
        // System - 2
        $data['getRecord'] = User::getDetails();
        return view('panel.user.list', $data);
    }
    
    public function panelUserAdd() {
        // System - 1
        $data['getRole'] = Role::get();
        // System - 2
        // $data['getRole'] = Role::getDetails();
        return view('panel.user.add', $data);
    }
    
    public function panelUserStore(Request $request) {
        // dd($request->all());
        $save = $request->validate([
            'email' => 'required|email|unique:users'
        ]);

        $save = new User;
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->password = Hash::make($request->password);
        $save->role_id = trim($request->role_id);
        $save->save();

        return redirect('panel/user')->with('success', 'User Create Successfully.');
    }

    public function panelUserEdit($id) {
        // System - 1
        $data['getRecord'] = User::find($id);
        $data['getRole'] = Role::get();
        // System - 2
        // $data['getRecord'] = User::singleGetEdit($id);
        // $data['getRole'] = Role::getDetails();
        return view('panel.user.edit', $data);
    }
    
    public function panelUserUpdate(Request $request, $id) {
        // System - 1
        $save = User::find($id);
        // System - 2
        // $save = User::singleGetEdit($id);
        $save->name = trim($request->name);
        if (!empty($request->password)) {
            $save->password = Hash::make($request->password);
        }
        $save->role_id = trim($request->role_id);
        $save->save();

        return redirect('panel/user')->with('success', 'User Updated Successfully.');
    }
    
    public function panelUserDelete($id) {
        // System - 1
        $save = User::find($id);
        // System - 2
        // $save = User::singleGetEdit($id);
        $save->delete();

        return redirect('panel/user')->with('success', 'User Deleted Successfully.');
    }
}
