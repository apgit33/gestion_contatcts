<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isNull;

class ContactsController extends Controller
{
    //
    function show($name){
        $adresse = DB::table('contact')->where('name',$name)->first();

        dd($adresse);
        // $adresse = DB::table('contact')->where('name',$name)->first();


        return view('gestion_contacts', [
            'contact' => $adresse
        ]);
    }
}
