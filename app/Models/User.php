<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $guarded = ['id'];
    protected $table = 'users';
    public function transactionDetails()
    {
        return $this->hasMany(TransactionDetails::class);
    }
}
