<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = [
        'estado',
        'cidade',
        'bairro',
        'cep',
        'nome_rua',
        'numero_casa',
        'ponto_referencia',
    ];


    public static $regras_validacao = [
        'estado' => 'required',
        'cidade' => 'required',
    ];

    public static $regras_validacao_api = [
        'estado' => 'required',
        'cidade' => 'required',
        'numero_casa' =>'bail|integer'
    ];
}
