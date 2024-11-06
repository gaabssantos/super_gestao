<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => [
            'nome' => 'Fornecedor 1', 
            'status' => 'N', 
            'cnpj' => '612836128/0001-35',
            'ddd' => '11',
            'telefone' => '99872-1221'],
            1 => [
            'nome' => 'Fornecedor 2', 
            'status' => 'N', 
            'cnpj' => '1231231231425',
            'ddd' => '24',
            'telefone' => '23223-1236'],
            2 => [
            'nome' => 'Fornecedor 3', 
            'status' => 'S', 
            'cnpj' => '3451223',
            'ddd' => '32',
            'telefone' => '12343-1897'],
            3 => [
            'nome' => 'Fornecedor 4', 
            'status' => 'S', 
            'cnpj' => '3451223',
            'ddd' => '32',
            'telefone' => '12343-1897'],
            4 => [
            'nome' => 'Fornecedor 5', 
            'status' => 'S', 
            'cnpj' => '3451223',
            'ddd' => '32',
            'telefone' => '12343-1897'],
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
