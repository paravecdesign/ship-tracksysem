<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

/**
 * Class Billoflading
 *
 * @property $id
 * @property $shipper_id
 * @property $status_id
 * @property $date
 * @property $company_id
 * @property $description
 * @property $rate_id
 * @property $consignee_id
 * @property $courier_id
 * @property $pieces
 * @property $weight
 * @property $volume
 * @property $bl_number
 * @property $reference
 * @property $consignment
 * @property $preCarriageBy
 * @property $placeOfReceipt
 * @property $vessel
 * @property $voyageNo
 * @property $portOfLeading
 * @property $PortOfDischarge
 * @property $placeOfDelivery
 * @property $freightTeams
 * @property $shippedBoardDate
 * @property $placeDateOfIssue
 * @property $termConditions
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Billoflading extends Model
{
    use SoftDeletes;



    static $rules = [
        'shipper_id' => 'required',
        'consignee_id' => 'required',
        'courier_id' => 'required',
        'notifyparty_id' => 'required',
        'contactagent_id' => 'required',
        'other_id' => '',
        // 'bl_number' => 'required',
        'reference' => 'required',
        'preCarriageBy' => 'required',
        'placeOfReceipt' => 'required',
        'vessel' => 'required',
        'voyageNo' => 'required',
        'portofloading' => 'required',
        'PortOfDischarge' => 'required',
        'placeOfDelivery' => 'required',
        'freightTeams' => 'required',
        'charges' => 'required',
        'shippedBoardDate' => 'required',
        'placeDateOfIssue' => 'required',
        'measurement' => 'required',
        'weight' => 'required',
        'kindpackages' => 'required',
        'vesselflag' => 'required',
        'marknumber' => 'required',
        'finalDestination' => '',
        'warehouse_id' => '',
    ];

    protected $perPage = 20;
    protected $table = 'billoflading';
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    // protected $guarded = [];
    protected $fillable = [
        'shipper_id', 'status_id', 'date', 'company_id',
        'description', 'rate_id', 'consignee_id', 'courier_id', 'pieces', 'weight',
        'volume', 'bl_number', 'reference', 'consignment', 'preCarriageBy', 'placeOfReceipt',
        'vessel', 'voyageNo', 'portofloading', 'PortOfDischarge', 'placeOfLeading', 'placeOfDelivery',
        'freightTeams', 'shippedBoardDate', 'placeDateOfIssue', 'termConditions', 'measurement',
        'marknumber', 'notifyparty_id', 'contactagent_id', 'other_id', 'kindpackages', 'vesselflag', 'freightamount',
        'hbl_number', 'mbl_number', 'commodity', 'carriercode', 'bookingnumber', 'departure','asycudanumber','number','warehouse_id',
        'wharfinger','finalDestination','reported_date','whagent','charges'
    ];

    public function contents()
    {
        return $this->belongsToMany(Content::class, 'invoice_content');
    }
    public function getcontents()
    {
        return $this->hasMany(Content::class)->with('shipmenttype');
    }

    public function consignee()
    {
        return $this->belongsTo(Shipper::class, 'consignee_id')->with('country', 'state', 'city');
    }
    public function shipper()
    {
        return $this->belongsTo(Shipper::class, 'shipper_id')->with('country', 'state', 'city');
    }
    public function courier()
    {
        return $this->belongsTo(Shipper::class, 'courier_id')->with('country', 'state', 'city');
    }
    public function other()
    {
        return $this->belongsTo(Shipper::class, 'other_id')->with('country', 'state', 'city');
    }
    public function contactagents()
    {
        return $this->belongsTo(Shipper::class, 'contactagent_id')->with('country', 'state', 'city');
    }
    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class,'warehouse_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'warehouse_id');
    }




    public static function boot()
    {

        parent::boot();
      static::creating(function($model){
if(Auth::user()->is_admin == 0){
     $model->number = Billoflading::where('warehouse_id', $model->warehouse_id)->max('number') + 1;

            $model->hbl_number = Auth::user()->short_code . '-' . str_pad($model->number, 5, '0', STR_PAD_LEFT);
    
}
else{
    
     $model->number = Billoflading::where('warehouse_id', $model->warehouse_id)->max('number') + 1;

            $model->hbl_number = $model->user->short_code . '-' . str_pad($model->number, 5, '0', STR_PAD_LEFT);
}

           


        });

    }


}
