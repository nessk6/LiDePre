<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'codpost'=> ['require','numeric','max:5','min:5'],
            'villutil'=> ['require'],
            'pseudo'=> ['require','max:255','min:4'],
            'datnai'=> ['require'],

        ])->validate();

        return User::create([
            'name' => $input['name'],
            'prenutil' => $input['prenutil'],
            'pseudo' => $input['pseudo'],
            'datnai' => $input['datnai'],
            'adres' => $input['adres'],
            'villutil' => $input['villutil'],
            'codpost' => $input['codpost'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),

            
        ]);
    }
}
