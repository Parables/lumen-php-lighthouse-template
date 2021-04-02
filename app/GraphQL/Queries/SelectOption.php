<?php

namespace App\GraphQL\Queries;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class SelectOption
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
    }

    public function childrenOptions($_, array $args):Collection {
     return   DB::table('select_options')->where('parentID', '=', $args['id'])->get();
    }
}
