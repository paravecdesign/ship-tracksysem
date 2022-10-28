<?php

namespace App\Http\Controllers;

use App\Models\ShipmentType;
use Illuminate\Http\Request;

/**
 * Class ShipmentTypeController
 * @package App\Http\Controllers
 */
class ShipmentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shipmentTypes = ShipmentType::paginate();

        return view('shipment-type.index', compact('shipmentTypes'))
            ->with('i', (request()->input('page', 1) - 1) * $shipmentTypes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shipmentType = new ShipmentType();
        return view('shipment-type.create', compact('shipmentType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ShipmentType::$rules);

        $shipmentType = ShipmentType::create($request->all());

        return redirect()->route('shipment-types.index')
            ->with('success', 'ShipmentType created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shipmentType = ShipmentType::find($id);

        return view('shipment-type.show', compact('shipmentType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shipmentType = ShipmentType::find($id);

        return view('shipment-type.edit', compact('shipmentType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ShipmentType $shipmentType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShipmentType $shipmentType)
    {
        request()->validate(ShipmentType::$rules);

        $shipmentType->update($request->all());

        return redirect()->route('shipment-types.index')
            ->with('success', 'ShipmentType updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $shipmentType = ShipmentType::find($id)->delete();

        return redirect()->route('shipment-types.index')
            ->with('success', 'ShipmentType deleted successfully');
    }
}
