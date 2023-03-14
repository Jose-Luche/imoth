<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Agent;
use App\Models\Client;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use App\Http\Controllers\Backend\RandomNumberController;

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
            'account_type' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile' => ['required', 'max:15'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        if ($input['account_type'] == 'agent') {
            $agent = new Agent;
            $agent->create([
                'name' => $input['name'],
                'email' => $input['email'],
                'mobile' => $input['mobile'],
                'stamp' => (new RandomNumberController)->getRandomMix(10),

            ]);
            $notification = array(
                'message' => 'Account created successfully, Please await verification ',
                'alert-type' => 'success'
            );
        } else {
            $client = new Client;
            $client->create([
                'name' => $input['name'],
                'email' => $input['email'],
                'mobile' => $input['mobile'],
                'stamp' => (new RandomNumberController)->getRandomMix(10),
            ]);

            $notification = array(
                'message' => 'Account created successfully, Please login ',
                'alert-type' => 'success'
            );
        }

        return User::create([
            'name' => $input['name'],
            'account_type' => $input['account_type'] ?? 'client',
            'email' => $input['email'],
            'password' => Hash::make($input['mobile']),
        ]);
    }
}
