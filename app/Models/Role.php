<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'role';

    // System - 2 (Add)
    // static public function getDetails() {
    //     return Role::get();
    // }

    // System -2 (Edit)
    // static public function singleGetEdit($id) {
    //     return Role::find($id);
    // }
}
