<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{
    
       public function index()
    {
  
$id = Auth::user()->id;

        $user = User::find($id);

        return view('profile.edit', compact('user'));
    }


    
       public function update(Request $request, $id)
{
        // dd($request);

        $user = User::find($id);
        // request()->validate(User::$rules);




        $user->name = $request->name;
        $user->email = $request->email;
        $user->agent_name = $request->agent_name;
        $user->short_code = $request->short_code;
        $user->address1 = $request->address1;
        $user->address2 = $request->address2;
        $user->country_id = $request->country_id;
        $user->city_id = $request->city_id;
        $user->state_id = $request->state_id;
        $user->state_id = $request->state_id;
        if($request->password){
        $user->password = Hash::make($request->password);
}

        $user->save();

        // $user->update($request->all());


        return redirect()->route('profile.index')
            ->with('success', 'User updated successfully');
    }
}
