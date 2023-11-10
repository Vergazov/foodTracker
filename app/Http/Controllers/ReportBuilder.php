<?php


namespace App\Http\Controllers;


class ReportBuilder
{
    public $breakfastPhoto = false;
    public $breakfastComm = false;
    public $lunchPhoto = false;
    public $lunchComm = false;
    public $dinnerPhoto = false;
    public $dinnerComm = false;
    public $snack1Photo = false;
    public $snack1Comm = false;

    protected $request;

    public function __construct($request){
        $this->request = $request;
    }

    public function addBreakfastPhoto(){
        if(isset($this->request['breakfastPhoto'])){
            $this->breakfastPhoto = $this->request['breakfastPhoto'];
            return $this;
        }
    }
    public function addBreakfastComm(){
        if(isset($this->request['breakfastComm'])){
            $this->breakfastComm = $this->request['breakfastComm'];
            return $this;
        }
    }
    public function addLunchPhoto(){
        if(isset($this->request['lunchPhoto'])){
            $this->lunchPhoto = $this->request['lunchPhoto'];
            return $this;
        }
    }
    public function addLunchComm(){
        if(isset($this->request['lunchComm'])){
            $this->lunchComm = $this->request['lunchComm'];
            return $this;
        }
    }
    public function addDinnerPhoto(){
        if(isset($this->request['dinnerPhoto'])){
            $this->dinnerPhoto = $this->request['dinnerPhoto'];
            return $this;
        }
    }
    public function addDinnerComm(){
        if(isset($this->request['dinnerComm'])){
            $this->dinnerComm = $this->request['dinnerComm'];
            return $this;
        }
    }
    public function addSnack1Photo(){
        if(isset($this->request['snack1Photo'])){
            $this->snack1Photo = $this->request['snack1Photo'];
            return $this;
        }
    }
    public function addSnack1Comm(){
        if(isset($this->request['snack1Comm'])){
            $this->snack1Comm = $this->request['snack1Comm'];
            return $this;
        }
    }

    public function build(){
        return new Report($this);
    }

}
