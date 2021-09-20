<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UserRequest extends FormRequest
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

        /**
         * Alternative way : source - https://www.youtube.com/watch?v=YK8GZmuf8_0
         */

//        $passwordRule = ['required','string', 'min:8'];
//
//        if (request()->routeIs('users.store')) {
//            $passwordRule = 'required';
//        } elseif (request()->routeIs('users.update')) {
//            $passwordRule = 'optional';
//        }


        return [
            'name' => 'required|min:5|max:20',
            'email' => ['required', Rule::unique('users')->ignore($this->user), 'email:rfc,dns'],
//            'email' => 'required|email:rfc,dns|unique:users',
//            'password' => 'required|string|min:8',

            /**
             * source : https://laravel-news.com/defining-default-password-validation-rules
             */

            'password' => [Rule::when(request()->isMethod('POST'), 'required'),
                Rule::when(request()->isMethod('PATCH'), 'sometimes'),
                Password::defaults()
            ],

//            'password' => [$passwordRule, Password::defaults()],
            'team_id' => 'nullable',
            'roles' => 'required',
        ];
    }

    /**
     * If password is left blank in form, password cannot be sent as null.
     */
    protected function prepareForValidation()
    {
        if ($this->password == null) {
            $this->request->remove('password');
        }
    }
}
