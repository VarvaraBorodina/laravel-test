<?php



class ApiController extends \App\Http\Controllers\Controller
{
    public function __invoke(\Illuminate\Http\Request $request): \Illuminate\Http\JsonResponse
    {
        return response()->json(\App\Models\Product::all(), 200);
    }
}

