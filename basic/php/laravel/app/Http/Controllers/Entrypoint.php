<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Entrypoint extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request): array
    {
        return [
            'success' => true,
            'data' => 'Hello Word'
        ];
    }
}
