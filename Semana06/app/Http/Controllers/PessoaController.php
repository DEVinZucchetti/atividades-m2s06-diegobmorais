<?php

namespace App\Http\Controllers;
use App\Models\Pessoa;

class PessoaController extends Controller
{
    public function index()
    {
        try {
            $pessoas = Pessoa::all();

            return response()->json([
                'success' => true,
                'data' => $pessoas,
                'message' => count($pessoas) . ' pessoas encontradas.'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro interno do servidor.'
            ], 500);
        }
    }
}
