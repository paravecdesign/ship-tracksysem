<?php

namespace App\Http\Controllers;


use App\Traits\Multitenntfilter;
use App\Models\Country;
use App\Models\State;
use App\Models\Shipper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/**
 * Class ShipperController
 * @package App\Http\Controllers
 */
class ShipperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
if(Auth::user()->is_admin == 0){
       $shippers =  Shipper::where('user_id',Auth::user()->id)->paginate();
}else {
 
        $shippers = Shipper::paginate();
}

        return view('shipper.index',compact('shippers'))
            ->with('i', (request()->input('page', 1) - 1) * $shippers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::get();
        $shipper = new Shipper();
        return view('shipper.create', compact('shipper','countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        request()->validate(Shipper::$rules);

        $shipper = Shipper::create($request->all());

        return redirect()->route('shippers.index')
            ->with('success', 'Shipper created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shipper = Shipper::find($id);

        return view('shipper.show', compact('shipper'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $countries = Country::get();
        $shipper = Shipper::find($id);

        return view('shipper.edit', compact('shipper','countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Shipper $shipper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shipper $shipper)
    {
        request()->validate(Shipper::$rules);
 
        $shipper->update($request->all());

        return redirect()->route('shippers.index')
            ->with('success', 'Shipper updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $shipper = Shipper::find($id)->delete();

        return redirect()->route('shippers.index')
            ->with('success', 'Shipper deleted successfully');
    }
}
