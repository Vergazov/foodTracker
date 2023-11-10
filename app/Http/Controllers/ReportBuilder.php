<?php


namespace App\Http\Controllers;


class ReportBuilder
{
    public $breakfastPhoto = false;
    public $lunchPhoto = false;
    public $dinnerPhoto = false;
    public $snack1Photo = false;
    public $snack2Photo = false;
    public $snack3Photo = false;
    public $comment = false;

    protected $request;

    public function __construct($request){
//        dd($request);
        $this->request = $request;
    }

    public function addBreakfastPhoto(){
        if(isset($this->request['breakfastPhoto'])){
            $this->breakfastPhoto = $this->request['breakfastPhoto'];
            return $this;
        }
    }

    public function addLunchPhoto(){
        if(isset($this->request['lunchPhoto'])){
            $this->lunchPhoto = $this->request['lunchPhoto'];
            return $this;
        }
    }
    public function addDinnerPhoto(){
        if(isset($this->request['dinnerPhoto'])){
            $this->dinnerPhoto = $this->request['dinnerPhoto'];
            return $this;
        }
    }
    public function addSnack1Photo(){
        if(isset($this->request['snack1Photo'])){
            $this->snack1Photo = $this->request['snack1Photo'];
            return $this;
        }
    }
    public function addSnack2Photo(){
        if(isset($this->request['snack2Photo'])){
            $this->snack2Photo = $this->request['snack2Photo'];
            return $this;
        }
    }
    public function addSnack3Photo(){
        if(isset($this->request['snack3Photo'])){
            $this->snack3Photo = $this->request['snack3Photo'];
            return $this;
        }
    }
    public function addComment(){
        if(isset($this->request['comment'])){
            $this->comment = $this->request['comment'];
            return $this;
        }else {
            return 0;
        }
    }

    public function build(){
        return new Report($this);
    }

}
