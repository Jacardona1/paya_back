<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $servicio_tipo_id
 * @property integer $empaque_tipo_id
 * @property integer $user_remitente_id
 * @property integer $user_empresa_id
 * @property integer $user_colaborador_id
 * @property integer $destinatario_id
 * @property integer $pago_forma_id
 * @property integer $estado_servicio_id
 * @property string $fecha_hora_admision
 * @property string $fecha_hora_estimada_entrega
 * @property string $dice_contener
 * @property string $observaciones
 * @property float $valor_comercial
 * @property float $valor_flete
 * @property float $costo_manejo
 * @property float $valor_descuento
 * @property float $otros_conceptos
 * @property float $total_servicio
 * @property string $created_at
 * @property string $updated_at
 * @property Destinatario $destinatario
 * @property EmpaquesTipo $empaquesTipo
 * @property EstadosServicio $estadosServicio
 * @property PagosForma $pagosForma
 * @property ServiciosTipo $serviciosTipo
 * @property User $user
// * @property User $user
// * @property User $user
 */
class Servicio extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'servicios';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['servicio_tipo_id', 'empaque_tipo_id', 'user_remitente_id', 'user_empresa_id', 'user_colaborador_id', 'destinatario_id', 'pago_forma_id', 'estado_servicio_id', 'fecha_hora_admision', 'fecha_hora_estimada_entrega', 'dice_contener', 'observaciones', 'valor_comercial', 'valor_flete', 'costo_manejo', 'valor_descuento', 'otros_conceptos', 'total_servicio', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function destinatario()
    {
        return $this->belongsTo('App\Destinatario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function empaquesTipo()
    {
        return $this->belongsTo('App\EmpaquesTipo', 'empaque_tipo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estadosServicio()
    {
        return $this->belongsTo('App\EstadosServicio', 'estado_servicio_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pagosForma()
    {
        return $this->belongsTo('App\PagosForma', 'pago_forma_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function serviciosTipo()
    {
        return $this->belongsTo('App\Models\ServiciosTipo', 'servicio_tipo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_colaborador_id');
    }

//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
//     */
//    public function user()
//    {
//        return $this->belongsTo('App\User', 'user_empresa_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
//     */
//    public function user()
//    {
//        return $this->belongsTo('App\User', 'user_remitente_id');
//    }
}
