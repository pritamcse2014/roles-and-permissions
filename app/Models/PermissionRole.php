<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model
{
    use HasFactory;

    protected $table = 'permission_role';

    static public function getInsertUpdate($permission_id, $role_id) {
        PermissionRole::where('role_id', '=', $role_id)->delete();
        foreach ($permission_id as $permission_id) {
            $save = new PermissionRole;
            $save->permission_id = $permission_id;
            $save->role_id = $role_id;
            $save->save();
        }
    }

    static public function getRolePermissionGroupBy($role_id) {
        return PermissionRole::where('role_id', '=', $role_id)->get();
    }
}
