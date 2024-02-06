<?php

namespace Eele94\AutoPoster;

use Eele94\AutoPoster\Enums\SocialMedia;
use Str;

class AutoPoster
{
    public function post(SocialMedia $socialMedia, $id, string $message, $options = []): void
    {
        // find Integration class in Integrations folder with name Post{SocialMedia->value}
        $integration = 'Eele94\\AutoPoster\\Integrations\\Post' . Str::title($socialMedia->value);
        try {
            // instantiate Integration class
            $integration = new $integration();
            // call post method on Integration class
            $integration->post($id, $message, $options);
        } catch (\Exception $e) {
            // catch any errors
            dd($e->getMessage());
        }
    }
}
