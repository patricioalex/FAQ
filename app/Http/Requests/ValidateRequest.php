<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ValidateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        if(Auth::check()){
            return true;
        }

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // Formulário Pergunta e Resposta
        if($this->sistema && $this->pergunta && $this->resposta){
            return [
                'sistema' => 'required',
                'pergunta' => 'required',
                'resposta' => 'required'
            ];
        }
        // Formulário Código do Erro
        if($this->sistema && $this->codigo && $this->descricao && $this->solucao){
            return [
                'sistema' => 'required',
                'codigo' => 'required',
                'descricao' => 'required',
                'solucao' => 'required'
            ];
        }

        // Formulário novo Sistema
        if($this->novoSistema){
            return [
                'novoSistema' => 'required'
            ];
        }
    }

    public function messages()
    {
        return [
            // mensagens de erro do Formulário Pergunta e Resposta
            'sistema.required' => 'O campo sistema é obrigatório.',
            'pergunta.required' => 'O campo pergunta é obrigatório.',
            'resposta.required' => 'O campo resposta é obrigatório.',

            // Mensagens de erro do Formulário Códigos de Erro
            'codigo.required' => 'O campo código é obrigatório.',
            'descricao.required' => 'O campo descricão é obrigatório.',
            'solucao.required' => 'O campo solução é obrigatório.',

            // Mensagens de erro do Formulário No o Sistema
            'novoSistema.required' => 'O campo Novo Sistema é obrigatório.',
        ];
    }
}
