<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\User\User;

class UserNameUnique implements Rule {
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct() {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value) {
        if ($value === null) {
            return true;
        }
        $user = User::where($attribute, '=', $value)->exists();
        if ($user) {
            return false;
        }
        return true;
        // dd($attribute, $value, $user);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message() {
        return '同じ名前の人が存在します';
    }
}
