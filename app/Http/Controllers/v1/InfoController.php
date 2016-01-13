<?php namespace App\Http\Controllers\v1;

use Laravel\Lumen\Routing\Controller as Controller;

class InfoController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        return response()->json(['info' => 'Version 1.0 of the JWS API.']);
    }
}