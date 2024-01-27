<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\api\QueryException;
use App\Models\api\PesertaApi;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\api\validator;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Database\QueryException as DatabaseQueryException;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class PesertaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $pesertaapi = PesertaApi::all();
            return response()->json($pesertaapi, Response::HTTP_OK);
        } catch (\Illuminate\Database\QueryException $e) {
            $error = [
                'error' => $e->getMessage()
            ];
            return response()->json($error, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    try {
        $validator = FacadesValidator::make($request->all(), [
            'foto' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'angkatan' => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        
        PesertaApi::create($request->all());
        $response = [
            'Success' => 'New Peserta Created',
        ];
        return response()->json($response, Response::HTTP_CREATED);
    } catch (DatabaseQueryException $e) {
        $error = [
            'error' => $e->getMessage()
        ];
        return response()->json($error, Response::HTTP_UNPROCESSABLE_ENTITY);
    }
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $pesertaapi = PesertaApi::findOrFail($id);
            $response = [
                $pesertaapi
            ];
            return response()->json($response, Response::HTTP_OK);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'No result'
            ], Response::HTTP_FORBIDDEN);
        }
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
