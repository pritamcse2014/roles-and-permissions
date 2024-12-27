<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function panelRoleList() {
        // System - 1
        $data['getRecord'] = Role::get();
        // System - 2
        // $data['getRecord'] = Role::getDetails();
        return view('panel.role.list', $data);
    }
    
    public function panelRoleAdd() {
        return view('panel.role.add');
    }
    
    public function panelRoleStore(Request $request) {
        // dd($request->all());
        $save = $request->validate([
            'name' => 'required'
        ]);

        $save = new Role;
        $save->name = trim($request->name);
        $save->save();

        return redirect('panel/role')->with('success', 'Role Create Successfully.');
    }

    public function panelRoleEdit($id) {
        // echo $id;
        // die();
        // System - 1
        $data['getRecord'] = Role::find($id);
        // System - 2 (Security)
        // $data['getRecord'] = Role::singleGetEdit($id);
        return view('panel.role.edit', $data);
    }

    public function panelRoleUpdate(Request $request, $id) {
        // dd($request->all());
        $save = $request->validate([
            'name' => 'required'
        ]);

        // System - 1
        $save = Role::find($id);
        // System - 2 (Security)
        // $save = Role::singleGetEdit($id);
        $save->name = trim($request->name);
        $save->save();

        return redirect('panel/role')->with('success', 'Role Updated Successfully.');
    }

    public function panelRoleDelete($id) {
        // echo $id;
        $save = Role::find($id);
        $save->delete();

        return redirect('panel/role')->with('success', 'Role Deleted Successfully.');
    }
}
