<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compra extends Model
{
    use HasFactory;
    protected $fillable = ['descripcion', 'proveedors_id' , 'products_id']; //DENTRO DE LOS CORCHETES SE PONE CON LOS CAMPOS QUE VAMOS A TRABAJAR, Tambien añadir el campo de la otra tabla con la que se va a relacionar


    public function proveedors(){
        return $this->belongsTo(proveedor::class, 'proveedors_id'); //El primer parametro es de 
    }

    public function productos(){
        return $this->belongsTo(product::class, 'products_id'); //El primer parametro es de 
    }
}
