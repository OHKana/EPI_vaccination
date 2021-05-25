<?php

namespace App\Http\Controllers;

use App\Models\child_vaccine;
use App\Models\ChildVaccineSchedule;
use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\teenageVaccine;

class StockUpdateController extends Controller
{
    public function list()
    {
        $teenage_vaccine=teenageVaccine::all();
        $chlid_vaccine=child_vaccine::all();
        $stocks= Stock::all();
        return view('content.stockUpdate',compact('teenage_vaccine','chlid_vaccine','stocks'));
     }

     public function createStock(Request $request)
     {
        //  dd($request->all());


        $isVaccineAvaiable=Stock::where('child_v_id',$request->child_v_id)
            ->orWhere('teenage_v_id', $request->teenage_v_id )->first();


        // dd($isVaccineAvaiable);

        if($isVaccineAvaiable){



            if($request->child_v_id != 0){
                $isVaccineAvaiable->update([
                    'stock_in' =>$isVaccineAvaiable->stock_in +  $request->stock_in,
                    'available_stock'=>$isVaccineAvaiable->available_stock +  $request->stock_in
                ]);
                return redirect()->back()->with('success',"Stock updated successfully.");
            }
            if($request->teenage_v_id != 0){
                $isVaccineAvaiable->update([
                    'stock_in' =>$isVaccineAvaiable->stock_in + $request->stock_in,
                    'available_stock'=>$isVaccineAvaiable->available_stock + $request->stock_in
                ]);
                return redirect()->back()->with('success',"Stock updated successfully.");
            }
        }

        if($request->child_v_id != 0){
            Stock::create([
                'child_v_id'=>$request->child_v_id,
                'stock_in' => $request->stock_in,
                'available_stock'=>$request->stock_in
            ]);
        }
        if($request->teenage_v_id != 0){
            Stock::create([
                'teenage_v_id' => $request->teenage_v_id,
                'stock_in' => $request->stock_in,
                'available_stock'=>$request->stock_in
            ]);
        }


        return redirect()->back()->with('success',"Stock updated successfully.");
     }
}
