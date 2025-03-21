<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
 
    public function index(){
        // echo 'this is testing';
        return view('employee.list');
    }

    public function create(){

        return view('employee.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'image' => 'sometimes|image:gif,png,jpeg'
        ]);

        if($validator->passes()){

        }else{
            return redirect('')->route('employee.create')->withErrors($validator);
        }

    }
}
