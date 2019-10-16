<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libs\ApiResponse;
use App\Models\Usuario;

class UsuarioController extends Controller
{


    private $ApiResponse;
    private $Request;
    private $model;


    public function __construct(ApiResponse $ApiResponse, Request $Request, Usuario $model)
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
        $data =  $this->model->where('user_tipo_id',$id)->get();
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
        $data =  $this->model->find($id);
        $data->delete();
    }
}
