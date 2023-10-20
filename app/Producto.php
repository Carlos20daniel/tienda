<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $name
 * @property $costo
 * @property $descripcion
 * @property $existencia
 * @property $categoria
 * @property $provedor
 * @property $creacion
 * @property $actualizacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Pedido[] $pedidos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'name' => 'required',
		'costo' => 'required',
		'descripcion' => 'required',
		'existencia' => 'required',
		'categoria' => 'required',
		'provedor' => 'required',
		'creacion' => 'required',
		'actualizacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','costo','descripcion','existencia','categoria','provedor','creacion','actualizacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidos()
    {
        return $this->hasMany('App\Pedido', 'productos_id', 'id');
    }
    

}
