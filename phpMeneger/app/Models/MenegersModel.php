<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenegersModel extends Model
{
    public $timestamps = false;

    public function checkStatusMeneger($category){
        $check = false;

        switch ($category){
            case 'html':
                if($this->html == true && $this->htmlCount < 10)
                    $check = true;
                break;
            case 'css':
                if($this->css == true && $this->cssCount < 10)
                    $check = true;
                break;
            case 'php':
                if(($this->php == true) && ($this->phpCount < 10))
                    $check = true;
                break;
            case 'javascript':
                if($this->javascript == true && $this->javascriptCount < 10)
                    $check = true;
                break;
            case 'aspnet':
                if($this->aspnet == true && $this->aspnetCount < 10)
                    $check = true;
                break;
        }
        if($check == true)
            return true;
    }

    public function countRequests(){
        return $this->htmlCount + $this->cssCount + $this->phpCount + $this->javascriptCount + $this->aspnetCount;
    }

    public function addToCount($category){
        switch ($category){
            case 'html':
                $this->htmlCount += 1;
                break;
            case 'css':
                $this->cssCount += 1;
                break;
            case 'php':
                $this->phpCount += 1;
                break;
            case 'javascript':
                $this->javaScriptCount += 1;
                break;
            case 'aspnet':
                $this->aspnetCount += 1;
                break;
        }
    }
}
/*$review = new MenegersModel();

$review->name = "Никита";
$review->html = false;
$review->css = false;
$review->php = true;
$review->javascript = true;
$review->aspnet = true;
$review->htmlCount = 0;
$review->cssCount = 0;
$review->phpCount = 0;
$review->javascriptCount = 0;
$review->aspnetCount = 0;

$review->save();*/
