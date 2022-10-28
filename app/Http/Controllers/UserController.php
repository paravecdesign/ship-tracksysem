<?php

namespace App\Http\Controllers;

use App\Models\Billoflading;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::allows('Isadmin')) {
            return redirect(route('dashboard'));
        }
        $users = User::with('roles')->paginate();
// dd( $users);
        return view('user.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::allows('Isadmin')) {
            return redirect(route('dashboard'));
        }
        $user = new User();
        return view('user.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(User::$rules);
        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->agent_name = $request->agent_name;
        $user->short_code = $request->short_code;
        $user->address1 = $request->address1;
        $user->address2 = $request->address2;
        $user->country_id = $request->country_id;
        $user->city_id = $request->city_id;
        $user->state_id = $request->state_id;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route('freight-agents.index')
            ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Gate::allows('Isadmin')) {
            return redirect(route('dashboard'));
        }
        $user = User::find($id);
        $shipments = Billoflading::where('warehouse_id',$user->id)->paginate();

        return view('user.show', compact('user','shipments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Gate::allows('Isadmin')) {
            return redirect(route('dashboard'));
        }


        $user = User::find($id);

        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);

        $user = User::find($id);
        request()->validate(User::$rules);




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


        return redirect()->route('freight-agents.index')
            ->with('success', 'User updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();

        return redirect()->route('freight-agents.index')
            ->with('success', 'User deleted successfully');
    }


    public function printpage($id)
    {
        $setting = Setting::first();
        // dd($setting);
        $billoflading = Billoflading::with('getcontents', 'consignee', 'shipper', 'courier', 'other', 'contactagents')->find($id);
        // dd($billoflading);
        return view('billoflading.print', [

            'setting' =>  $setting,
            'billoflading' =>  $billoflading,
        ]);
    }
}
