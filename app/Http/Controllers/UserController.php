<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function showUser(){
        $users = [
            [
                'id' => '1',
                'name' => 'thanh'
            ],
            [
                'id' => '2',
                'name' => 'thanh2'
            ],
            [
                'id' => '3',
                'name' => 'thanh3'
            ],
            
        ];
        return view('list-user')->with([
            'users'=> $users
        ]);
    }
    function getUser($id,$name = ""){
        echo $id; 
        echo $name;
    }
    function updateUser(Request $request){
        echo $request->id;
        echo $request->name;

    }
    function sinhVien (){

        $sinhvien = 
            [
                'id' => '1',
                'tuoi' => '20',
                'name' => 'thanh',
                'quequan' => 'Việt Nam',
            ]
        ;
        return view('thongtinsv')->with(['sinhvien' => $sinhvien
    ]);
    }
}
