<?php

namespace App\Http\Controllers;

use App\Models\Billoflading;
use App\Models\Setting;
use App\Models\User;
use App\Models\Warehouse;
use Illuminate\Http\Request;

/**
 * Class WarehouseController
 * @package App\Http\Controllers
 */
class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warehouses = Warehouse::with('country','state','city')->paginate();

        return view('warehouse.index', compact('warehouses'))
            ->with('i', (request()->input('page', 1) - 1) * $warehouses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $warehouse = new Warehouse();
        return view('warehouse.create', compact('warehouse','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Warehouse::$rules);

        $warehouse = Warehouse::create($request->all());

        return redirect()->route('warehouses.index')
            ->with('success', 'Warehouse created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $warehouse = Warehouse::with('country','state','city')->find($id);
// dd($warehouse);
        return view('warehouse.show',[
            'warehouse' => $warehouse,
            'shipments' => Billoflading::where('warehouse_id',$warehouse->id)->paginate()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $warehouse = Warehouse::find($id);

        return view('warehouse.edit', compact('warehouse','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Warehouse $warehouse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Warehouse $warehouse)
    {
        request()->validate(Warehouse::$rules);

        $warehouse->update($request->all());

        return redirect()->route('warehouses.index')
            ->with('success', 'Warehouse updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $warehouse = Warehouse::find($id)->delete();

        return redirect()->route('warehouses.index')
            ->with('success', 'Warehouse deleted successfully');
    }



    public function printpage($id)
    {
        $setting = Setting::first();
        // dd($setting);
        $billoflading = Billoflading::with('getcontents', 'consignee', 'shipper', 'courier', 'other', 'contactagents')->find($id);
        // dd($billoflading);
        return view('warehouse.house_bl', [

            'setting' =>  $setting,
            'billoflading' =>  $billoflading,
        ]);
    }
}
