<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MergedResponseController extends Controller
{
    public function index()
    {
        return view('upload_response');
    }
    public function mergedResponse()
    {
        $firstResponse = json_decode(Storage::get('first_response.json'), true);
        $secondResponse = json_decode(Storage::get('second_response.json'), true);

        $mergedResponse = array_merge($firstResponse['data'], $secondResponse);

        $mergedResponse = json_encode($mergedResponse, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);

        return view('merged_response', ['mergedResponse' => $mergedResponse]);
    }


    public function upload(Request $request)
    {
        /**
        if ($request->hasFile('first_response')) {
            $request->file('first_response')->storeAs('app', 'first_response.json');
        } ...
        **/
        return redirect('/merged-response');
    }
}
