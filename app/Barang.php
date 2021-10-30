<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = ['nama', 'harga', 'stok'];
    
    public static function barangs(){
        return self::select('id', 'nama', 'harga', 'stok')->get();
    }
}
