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
        return [
            // Formulário Pergunta e Resposta
        // if($this->sistema && $this->pergunta && $this->resposta){
            // return [
                'sistema' => 'required',
                'pergunta' => 'required|min:10|max:100',
                'resposta' => 'required|min:10',

            // ];
        // }
        // else // Formulário Código do Erro
            // if($this->sistema && $this->codigo && $this->descricao && $this->solucao){
                // return [
                    'sistema' => 'required',
                    'codigo' => 'required|max:15',
                    'descricao' => 'required|min:10',
                    'solucao' => 'required|min:10',

                // ];
            // }else // Formulário novo Sistema
                // if($this->novoSistema){
                //     return [
                        'novoSistema' => 'required|max:15'
                //     ];
                // }
        ];
    }

    public function messages()
    {
        return [
            // mensagens de erro do Formulário Pergunta e Resposta
            'sistema.required' => 'Opção do sistema obrigatório.',
            'pergunta.required' => 'O campo pergunta é obrigatório.',
            'pergunta.min' => 'O campo pergunta tem menos de 10 caracteres.',
            'pergunta.max' => 'O campo pergunta tem mais de 100 caracteres.',
            'resposta.required' => 'O campo resposta é obrigatório.',
            'resposta.min' => 'O campo resposta tem menos de 10 caracteres.',

            // Mensagens de erro do Formulário Códigos de Erro
            'codigo.required' => 'O campo código obrigatório.',
            'codigo.numeric' => 'Campo código deve ser apenas números.',
            'codigo.max' => 'O campo código deve conter até 15 caracteres.',
            'descricao.required' => 'O campo descricão é obrigatório.',
            'descricao.min' => 'O campo descrição tem menos de 10 caracteres.',
            'solucao.required' => 'O campo solução é obrigatório.',
            'solucao.min' => 'O campo solução tem menos de 10 caracteres.',

            // Mensagens de erro do Formulário No o Sistema
            'novoSistema.required' => 'O campo Novo Sistema é obrigatório.',
            'novoSistema.max' => 'Campo Novo Sistema deve conter até 15 caracteres.'

        ];
    }
}
