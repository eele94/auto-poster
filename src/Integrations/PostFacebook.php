<?php

namespace Eele94\AutoPoster\Integrations;

class PostFacebook
{
    public function post(string $message): void
    {
        dd('Posting to Facebook with message: ' . $message);
    }
}
