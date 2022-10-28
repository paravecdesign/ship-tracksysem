<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardContraller extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $agents = User::withcount('shipments')->whereHas('roles', function($q)
        {
            $q->where('name', '=', 'agent');

        })->get();

        return view('dashboard', compact('agents'));
    }
}
