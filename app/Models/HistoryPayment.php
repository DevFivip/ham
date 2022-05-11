<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryPayment extends Model
{
    use HasFactory;
    public $fillable = [
        "currency_code", "given_name", "surname", "_id", "value", 'group_id', 'user_id'
    ];
}
