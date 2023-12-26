<?php

namespace App\Http\Controllers;

use App\marca;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class MarcaController extends Controller
{
    public function __construct(Marca $marca)
    {
        $this->marca = $marca;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marca = $this->marca->all();
        return $marca;
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->marca->rules(), $this->marca->feedback());
        $marca = $this->marca->create($request->all());

        return response()->json($marca, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param Integer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $marca = $this->marca->find($id);

        if ($marca === null) {
            return response()->json(['mensagem' => 'Marca pesquisada não existe'], 404);
        }

        return response()->json($marca, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\marca $marca
     * @return \Illuminate\Http\Response
     */
    public function edit(marca $marca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Integer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $marca = $this->marca->find($id);

        if ($marca === null) {
            return response()->json(['error' => 'Impossivel realizar operação. Esta marca não existe.'], 404);
        }
        $request->validate($this->marca->rules(), $this->marca->feedback());
        $marca->update($request->all());
        return response()->json($marca, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Integer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marca = $this->marca->find($id);

        if ($marca === null) {
            return response()->json(['error' => 'Impossivel realizar a exclusão. Esta marca não existe.'], 404);
        }

        $marca->delete();
        return response()->json(['msg' => 'a marca foi removida com sucesso!'], 200);
    }
}
