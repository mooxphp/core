<?php

namespace Moox\Core\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class CoreController extends Controller
{
    public function index()
    {
        $packages = config('core');

        return response()->json($packages);
    }
}
