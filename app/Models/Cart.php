<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    #esta es la variable que hace referecía a una tabla
    protected $table ='cart';

    #esta es la variable que indica la llave primaría
    protected $primaryKey = 'id';

    #hace referencia a created_at y updated_at
    public $timestamps = false;

    protected $fillable = [
        'total','user_id'
    ];

     #oculta columnas del modelo
     protected $hidden = ['created_at','updated_at'];

    public function user(){

        return $this->hasMany(User::class);

}
public function CartItem(){

    return $this->hasMany(CartItem::class);

}
}
