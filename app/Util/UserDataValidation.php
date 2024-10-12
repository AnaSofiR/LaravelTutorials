<?php

namespace App\Util;

use Illuminate\Http\Request;

class UserDataValidation
{
    public function validateProductRequest(Request $request): array
    {
        return $request->validate([
            "name" => "required",
            "price" => ["required", "gt:0"]
        ]);
    }
}