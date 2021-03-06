<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductModel extends Model
{
    use SoftDeletes;

    protected $table = 'products';
    protected $primaryKey = 'ID';
    protected $fillable = ['Name', 'Price', 'Stock', 'Descriptions', 'Image'];
    protected $dates = ['deleted_at'];

    public function transaction(){
    	return $this->hasMany('App\TransactionsModel');
    }
}
