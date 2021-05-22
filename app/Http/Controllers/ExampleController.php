<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getMovie() : \Illuminate\Http\JsonResponse
    {
        $users = app('db')->select("SELECT * FROM admin_videos");

        return response()->json(["users" => $users]);
    }
}
