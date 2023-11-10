<?php


namespace App\Http\Controllers;


class Report
{
    protected $breakfastPhoto = false;
    protected $breakfastComm = false;
    protected $lunchPhoto = false;
    protected $lunchComm = false;
    protected $dinnerPhoto = false;
    protected $dinnerComm = false;
    protected $snack1Photo = false;
    protected $snack1Comm = false;

    public function __construct(ReportBuilder $builder)
    {
        $this->breakfastComm = $builder->breakfastComm;
        $this->lunchComm = $builder->lunchComm;
        $this->dinnerComm = $builder->dinnerComm;
        $this->snack1Comm = $builder->snack1Comm;
        $this->breakfastPhoto = $builder->breakfastPhoto;
        $this->lunchPhoto = $builder->lunchPhoto;
        $this->dinnerPhoto = $builder->dinnerPhoto;
        $this->snack1Photo = $builder->snack1Photo;
    }


}
