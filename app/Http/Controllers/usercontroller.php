<?php

namespace App\Http\Controllers;

//use Facade\FlareClient\Http\Response;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index(){
        return response()->json([
            'greeting'=>"Hello!",
            'message' => "I would like to appologize for being late sir. ",
            'student' =>[
                'firstname' =>"Jerome",
                'lastname' =>"Marino",
                'address' =>[
                    'city' => "N/A",
                    'municipality' => "Catarman",
                    'street' => "Brgy. UEP Zone 1"
                ]
            ]
        ]);
    }
    public function create(Request $request){
        DB::table('users')->insert($request->all());
        return request()->json(['message' => 'User Created!'], 200);
    }
}