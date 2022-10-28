<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Setting;
use App\Models\Shipper;
use App\Models\Warehouse;
use App\Models\Billoflading;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

/**
 * Class BillofladingController
 * @package App\Http\Controllers
 */
class BillofladingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


if(Auth::user()->is_admin == 0){
       $billofladings = Billoflading::with('warehouse')->where('warehouse_id',Auth::user()->id)->paginate();
}else {
    $billofladings = Billoflading::with('warehouse')->paginate();
}

         




        return view('billoflading.index', compact('billofladings'))
            ->with('i', (request()->input('page', 1) - 1) * $billofladings->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
         $agents = User::withcount('shipments')->whereHas('roles', function($q)
        {
            $q->where('name', '=', 'agent');

        })->get();
        
    if (auth()->check())  {  
        if (auth()->user()->hasRole('admin')) {
            
         $consignees = Shipper::where('role_id', 1)->get();
            $shippers = Shipper::where('role_id', 2)->get();
            $couriers = Shipper::where('role_id', 3)->get();
            $others = Shipper::where('role_id', 2)->get();
            $contactagents = Shipper::where('role_id', 4)->get();
            
       } else{
            $consignees = Shipper::where(['role_id'=> 1, 'user_id' => Auth::user()->id])->get();
            $shippers = Shipper::where(['role_id' => 2, 'user_id' => Auth::user()->id])->get();
            $couriers = Shipper::where(['role_id' => 3, 'user_id' => Auth::user()->id])->get();
            $others = Shipper::where(['role_id' => 2, 'user_id' => Auth::user()->id])->get();
            $contactagents = Shipper::where(['role_id' => 4, 'user_id' => Auth::user()->id])->get();
       } 

          }
        return view('billoflading.create', [
            'consignees' =>  $consignees,
            'shippers' => $shippers,
            'couriers' => $couriers,
            'others' => $others,
            'contactagents' => $contactagents ,
            'warehouses' => $agents,
            'billoflading' => new Billoflading()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        request()->validate(Billoflading::$rules);
$billoflading = Billoflading::create($request->all());
        if ($request->bolContents) {
            foreach ($request->bolContents as $content) {
                $billoflading->contents()->attach(
                    $billoflading['id'],
                    [
                        'qty' => $content['qty'],
                        'containerNo' => $content['containerNo'],
                        'shipment_type_id' => $content['shipment_type_id'],
                        'seal' => $content['seal']
                    ]
                );
            }
        }

        // $table->string('qty')->nullable();
        // $table->string('containerNo')->nullable();
        // $table->string('tyre')->nullable();
        // $table->string('size')->nullable();

        if ($request->saveprint) {
            // dd('print');
            return redirect('billofladings/print/' . $billoflading->id)
                ->with('success', 'Billoflading created successfully.');
        } elseif ($request->saveexit) {
            return redirect()->route('billofladings.index')
                ->with('success', 'Billoflading created successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $billoflading = Billoflading::with('getcontents', 'consignee', 'shipper', 'courier')->find($id);

        return view('billoflading.show', compact('billoflading'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
                
         $agents = User::withcount('shipments')->whereHas('roles', function($q)
        {
            $q->where('name', '=', 'agent');

        })->get();
          if (auth()->check())  {  
        if (auth()->user()->hasRole('admin')) {
            
         $consignees = Shipper::where('role_id', 1)->get();
            $shippers = Shipper::where('role_id', 2)->get();
            $couriers = Shipper::where('role_id', 3)->get();
            $others = Shipper::where('role_id', 2)->get();
            $contactagents = Shipper::where('role_id', 4)->get();
            
       } else{
            $consignees = Shipper::where(['role_id'=> 1, 'user_id' => Auth::user()->id])->get();
            $shippers = Shipper::where(['role_id' => 2, 'user_id' => Auth::user()->id])->get();
            $couriers = Shipper::where(['role_id' => 3, 'user_id' => Auth::user()->id])->get();
            $others = Shipper::where(['role_id' => 2, 'user_id' => Auth::user()->id])->get();
            $contactagents = Shipper::where(['role_id' => 4, 'user_id' => Auth::user()->id])->get();
       } 

          }
        
        return view('billoflading.edit', [
        'consignees' =>  $consignees,
            'shippers' => $shippers,
            'couriers' => $couriers,
            'others' => $others,
            'contactagents' => $contactagents ,
            'warehouses' => $agents,
            'billoflading' => Billoflading::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Billoflading $billoflading
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Billoflading $billoflading)
    {

        // request()->validate(Billoflading::$rules);

        $billoflading->update($request->all());

        // $billoflading->contents()->sync($billoflading);
        // foreach ($request->bolContents as $content) {
        //     $billoflading->contents()->sync(
        //         $billoflading['id'],
        //         [
        //          'qty' => $content['qty'],
        //         'containerNo' => $content['containerNo'],
        //         'tyre' => $content['tyre'],
        //         'seal' => $content['seal']
        //     ]
        //     );
        // }
        return redirect()->route('billofladings.index')
            ->with('success', 'Billoflading updated successfully');
    }



    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $billoflading = Billoflading::find($id)->delete();

        return redirect()->route('billofladings.index')
            ->with('success', 'Billoflading deleted successfully');
    }
}
