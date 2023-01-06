<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nama_bank',
        'pemilik_rekening',
        'nominal',
        'bukti',
        'status'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
