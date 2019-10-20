<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libs\ApiResponse;
use App\Models\Empresa;

class EmpresaController extends Controller
{

    private $ApiResponse;
    private $Request;
    private $model;


    public function __construct(ApiResponse $ApiResponse, Request $Request, Empresa $model)
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
        $data =  $this->model->all();
        return response()->json(['message' => $this->ApiResponse->getResponseOk(), 'data' => $data]);
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
    public function store()
    {
        $data = $this->model;
        $data->nombre_corto = $this->Request->nombreCorto;
        $data->nombre_completo = $this->Request->nombreCompleto;
        $data->nit = $this->Request->nit;
        $data->digito_verificacion = $this->Request->digito;
        $data->direccion = $this->Request->direccion;
        $data->telefono = $this->Request->telefono;
        $data->celular = $this->Request->celular;
        $data->save();
        return response()->json(['message' => $this->ApiResponse->getResponseOk(), 'data' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =  $this->model->find($id);
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
        $data =  $this->model->find($id);
        return response()->json(['message' => $this->ApiResponse->getResponseOk(), 'data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $data =  $this->model->find($id);
        $data->nombre_corto = $this->Request->nombreCorto;
        $data->nombre_completo = $this->Request->nombreCompleto;
        $data->nit = $this->Request->nit;
        $data->digito_verificacion = $this->Request->digito;
        $data->direccion = $this->Request->direccion;
        $data->telefono = $this->Request->telefono;
        $data->celular = $this->Request->celular;
        $data->save();
        return response()->json(['message' => $this->ApiResponse->getResponseOk(), 'data' => $data]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =  $this->model->find($id);
        $data->delete();

    }
}
