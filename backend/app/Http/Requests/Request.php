<?php

namespace App\Http\Requests;

class Request extends \Illuminate\Http\Request
{
    /**
     * override
     *
     * @return bool
     */
    public function expectsJson()
    {
        return true;
    }

    /**
     * override
     *
     * @return bool
     */
    public function wantsJson()
    {
        return true;
    }
}
