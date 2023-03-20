<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    use HasFactory;
    public $timestamps=false;  

    protected $fillable = [
        'bank',
        'number',
    ];
//     public function transfer($destinationAccount, $amount)
// {
//     $this->balance -= $amount;
//     $destinationAccount->balance += $amount;
//     $this->save();
//     $destinationAccount->save();
// }
public function userview(){
    return $this->hasMany(userview::class);
}
public function transaction(){
    return $this->hasMany(Transaction::class);
}

}


