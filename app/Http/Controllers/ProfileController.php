<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Controllers\isNotEmpty;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    //Student_From

    public function Student_form(Request $request){
        return View('Student.Student_form');
    }   
    public function student_form_process (Request $request){
        $first_name=$request->first_name;
        $last_name=$request->last_name;
        echo $first_name;
        echo $last_name;
        die();
    }

//User_Detail

public function user_detial_Process(Request $request){
    $user = $request->input('user');
    $result = DB::table('users')
    ->WHERE ('name',$user)  
    ->get();
    if($result->isNotEmpty()){
        echo "Hello ", $user;

    }else{
        echo "Nothing here";
    }
}  
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }
    public function show_student (Request $request)
    {$users = DB::table('users')->select(['id', 'name', 'email'])->get(); 
        return View('student.index', ['users'=>$users]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    public function Home(Request $request){
        return View('Daskbord.Home');
}
}