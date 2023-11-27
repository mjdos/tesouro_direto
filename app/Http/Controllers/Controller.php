<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sucess(mixed $data, string $message = "Sucesso", int $statusCode = 200)
    {
        return response()->json([
            'status' => $data,
            'sucess' => true,
            'message' => $message,
        ], $statusCode);
    }

    public function error(string $message = "Falha", int $statusCode = 400)
    {
        return response()->json([
            'data' => null,
            'sucess' => false,
            'message' => $message,
        ], $statusCode);
    }
}
