<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class marca extends Model
{
    protected $fillable = ['nome', 'imagem'];

    public function rules() {
        return [
            'nome' => 'required|unique:marcas,nome,'.$this->id.'|min:3',
            'imagem' => 'required'
        ];

        #padrao unique tem 3 atributos
        #tabela
        #nome da coluna que sera pesquisada na tabela
        #id do registro que pode ser desconsiderado na pesquisa
    }

    public function feedback() {
        return [
            'required' => 'O campo :attribute é obrigatorio',
            'nome.unique' => 'Essa marca ja está cadastrada'
        ];
    }
}
