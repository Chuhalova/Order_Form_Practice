<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getIndex(){
        return view("programming_order_form");
    }
    public function ajaxRequest(Request $request){
        $response = array(
            'disciplines' => $request->disciplines,
            'instructions' => $request->instructions,
            'software' => $request->software,
            'deadline' => $request->deadline,
            'tasksize' => $request->tasksize,
            'status' => 'success',
        );
        return response()->json($response); 
     }
}
