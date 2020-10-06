<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isNull;

class ContactsController extends Controller
{
    //
    function show($name)
    {
        $adresses = DB::table('contacts')->select('adresses.name as adresse')->join('adresses','adresses.id','=','contacts.adresse_id')->where('contacts.name',$name)->get();
        
        // $adresses = Contact::where('name',$name)->get();
        // $adresses = Contact::select('adresse.name as adresse')->join('adresse','adresse.id','=','contact.adresse_id')->where('contact.name',$name)->get();

        return view('gestion_contacts', [
            'contact' => $name,
            'adresses' => $adresses
        ]);
    }
}
