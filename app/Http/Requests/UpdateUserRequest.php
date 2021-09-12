<?php

namespace App\Http\Requests;

use App\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateUserRequest extends FormRequest
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
        $userId = Auth::id();
        return [
            'name' => 'required|min:5|max:255,' .$userId,
            'email' => 'required|email:rfc,dns|unique:users,' .$userId,
            'password' => 'nullable|string|min:8',
            'team_id' => 'nullable',
            'roles' => 'required',
        ];
    }
}
