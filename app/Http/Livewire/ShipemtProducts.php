<?php

namespace App\Http\Livewire;

use App\Models\Content;
use App\Models\Shipper;
use Livewire\Component;
use App\Models\Warehouse;
use App\Models\Billoflading;
use App\Models\ShipmentType;

class ShipemtProducts extends Component
{
    public $editedContentIndex = null;

    public $bolContents = [];
    public $allContents = [];
    public $contents = [];
    public $contentdata, $containerNo, $billoflading;

    protected $rules = [
        'containerNo' => 'required|min:4',
        'qty' => 'required',
        'shipment_type_id' => 'required|min:4',
        'seal' => '',
    ];

    public function mount($data = Null)
    {

        // $this->billoflading = $billoflading;
        $this->contents = Content::all()->toArray();
        $this->allShipmentTypes = ShipmentType::all();
        $this->billoflading = Billoflading::with('getcontents')->find($data);
        //    dd($this->billoflading->getcontents);
        // $this->bolContents = $this->contentdata;

        if ($this->billoflading) {

            foreach ($this->billoflading->getcontents as $content) {

                $this->bolContents[] = [
                    'content_id' => $content->id,
                    'containerNo' => $content->containerNo,
                    'qty' => $content->qty,
                    'seal' => $content->seal,
                    'shipmenttype' => $content->shipmenttype->name ?? '',
                    'is_edit' => true

                ];
            }
        }
    }

    public function invoiceEdit($index)
    {
        $this->editedContentIndex = $index;
    }

    public function invoiceUpdate($index)
    {

        $content = $this->bolContents[$index] ?? NULL;

        if (!is_null($content)) {
            $editedContent = Content::find($content['content_id']);
            if ($editedContent) {
                $editedContent->update($content);
            }
        }
        $this->invoiceEdit($index);
        $this->editedContentIndex = null;
    }
    public function invoiceSave($index)
    {

        $content = $this->bolContents[$index] ?? NULL;
        // dd($content);
        if (!is_null($content)) {
            // $editedContent = Content::find($content['content_id']);

            Content::create($content);
        }

    }


    public function addbolContent()
    {



        $this->bolContents[] = [
            'content_id' => '',
            'billoflading_id' => '',
            'containerNo' => '',
            'qty' => 1,
            'seal' => '',
            'shipmenttype' => '',
            'is_edit' => false
        ];
    }

    public function invoiceRemove($index)
    {

        unset($this->bolContents[$index]);
        $this->bolContents = array_values($this->bolContents);
    }
    public function render()
    {

        return view('livewire.shipemt-products', [
            'consignees' => Shipper::where('role_id', 1)->get(),
            'shippers' => Shipper::where('role_id', 2)->get(),
            'couriers' => Shipper::where('role_id', 3)->get(),
            'others' => Shipper::where('role_id', 2)->get(),
            'contactagents' => Shipper::where('role_id', 4)->get(),
            'warehouses' => Warehouse::all(),
        ]);
    }
}
