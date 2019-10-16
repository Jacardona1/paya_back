<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_tipo_id
 * @property integer $documento_tipo_id
 * @property integer $user_empresa_id
 * @property string $name
 * @property string $email
 * @property string $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property string $nombres
 * @property string $apellidos
 * @property int $numero_documento
 * @property int $telefono
 * @property string $direccion
 * @property boolean $estado
 * @property DocumentosTipo $documentosTipo
 * @property Empresa $empresa
 * @property UsersTipo $usersTipo
 * @property Destinatario[] $destinatarios
 * @property Servicio[] $servicios
// * @property Servicio[] $servicios
// * @property Servicio[] $servicios
 */
class Usuario extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'users';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['user_tipo_id', 'documento_tipo_id', 'user_empresa_id', 'name', 'email', 'email_verified_at', 'password', 'remember_token', 'created_at', 'updated_at', 'nombres', 'apellidos', 'numero_documento', 'telefono', 'direccion', 'estado'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function documentosTipo()
    {
        return $this->belongsTo('App\DocumentosTipo', 'documento_tipo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function empresa()
    {
        return $this->belongsTo('App\Empresa', 'user_empresa_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usersTipo()
    {
        return $this->belongsTo('App\UsersTipo', 'user_tipo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function destinatarios()
    {
        return $this->hasMany('App\Destinatario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function servicios()
    {
        return $this->hasMany('App\Servicio', 'user_colaborador_id');
    }

//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function servicios()
//    {
//        return $this->hasMany('App\Servicio', 'user_empresa_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function servicios()
//    {
//        return $this->hasMany('App\Servicio', 'user_remitente_id');
//    }
}
