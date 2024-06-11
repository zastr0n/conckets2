<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pemesan',
        'jml_tiket',
        'tgl_pesanan',
        'total_harga',
        'id_tickets',
        'status',
    ];
    protected $table = 'pemesanan';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
