<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $table = 'permission';

    // System - 2 (Add)
    // static public function getDetails() {
    //     return Role::get();
    // }

    static public function getPermissionGroupBy() {
        $getPermission = Permission::groupBy('group_by')->get();
        // return $getPermission;
        $result = array();
        foreach ($getPermission as $valuePermission) {
            $getPermissionGroup = Permission::getPermissionGroup($valuePermission->group_by);
            $data = array();
            $data['id'] = $valuePermission->id;
            $data['name'] = $valuePermission->name;
            $group = array();
            foreach ($getPermissionGroup as $valueGroup) {
                $dataGroup = array();
                $dataGroup['id'] = $valueGroup->id;
                $dataGroup['name'] = $valueGroup->name;
                $group[] = $dataGroup;
            }
            $data['group'] = $group;
            $result[] = $data;
        }
        return $result;
    }

    static public function getPermissionGroup($group_by) {
        return Permission::where('group_by', '=', $group_by)->get();
    }
}
