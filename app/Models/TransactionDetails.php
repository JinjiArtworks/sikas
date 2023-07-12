<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetails extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'transaction_details';
    public function transactions()
    {
        return $this->belongsTo(Transaction::class);
    }
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
    public function customers()
    {
        return $this->belongsTo(Customer::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    // foreign key yang dititipkan pada tabel, akan menggunakan relasi belongsTo. Sedangkan tabel utama yang menitipkan, di modelsnya menggunakan relasi hasMany / hasOne!!!!
}
