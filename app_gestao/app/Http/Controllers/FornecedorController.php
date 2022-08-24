<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1', 
                'status' => 'N', 
                'cnpj' => '00.000.000/0000-00',
                'ddd' => '11', //Sao Paulo(SP)
                'telefone' => '90000-0000'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S', 
                'cnpj' => '11.000.000/0000-00',
                'ddd' => '79', //Sergipe(SE)
                'telefone' => '91111-1111'
            ],
            2 => [
                'nome' => 'Fornecedor 3', 
                'status' => 'S', 
                'cnpj' => '22.000.000/0000-00',
                'ddd' => '85', //Fortaleza(CE)
                'telefone' => '92222-2222'
            ],
            3 => [
                'nome' => 'Fornecedor 4',
                'status' => 'S', 
                'cnpj' => '33.000.000/0000-00',
                'ddd' => '32', // Juiz de Fora(MG) 
                'telefone' => '93333-3333'
            ],
            4 => [
                'nome' => 'Fornecedor 5',
                'status' => 'S', 
                'cnpj' => '44.000.000/0000-00',
                'ddd' => '00', // Juiz de Fora(MG) 
                'telefone' => '94444-4444'
            ],
        ];
        $msg = isset($fornecedores[2]['cnpj']) ? 'CNPJ informado' : 'CNPJ nao informado';
        echo $msg;

        //$fornecedores = [];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
