<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
// use Illuminate\Validation\Validator;
use PhpParser\Node\Expr\FuncCall;
use App\Rules\UserNameUnique;

class UserStoreRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules() {
        return [
            'name' => [new UserNameUnique, 'required']
        ];
    }
    // public function withValidator(Validator $validator) {
    //     $validator->after(function ($validator) {
    //     });
    // }
}
