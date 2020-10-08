<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use CheckIfAdmin;

class UsersController extends Controller
{
    //
    public function list($order='name')
    {
        $allowedOrder = ["name","id","email"];

        $order = in_array($order,$allowedOrder) ? $order : 'name';

        return view('users',[
            'users' => User::select('name','id','email')->orderBy($order,'asc')->get()
        ]);
    }

    public function show($id)
    {

        return view('user',[
            'user' => User::select('name','is_admin','email')->where('id','=',$id)->first()
        ]);
    }

}
