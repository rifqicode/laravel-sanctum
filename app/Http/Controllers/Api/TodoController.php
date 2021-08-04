<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Todo;

class TodoController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'boolean|required'
        ]);

        $todo = Todo::create(
            $request->only([
                'name', 'status'
            ])
        );

        return response()->json([
            'message' => 'success added',
            'data' => $todo
        ]);
    }
}
