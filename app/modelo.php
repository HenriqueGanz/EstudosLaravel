<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelo extends Model
{
    protected $fillable = ['marca_id','nome', 'imagem', 'numero_portas', 'lugares', 'air_bag', 'abs'];

    public function rules() {
        return [
            'marca_id' => 'exists:marcas,id',
            'nome' => 'required|unique:modelos,nome,'.$this->id.'|min:3',
            'imagem' => 'required|file|mimes:png,jpeg',
            'numero_portas' => 'required|integer|digits_between:1,5',
            'lugares' => 'required|integer|digits_between:1,5',
            'air_bag' => 'required|boolean',
            'abs' => 'required|boolean'
        ];

        #padrao unique tem 3 atributos
        #tabela
        #nome da coluna que sera pesquisada na tabela
        #id do registro que pode ser desconsiderado na pesquisa

    }

    public function marca() {
        //um modelo pertence a uma marca
        return $this->belongsTo('App\marca');
    }
}
