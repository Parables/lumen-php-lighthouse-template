<?php

namespace App\GraphQL\Queries;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ContactInfo
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
        $phones =   DB::table("contacts")
            ->where("person_id", "=", "cklowrujv0001immriqo0llu8")
            ->where("contact_type", "=", "phone")->pluck('contact_value');
        $emails =   DB::table("contacts")
            ->where("person_id", "=", "cklowrujv0001immriqo0llu8")
            ->where("contact_type", "=", "email")->pluck('contact_value');
        /* $address =   DB::table("contacts")
            ->where("person_id", "=", "cklowrujv0001immriqo0llu8")
            ->where("contact_type", "=", "address")->get();
        $social_media =   DB::table("contacts")
            ->where("person_id", "=", "cklowrujv0001immriqo0llu8")
            ->where("contact_type", "=", "social_media")->get();
        $websites =   DB::table("contacts")
            ->where("person_id", "=", "cklowrujv0001immriqo0llu8")
            ->where("contact_type", "=", "website")->get(); */
        $contactInfo = (object) [
            "phones" => $phones,
            "emails" => $emails
        ];
        clock("Hello World");
        return json_decode(json_encode($contactInfo));
    }
}
