<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }    
    public function tambah()
    {
        return view('user_tambah');
    }
    public function tambah_simpan(Request $request)
    {
        UserModel::create([
            'level_id' => $request->level_id,
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password)
        ]);
        return redirect('/user');
    }
    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user_ubah', ['data' => $user]);
    }
    public function ubah_simpan(Request $request, $id)
    {
        $user = UserModel::find($id);

        $user->level_id = $request->level_id;
        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password = Hash::make($request->password);
        
        $user->save();

        return redirect('/user');
    }
    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();
        
        return redirect('/user');
    }

}
// $user = UserModel::create([
        //     'username' => 'manager11',
        //     'nama' => 'Manager11',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2,
        // ]);

        // $user->username = 'manager12';
        // $user->save();

        // $user->wasChanged();
        // $user->wasChanged('username');
        // $user->wasChanged(['username', 'level_id']);
        // $user->wasChanged('nama');
        // dd($user->wasChanged(['nama', 'username']));
// $user->username = 'manager-55';

        // $user ->isDirty();
        // $user -> isDirty('username');
        // $user ->isDirty('nama');
        // $user ->isDirty(['nama', 'username']);

        // $user ->isClean();
        // $user ->isClean('username');
        // $user ->isClean('nama');
        // $user ->isClean(['nama', 'username']);

        // $user ->save();

        // $user->isDirty();
        // $user->isClean();
        // dd($user->isDirty());
// public function index() {
    //     $user = UserModel::firstOrNew(
    //         [
    //             'username' => 'manager33',
    //             'nama' => 'Manager Tiga Tiga',
                
    //         ],
    //         [
    //         'password' => Hash::make('12345'),
    //             'level_id' => 2,
    //         ]
    //     );
    //     $user -> save();
    //     return view('user', ['data' => $user]);
        
    // }
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