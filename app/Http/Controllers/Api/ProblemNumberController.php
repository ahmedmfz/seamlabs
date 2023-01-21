<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Problem\NumberRequest;

class ProblemNumberController extends Controller
{

    public function getResultOfNumbers(NumberRequest $numberRequest){
        $numberBetween = [];
        for ($i=$numberRequest->start; $i <= $numberRequest->end; $i++) {
            if( !substr_count($i, '5'))
                    $numberBetween[] = $i;
        }
        return  $numberRequest->start .','. $numberRequest->end.'->'. implode(',' ,$numberBetween).'-> Result : '.count($numberBetween);
    }

}
