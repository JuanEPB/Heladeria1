<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    #esta es la variable que hace referecía a una tabla
    protected $table ='cartitem';

    #esta es la variable que indica la llave primaría
    protected $primaryKey = 'id';

    #hace referencia a created_at y updated_at
    public $timestamps = false;

    protected $fillable = [
        'product_id','cantidad','cart_id'
    ];

     #oculta columnas del modelo
     protected $hidden = ['created_at','updated_at'];

    public function cart(){

        return $this->belongsTo(Cart::class);

}
public function products(){

    return $this->belongsTo(Products::class);


}
}
