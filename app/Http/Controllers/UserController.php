<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function panelUserList() {
        return view('panel.user.list');
    }
}
