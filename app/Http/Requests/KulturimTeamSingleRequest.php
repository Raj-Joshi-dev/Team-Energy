<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KulturimTeamSingleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'answer.1' => 'required',
            'answer.2' => 'required',
            'answer.3' => 'required',
            'answer.4' => 'required',
            'answer.5' => 'required',
            'answer.6' => 'required',
            'answer.7' => 'required',
            'answer.8' => 'required',
            'answer.9' => 'required',
            'answer.10' => 'required',
            'answer.11' => 'required',
            'answer.12' => 'required',
            'answer.13' => 'required',
            'answer.14' => 'required',
            'answer.15' => 'required',
            'answer.16' => 'required',
            'answer.17' => 'required',
            'answer.18' => 'required',
            'answer.19' => 'required',
            'answer.20' => 'required',
        ];
    }
}
