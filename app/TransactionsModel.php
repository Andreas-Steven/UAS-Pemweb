<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionsModel extends Model
{
    protected $table = 'transactions';
    protected $fillable = ['UserID', 'ProductID', 'PurchaseAmount'];
    protected $dates = ['deleted_at'];
}
