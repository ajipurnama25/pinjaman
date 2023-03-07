<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate();

        return view('users.index', compact('users'));
    }
    public function show(){
        $data = User::all();
        return $data; 
     }
     public function insert(Request $request){
         $data = $request ->post();
         $data['password'] = bcrypt(request()->password);
         $opration = User::create($data);
         return $opration;
     }
     public function update(Request $request, User $data){
         $data = User::find(request()->id);
         if($data['password'] != request()->password){
            $data['password'] = bcrypt(request()->password);
         } else {
            $data['password'] = request()->password;
         }
         $opration = $data->update($request->post());
         // print_r($data);exit;
         return $opration;
     }
     public function delete(Request $request, User $data){
         $data = User::find(request()->id);
         // print_r($data);exit;
         $opration = $data->delete();
         return $opration;
     }
}
