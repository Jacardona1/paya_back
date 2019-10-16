<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nombre_completo
 * @property string $nombre_corto
 * @property int $nit
 * @property int $digito_verificacion
 * @property string $direccion
 * @property int $telefono
 * @property int $celular
 * @property string $created_at
 * @property string $updated_at
 * @property User[] $users
 */
class Empresa extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'empresas';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nombre_completo', 'nombre_corto', 'nit', 'digito_verificacion', 'direccion', 'telefono', 'celular', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\User', 'user_empresa_id');
    }
}
