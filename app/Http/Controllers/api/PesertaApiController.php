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
// use Illuminate\Support\Facades\Auth;
use Auth;

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

            return response()->json([
                'status' => 'Success',
                'message' => 'List data peserta',
                'data' => $pesertaapi,
                // 'image' => $image,
            ]);
            // return response()->json($pesertaapi, Response::HTTP_OK);
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
    public function show($id_peserta)
    {
        try {
            $pesertaapi = PesertaApi::findOrFail($id_peserta);
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

    public function loginApi(Request $request)
    {
        // $loginData = $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);

        // if (Auth::attempt($loginData)) {
        //     $token = Auth::user()->createToken('authToken')->plainTextToken;
        //     return response()->json([
        //         'data' => Auth::user(),
        //         'token' => $token,
        //     ],200);
        // }

        // return response()->json([
        //     'message' => 'Invalid Credentials',
        // ], 401);

        // if (PesertaApi::attempt(['email'=>$request->email, 'password'=>$request->password])){
        //     $auth = PesertaApi::user();
        //     $success['token'] = $auth->createToken('auth_token')->plainTextToken;
        //     $success['nama'] = $auth->nama;
        //     return response()->json([
        //         'success' => true,
        //         'message' => 'Login Success',
        //         'data' => $success,
        //     ]);
        // }else{
        //     return response()->json([
        //         'success' => false,
        //         'message' => 'Login Failed',
        //         'data' => null,
        //     ]);

        // }

        
        $user = PesertaApi::where('email', $request->email)->first();

        if ($user) {
            if ($request->password === $user->password) {
                $token = $user->createToken('auth_token')->plainTextToken;

                return response()->json([
                    'success' => true,
                    'message' => 'Login Success',
                    'token' => $token,
                    'nama' => $user->nama,
                ]);
            }
        }

        return response()->json([
            'success' => false,
            'message' => 'Login Failed',
            'data' => null,
        ]);


    }

    // public function logout()
    // {
    //     auth()->user()->tokens()->delete();

    //     return [
    //         'message' => 'You have successfully logged out and the token was successfully deleted'
    //     ];
    // }

    // public function logoutApi(Request $request)
    // {
    //     $request->user()->tokens()->delete();

    //     return response()->json([
    //         'message' => 'You have successfully logged out.'
    //     ]);
    // }
}
