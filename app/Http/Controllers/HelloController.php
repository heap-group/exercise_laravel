<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function __construct()
    {
        config(['sample.message' => 'new message']);
    }
    //
    public function index(Request $request)
    {
        $configMessage = config('sample.message');
        $configData = config('sample.data');

        $data = [
            'msg' => $configMessage,
            'data' => $configData
        ];

        return view('hello.index', $data);
    }

    public function other(Request $request)
    {
        $data = [
            'msg' => $request->bye
        ];
        return view('hello.index', $data);
    }
}
