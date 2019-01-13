<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
     public function show(User $user)
    {
    	// echo '<pre>';
    	// print_r(compact('user'));
    	// exit;
        return view('users.show', compact('user'));
    }


    
}
