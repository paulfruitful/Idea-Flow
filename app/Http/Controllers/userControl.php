<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\Welcome;
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
    public function profile($username){ 
      $user=User::where('username',$username);
     
      return view('user.profile');
    }

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
    }
  /*  public function follow(User $user){
     $user->followers+=1;
     $user->save();    

    
    return back()->with('success','User Profile Updated');
 }*/
    public function ideas(User $user){
        dd($user->ideas->all());
       return view('user.ideas',[
        'user'=>$user->idea()->latest()
       ]);
        

}
}
