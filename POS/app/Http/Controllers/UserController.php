<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $user = UserModel::firstOrNew(
            [
                'username' => 'manager33',
                'nama' => 'Manager Tiga Tiga',
                
            ],
            [
            'password' => Hash::make('12345'),
                'level_id' => 2,
            ]
        );
        $user -> save();
        return view('user', ['data' => $user]);
        
    }
}

// return view('user', compact('id', 'name'));
        // $data = [
        //     // 'username' => 'customer-1',
        //     'level_id' => 2,
        //     'username' => 'manager-3',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345'),
        //     // 'level_id' => 4
        // ];
        // UserModel::create($data);
        
        // $user = UserModel::findOr(20,['username', 'nama'], function() {
        //     abort(404);
        // });

        // $userCount = UserModel::where('level_id', 2)->count();
        // return view('user', ['count' => $userCount]); 