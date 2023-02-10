<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomerController extends Controller
{
    function addcustomer(Request $req){
        $customers= new Customers();
        $customers->id=null;
        $customers->name=$req->Customers;
        $customers->email=$req->Customers;
        $customers->number=$req->Customers;
        $customers->text=$req->Customers;
        $customers->save();
        return redirect('/');

    }

    // function showitems(){
    //     $customers= Customers::all();
    //     return view('details',['customers'=>$customers]);
    // }
}

