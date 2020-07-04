<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\User;

class UserController extends Controller
{
    public function uploadAvatar(Request $request)
    {
      if($request->hasFile('image')){
        User::uploadAvatar($request->image);
        return redirect()->back()->with('message','image Uploaded'); // success message
      }
      return redirect()->back()->with('error','image not Uploaded.'); // error message
    }


    public function index()
    {

      $data = [
          'name'     => 'nam',
          'email'    => 'nam@gmail.com',
          'password' => ('password'),
      ];
      // User::create($data);

      // $user = new User();
      //
      // $user->name = 'mina';
      // $user->email = 'izonet101@gmail.com';
      // $user->password = bcrypt('root101');
      // $user->save();


      $user = User::all();
      return $user;

      // User::where('id', 2)->delete();

      // User::where('id', 5)->update(['name' => 'frankie']);



      // DB::insert('insert into users (name,email,mobile, password) values (?,?,?,?)', [
      //   'frank','izonet@gmail.com','08021512127','root101',
      // ]);

      // $users = DB::select('select * from users');
      // return $users;


      // DB::update('update users set name = ? where id = 1', ['mina']);

      // DB::delete('delete from users where id = 1');
      //
      // $users = DB::select('select * from users');
      // return $users;

       return view('home');
    }
}
