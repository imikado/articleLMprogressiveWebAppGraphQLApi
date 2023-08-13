<?php

namespace App\GraphQL\Queries\Recipe;

use Nuwave\Lighthouse\Execution\ResolveInfo;

final class Recipe
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args, $context, ResolveInfo $info)
    {
        dd($context);

        return
            (object)[
                'id' => $args['id'],
                'name' => 'tarte a la moutarde '
            ];
    }
}
