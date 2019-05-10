<?php

namespace App\Http\Controllers;

use App\Model\Post;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller
{

    public function registration(){
        if (Session::has('userId')){
            return redirect('/user/home');
        }
        return view('registration');
    }

    public function attemptedLogin(){
        if (Session::has('userId')){
            return redirect('/user/home');
        }
        return view('login');
    }

    public function userHome(){
        return view('user_home');
    }

    public function logout(){
        session()->flush();
        return redirect('/');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:50',
            'mobile_no' => 'required|max:11|min:11',
            'password' => 'required|max:255|min:6',
            'checked' => 'required',
        ]);

        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->mobile_no = $request['mobile_no'];
        $user->password = Hash::make($request['password']);
        $user->need = $request['need'];
        $user->topic = $request['topic'];
        $user->description = $request['description'];
        $user->massage = $request['massage'];

        $user->save();
        return redirect('login');
    }

    public function login(Request $request){

        $email = $request['email'];
        $password = $request['password'];
        $user = DB::table('users')
            ->where(['email'=>$email])
            ->first();
        if ($user){
            if (Hash::check($password,$user->password)){
                Session::put('userId',$user->id);
                Session::put('userName',$user->name);
                Session::put('userEmail',$user->email);
                Session::put('userMobile',$user->mobile_no);
                return redirect('/user/home');
            }

            else{
                Session::flash('message', 'Email or Password Incorrect');
                return redirect('login');
            }
        }
        else{
            Session::flash('message', 'Email or Password Incorrect');
            return redirect('login');
        }
    }

    public function userReview(){
        $posts = Post::all();
        return view('review')
            ->with('posts',$posts);
    }

}
