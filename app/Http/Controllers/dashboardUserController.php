<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class dashboardUserController extends Controller
{
    public function show(){
        $data['users'] = User::all();
        return view('admin.dashboard' ,['users' => $data['users']]);
    }
}
