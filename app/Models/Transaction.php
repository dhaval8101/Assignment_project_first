<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_id',
        'type',
        'category',
        'amount',
        'note',
    ];
    public function account(){
        return $this->belongsTo(account::class ,'account_id');
    }
    public function userview()
    {
        return $this->belongsTo(userview::class,'userview_id');
    }
}
