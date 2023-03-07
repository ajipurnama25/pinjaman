<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\kendaraan;
use Illuminate\Http\Request;
use App\Models\Flight;

class KendaraanController extends Controller
{
    public function show(){
       $data = kendaraan::all();
       return $data; 
    }
    public function insert(Request $request){
        $data = $request ->post();
        $opration = kendaraan::create($data);
        return $opration;
    }
    public function update(Request $request, kendaraan $data){
        $data = kendaraan::find(request()->id);
        $opration = $data->update($request->post());
        // print_r($data);exit;
        return $opration;
    }
    public function delete(Request $request, kendaraan $data){
        $data = kendaraan::find(request()->id);
        // print_r($data);exit;
        $opration = $data->delete();
        return $opration;
    }
}
