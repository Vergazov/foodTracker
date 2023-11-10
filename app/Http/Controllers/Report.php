<?php


namespace App\Http\Controllers;


class Report
{
    protected $breakfastPhoto = false;
    protected $lunchPhoto = false;
    protected $dinnerPhoto = false;
    protected $snack1Photo = false;
    protected $snack2Photo = false;
    protected $snack3Photo = false;
    protected $comment = false;

    public function __construct(ReportBuilder $builder)
    {
        $this->comment = $builder->comment;
        $this->breakfastPhoto = $builder->breakfastPhoto;
        $this->lunchPhoto = $builder->lunchPhoto;
        $this->dinnerPhoto = $builder->dinnerPhoto;
        $this->snack1Photo = $builder->snack1Photo;
        $this->snack2Photo = $builder->snack1Photo;
        $this->snack3Photo = $builder->snack1Photo;
    }


}
