<?php

namespace App\Models;

use App\Models\baskettt;
use App\Models\produkts;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class baskettt extends Model
{
    protected $guarded=[];

    protected $fillable=['user_id', 'product_id', 'quantity'];
    public function products(){
        return $this->hasOne(produkts::class, 'id', 'product_id');
    }
}
