<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Report;


class FoodTrackController extends Controller
{
    public function store(Request $request){
//        dump($request->input());
        $paths = [];
        foreach ($request->file() as $key => $photo){
            $paths[$key] = $request->file($key)->store('storage','public');
        }
        $arr = array_merge($request->input(),$paths);
        $arr = array_slice($arr,1);
//        dd($arr);
        $path = $request->file('breakfastPhoto')->store('storage','public');
//        return view('index',compact('path'));
        $report = (new ReportBuilder($arr))
            ->addBreakfastPhoto()
            ->addBreakfastComm()
            ->addLunchPhoto()
            ->addLunchComm()
            ->addDinnerPhoto()
            ->addDinnerComm()
            ->addSnack1Photo()
            ->addSnack1Comm();
        dd($report);
        $dataForInsert = [];
        foreach ($report as $key => $value){
            $dataForInsert[$key] = $value;
        }
//        dd($dataForInsert);
        Report::create($dataForInsert);
        return view('index');

    }

    public function show(Report $report){
        $reports = $report->all();
        return view('reports', compact('reports'));
    }

}
