<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionsModel extends Model
{
    protected $primaryKey = 'ID';
    protected $table = 'transactions';
    protected $fillable = ['UserID', 'ProductID', 'PurchaseAmount'];
    protected $dates = ['deleted_at'];

    public function product(){
    	return $this->belongsTo('App\ProductModel');
    }
}
