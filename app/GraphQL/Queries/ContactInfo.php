<?php

namespace App\GraphQL\Queries;

use Illuminate\Support\Facades\DB;

class ContactInfo
{
    /**
     * @param null $_
     * @param array<string, mixed> $args
     * @return mixed
     */
    public function __invoke($_, array $args)
    {
        // TODO: Reuse this resolver for multiple cases:
        //1. When args = null get the profile id from the root field
        //2. If both are null, return an [{fullName: ContactInfo}]
        $contacts =   DB::table("contacts")
        ->select(['*', 'contactValue as value'])
        ->where("profile_id", "=", $args['profileID'])->get();
        $collection = collect($contacts);
        $contactInfo = $collection->groupBy('contactType')->all();
        return json_decode(json_encode($contactInfo));
    }
}
