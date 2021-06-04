<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use JWTAuth;

/**
 * Class PacienteController
 * @package App\Http\Controllers
 */
class PacienteController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();
    }

    public function getPacientes(){
        if(Paciente::all()->count() > 0){
            return Paciente::all();
        }
        return response()->json(['error' => 'Não foi encontrado pacientes no sistema']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        //Validate data
        $data = $request->only('cpf', 'data_nascimento', 'sexo', 'tipo_sanguineo','usuario_id');
        $validator = Validator::make($data, [
            'cpf' => 'required|string',
            'data_nascimento' => 'required',
            'sexo' => 'required',
            'tipo_sanguineo' => 'required',
            'usuario_id' => 'required'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()]);
        }

        $date = Carbon::createFromFormat('m/d/Y', $request->data_nascimento)->format('Y-m-d');

        //Request is valid, create new product
        $paciente = Paciente::create([
            'cpf' => $request->cpf,
            'data_nascimento' => $date,
            'sexo' => $request->sexo,
            'tipo_sanguineo' => $request->tipo_sanguineo,
            'usuario_id' => $request->usuario_id
        ]);

        //Paciente created, return success response
        return response()->json([
            'success' => true,
            'message' => 'Paciente Criado com sucesso',
            'data' => $paciente
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Paciente $paciente
     * @return JsonResponse
     */
    public function update(Request $request, int $id): JsonResponse
    {
        //Validate data
        $data = $request->only('cpf', 'data_nascimento', 'sexo', 'tipo_sanguineo','usuario_id');
        $validator = Validator::make($data, [
            'cpf' => 'string|required',
            'data_nascimento' => 'required',
            'sexo' => 'required',
            'tipo_sanguineo' => 'required',
            'usuario_id' => 'required'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }

        $date = Carbon::createFromFormat('m/d/Y', $request->data_nascimento)->format('Y-m-d');

        $paciente = Paciente::find($id);

        //Request is valid, create new product
        $paciente->update([
            'cpf' => $request->cpf,
            'data_nascimento' => $date,
            'sexo' => $request->sexo,
            'tipo_sanguineo' => $request->tipo_sanguineo,
            'usuario_id' => $request->usuario_id
        ]);

        //Product updated, return success response
        return response()->json([
            'success' => true,
            'message' => 'Paciente atualizado com sucesso!!',
            'data' => $paciente
        ], Response::HTTP_OK);
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param Request $request
     * @param Paciente $paciente
     * @return JsonResponse
     */
    public function delete(Request $request, int $id): JsonResponse
    {
        $paciente = Paciente::find($id);

        //Request is valid, create new product
        $paciente->delete();

        //Product updated, return success response
        return response()->json([
            'success' => true,
            'message' => 'Paciente excluido com sucesso!!',
            'data' => $paciente
        ], Response::HTTP_OK);
    }

}
