<?php

namespace App\Http\Controllers;

use App\Libs\ApiResponse;
use Illuminate\Http\Request;
use App\Models\Servicio;
use Illuminate\Support\Facades\DB;

class ServicioController extends Controller
{


    private $ApiResponse;
    private $Request;
    private $model;


    public function __construct(ApiResponse $ApiResponse, Request $Request, Servicio $model)
    {
        $this->ApiResponse = $ApiResponse;
        $this->Request = $Request;
        $this->model = $model;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [];
        if($id){
        $data[0] = DB::table('servicios')
            ->join('servicios_tipos', 'servicios.servicio_tipo_id', '=', 'servicios_tipos.id')
            ->join('users AS r','user_remitente_id' , '=','r.id')
            ->join('destinatarios AS d','destinatario_id','=','d.id')
            ->join('users AS c','user_colaborador_id','=','c.id')
            ->join('estados_servicios AS es','estado_servicio_id','=','es.id')
            ->join('pagos_formas AS pf','pago_forma_id','=','pf.id')
            ->join('empaques_tipos AS et','empaque_tipo_id','=','et.id')
            ->where('c.user_empresa_id','=',$id)
            ->whereIn('estado_servicio_id',[1,2,3,4])
            ->orWhereNull('c.user_empresa_id')
            ->select('servicios.*','servicios_tipos.nombre AS tipoServicio','es.nombre AS estado','pf.nombre AS formaPago','et.nombre AS tipoEmpaque',
                DB::raw('CONCAT(r.nombres," ",r.apellidos) as remitente'),
                DB::raw('CONCAT(d.nombres," ",d.apellidos) as destinatario'),
                DB::raw('CONCAT(c.nombres," ",c.apellidos) as colaborador')
            )->get();
        $data[1] = DB::table('servicios')->where('estado_servicio_id','=','1')->count();
        $data[2] = DB::table('servicios')->where('estado_servicio_id','=','2')->count();
        $data[3] = DB::table('servicios')->where('estado_servicio_id','=','3')->count();
        $data[4] = DB::table('servicios')->where('estado_servicio_id','=','4')->count();
        $data[5] = DB::table('servicios')->where('estado_servicio_id','=','5')->count();
        }else{
            $data[0] = DB::table('servicios')
                ->join('servicios_tipos', 'servicios.servicio_tipo_id', '=', 'servicios_tipos.id')
                ->join('users AS r','user_remitente_id' , '=','r.id')
                ->join('destinatarios AS d','destinatario_id','=','d.id')
                ->join('users AS c','user_colaborador_id','=','c.id')
                ->join('estados_servicios AS es','estado_servicio_id','=','es.id')
                ->join('pagos_formas AS pf','pago_forma_id','=','pf.id')
                ->join('empaques_tipos AS et','empaque_tipo_id','=','et.id')
                ->whereIn('estado_servicio_id',[1,2,3,4])
                ->select('servicios.*','servicios_tipos.nombre AS tipoServicio','es.nombre AS estado','pf.nombre AS formaPago','et.nombre AS tipoEmpaque',
                    DB::raw('CONCAT(r.nombres," ",r.apellidos) as remitente'),
                    DB::raw('CONCAT(d.nombres," ",d.apellidos) as destinatario'),
                    DB::raw('CONCAT(c.nombres," ",c.apellidos) as colaborador')
                )->get();
            $data[1] = DB::table('servicios')->where('estado_servicio_id','=','1')->count();
            $data[2] = DB::table('servicios')->where('estado_servicio_id','=','2')->count();
            $data[3] = DB::table('servicios')->where('estado_servicio_id','=','3')->count();
            $data[4] = DB::table('servicios')->where('estado_servicio_id','=','4')->count();
            $data[5] = DB::table('servicios')->where('estado_servicio_id','=','5')->count();
        }

        return response()->json(['message' => $this->ApiResponse->getResponseOk(), 'data' => $data]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
