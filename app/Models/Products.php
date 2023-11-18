<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Products extends Model
{
    use HasFactory;
    use SoftDeletes;

    #esta es la variable que hace referecía a una tabla
    protected $table ='product';

    #esta es la variable que indica la llave primaría
    protected $primaryKey = 'id';

    #hace referencia a created_at y updated_at
    public $timestamps = true;

    #especificacion de la columnas dentro de la tabla
    protected $fillable = [
        'img','cod','sab','pre','desc',
    ];

    #oculta columnas del modelo
    protected $hidden = ['created_at','updated_at'];

    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->img);
    }

    public function cartitem(){
        return $this->hasMany(CartItem::class);
    }

}
