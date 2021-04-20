<?php

namespace App\Http\Controllers;

use App\Models\ProgrammingOrder;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getIndex()
    {
        return view("programming_order_form");
    }
    public function ajaxRequest(Request $request)
    {
        $price1 = $this->getPriceOnDiscipline($request);
        $price2 = $this->getPriceOnDeadline($price1, $request);
        $price3 = $this->getPriceOnTasksize($price2, $request);
        $response = array(
            'price'=>$price3,
            'status' => 'success',
        );
        return response()->json($response);
    }
    public function getPriceOnDiscipline(Request $request){
        if($request->disciplines=="web_programming"){
            return 30;
        }
        elseif($request->disciplines=="desktop_applications_development"){
            return 35;
        }
        elseif($request->disciplines=="mobile_applications_development"){
            return 45;
        }
        elseif($request->disciplines=="database_design_and_optimization"){
            return 40;
        }
        elseif($request->disciplines=="database_analysis_and_reports"){
            return 50;
        }
        elseif($request->disciplines=="computer_networking_and_cybersecurity"){
            return 55;
        }
        elseif($request->disciplines=="3D_CAD_modeling"){
            return 65;
        }
        elseif($request->disciplines=="algorithms"){
            return 60;
        }
        else{
            return 50;          
        }
    }
    public function getPriceOnDeadline($price, Request $request){
        switch ($request->deadline) {
            case null:
                $price *= 3;
                break;
            case "4h":
                $price *= 2.8;
                break;
            case "8h":
                $price *=2.5;
                break;
            case "24h":
                $price *=2.3;
                break;
            case "2d":
                $price *= 2.1;
                break;
            case "3d":
                $price *= 2;
                break;
            case "5d":
                $price *= 1.8;
                break;
            case "7d":
                $price *= 1.5;
                break;
            case "14d":
                $price *= 1;
                break;
        }
        return round($price);
    }
    public function getPriceOnTasksize($price, Request $request){
        switch ($request->tasksize) {
            case null:
                $price *= 1;
                break;
            case "small":
                $price *= 1;
                break;
            case "medium":
                $price *= 1.5;
                break;
            case "large":
                $price *= 2;
                break;
            case "extralarge":
                $price *= 2.5;
                break;
        }
        return round($price);
    }
    public function addOrder(Request $request){
            $order = new ProgrammingOrder();
            if($request->disciplines==null){
                $order->discipline = "web_programming";
            }else{
            $order->discipline = $request->disciplines;
            }
            $order->instructions = $request->instructions;
            $order->software = $request->software;
            if($request->deadline_input==null){
                $order->deadline = "4h";
            }else{
                $order->deadline = $request->deadline_input;
            }
            if($request->tasksize_input==null){
                $order->tasksize = "small";
            }else{
                $order->tasksize = $request->tasksize_input;
            }
            $order->save();
            return redirect('programming-order-form');
    }
}
