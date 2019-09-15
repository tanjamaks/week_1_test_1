<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class ShowProfile extends Controller
{
    public function index(){
        return view ('pages.index',["users"=> User::all()]);
    }
    public function about() {
        return view ('pages.about', ["error" => false]);
    }

    public function store(Request $request){
        $userData= $request->only(['name','surname','email','password']);
        
        if( !User::create($userData) ) {
            return view("pages.about", ["error" => true, "message" => "Failed creating user!"]);
        }

        return view("pages.about")->with('success','Registracija je uspjela!');
      
    }
    public function edit($id){
        $user= User::where('id',$id)->first();

        return view("pages/edit", compact('user'));
    } 
    public function update($id, Request $request){
        
        $sentData= $request->only(['name','surname','email']);
        $user= User::where('id',$id)->first();
        $user->name =$sentData['name'];
        $user->surname =$sentData['surname'];
        $user->email =$sentData['email'];
        $user->save();
        
        return redirect('/index');
    } 
    public function destroy($id, Request $request) {
        $user = User::where('id', $id)->first();
        $user->delete();
        return redirect('/index');
    }
   
}
