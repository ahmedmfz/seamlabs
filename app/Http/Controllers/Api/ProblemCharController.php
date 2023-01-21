<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Problem\CharRequest;

class ProblemCharController extends Controller
{

    public static function chars($n)
    {
        return $n < 0
            ? "" 
            : self::chars(((int)($n / 26)) -1) . chr((65 + $n % 26));
    }

    public function getIndexOfChars(CharRequest $charRequest){
       for ($i = 0; $i < 27 * 27 * 27 ; $i++)
        {
            if($charRequest->input_string == self::chars($i)){
                echo 'OUTPUT : ' .  $i + 1;
                break;
            }
        }
    }

}
