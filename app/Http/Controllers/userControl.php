<?php

namespace App\Http\Controllers;

use App\Models\Follower;
use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\Welcome;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Notification;

class userControl extends Controller
{
      //Gets the register page
      public function create(){
        return view('user.register');
    }
    //Store users profile
    
    public function store(Request $request){
     $formData=$request->validate(
        [
          'name'=>'required|min:8',
          'email'=>'required|email|unique:users|email:rfc,dns',
          'password'=>['required','min:6','confirmed'],
          'username'=>'required|min:8|unique:users'

        ]);

        $form_data['ip']=$request->ip();
        $form_data['followers']=1;
        $formData['password']=bcrypt($formData['password']);
        $user=User::create($formData);
        //Notification::send($user,new Welcome($user->name));
  
        auth()->login($user,$request->remember);
     return redirect('/')->with('success','Account Created Successfully');
    }
    //User logout function
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success','Account Logged Out Successfully');
    }
    // User login fuction
    public function login(Request $request){
        $form_data=$request->validate(
            [
                'email'=>['email','required'],
                'password'=>['required','min:6']
            ]
            );
            
          
            
            if(auth()->attempt($form_data,$request->remember)){
                $request->session()->regenerate();
                return redirect('/pools')->with('success','Account Logged In Successfully');

            }
            return back()->withErrors(['error'=>'Invalid Login Details']);
        
    }
    public function profile($user){
      $is_user=False; 
      if($user==auth()->user()->username){
        $is_user=True;
      }
      $user=User::where('username',$user)->first();

      
     
      return view('user.profile',compact('is_user','user'));
    }
/*
    public function editProfile(Request $request,User $user){
        if(auth()->id()==$user->id){
           $form_data=$request->validate([
            'name',
            'email'=>'email:rfc,dns|email|unique:users',
            'username'=>'min:12',
            'country',
            'avatar'
           ]);

           if($request->hasFile('avatar')){
             $form_data['avatar']=$request->file('avatar')->store('avatar','public');

           }

           $user->update($form_data);

           return back()->with('success','User Profile Updated');
        }

        return abort('403');
    }*/
   public function follow($user){
     $user=User::where('username',$user)->first();
     $check_follower=$user->check_followers();
     dd($check_follower);
     if(!count($check_follower)>0){
     Follower::create([
      'follower_id'=>auth()->id(),
      'user_id'=>$user->id
     ]);  
     $user->followers+=1;
     $user->save(); 
    }else{
      $check_follower->first()->delete();
      $user->followers-=1;
      $user->save(); 
    }
      

    
    return back()->with('success','User Profile Updated');
 }
}
