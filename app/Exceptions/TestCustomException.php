<?php

namespace App\Exceptions;

use Exception;

class TestCustomException extends Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        dump("=== sample/app/Exceptions/TestCustomException.php ===");
        dump("===== report =====");
    }

    /**
     * Render the exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function render($request)
    {
        dump("===== render =====");

        return response([]);
    }
}
