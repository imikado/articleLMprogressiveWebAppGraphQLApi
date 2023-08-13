<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use Illuminate\Contracts\Hashing\Hasher;

final class Register
{

    protected Hasher $hash;

    public function __construct(Hasher $hash)
    {
        $this->hash = $hash;
    }


    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {

        $input = $args['input'];


        $properties = [
            'name' => $input['email'],
            'email' => $input['email'],
            'password' => $this->hash->make($input['password'])
        ];
        $user = new User();
        $user->fill($properties);
        $user->save();

        return $user;
    }
}
