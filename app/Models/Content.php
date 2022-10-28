<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    // protected $guarded = [];
    protected $table = 'invoice_content';
    protected $fillable = ['content_id','containerNo','shipment_type_id','seal','qty','billoflading_id'];
    public function shipmenttype()
    {
        return $this->belongsTo(ShipmentType::class,'shipment_type_id');
    }
}
