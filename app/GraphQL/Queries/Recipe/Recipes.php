<?php

namespace App\GraphQL\Queries\Recipe;

final class Recipes
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        return [
            (object)[
                'id' => 1,
                'name' => 'tarte a la moutarde'
            ]
        ];
    }
}
