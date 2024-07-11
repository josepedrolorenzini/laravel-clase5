<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function contact2(){
        $data = session()->get('allInput', []);
        $email = session()->get('email', []);
        $phone = session()->get('phone', []);
        var_dump($data);
        return view('contact2' , compact('data'))->with('email', $email)
        ->with('phone', $phone);
    }

    public function submitForm(Request $request){

        // $data = session()->get('data', []);
        // $data[] = $request->data;
        // session()->put('data', $data);
        $allInputs = $request->all();
        // $data   = $input ; 
            $name     = $request->input('nombre');
            $email    = $request->input('email');
            $phone    = $request->input('phonenumber');
            $lastname = $request->input('lastname');

        //  var_dump($allInputs);
       return redirect('/contact2')->with('allInput', $allInputs)
       ->with('nombre', $name)
       ->with('email', $email)->with('phone', $phone) ; 
    }
}
