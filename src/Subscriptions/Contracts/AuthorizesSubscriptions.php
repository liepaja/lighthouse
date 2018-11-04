<?php

namespace Nuwave\Lighthouse\Subscriptions\Contracts;

use Illuminate\Http\Request;

interface AuthorizesSubscriptions
{
    /**
     * Authorize subscription request.
     *
     * @param string  $channel
     * @param Request $request
     *
     * @return bool
     */
    public function authorize($channel, Request $request);
}