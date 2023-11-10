<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Report;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\HttpKernel\Tests\build;


class FoodTrackController extends Controller
{
    public function store(Request $request){
        $dataForObject = [
            '$comment',
            'breakfastPhoto',
            '$lunchPhoto',
            '$dinnerPhoto',
            '$snack1Photo',
            '$snack2Photo',
            '$snack3Photo',
        ];
        $paths = [];
        foreach ($request->file() as $key => $photo){
            $paths[$key] = $request->file($key)->store('storage','public');
        }
        $arr = array_merge($request->input(),$paths);
        $arr = array_slice($arr,1);
        $dataForObjectProceed = array_map(array($this,'getData'),$dataForObject);
        dd($arr);
        $report = (new ReportBuilder($arr))
            ->addBreakfastPhoto()
            ->addLunchPhoto()
            ->addDinnerPhoto()
            ->addSnack1Photo()
            ->addSnack2Photo()
            ->addSnack3Photo()
            ->addComment()
            ->build();
        dd($report);
        $dataForInsert = [];
        foreach ($report as $key => $value){
            $dataForInsert[$key] = $value;
        }
        Report::create($dataForInsert);
        return view('index');

    }
    public function getData($dataForObject){
        $newArr = [];
        if(array_key_exists($dataForObject,$this->arr)){
            // TODO: дописать дальше
        }
    }

    public function show(Report $report){
        $reports = $report->all();
        return view('reports', compact('reports'));
    }

    public function getWeekReport(Report $report){
        $reports = DB::table('reports')
            ->orderBy('created_at', 'desc')
            ->limit(7)
            ->get();
        return view('reports', compact('reports'));
    }

}
