<?php

namespace App\Http\Requests;

class Request extends \Illuminate\Http\Request
{
    /**
     * override
     *
     * @return bool
     */
    public function expectsJson(): bool
    {
        return true;
    }

    /**
     * override
     *
     * @return bool
     */
    public function wantsJson(): bool
    {
        return true;
    }
}
