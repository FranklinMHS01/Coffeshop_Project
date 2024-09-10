<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'tb_menus';
    protected $primaryKey = 'id_menu';

    protected $fillable = [
        "id_menu",
        "nama_menu",
        "jenis_menu",
        "quantity",
        "harga",
        "img_menu",
        "created_at",
        "update_at",
    ];

    
}