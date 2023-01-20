<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Problem\CharRequest;

class ProblemCharController extends Controller
{

    public static function strChar($i)
    {
        return $i < 0
            ? "" 
            : self::strChar(((int)($i / 26)) -1) . chr((65 + $i % 26));
    }

    public function getIndexOfChars(CharRequest $charRequest){
       for ($i = 0; $i < 27 * 27 * 27 ; $i++)
        {
            if($charRequest->input_string == self::strChar($i)){
                echo 'OUTPUT : ' .  $i + 1;
                break;
            }
        }
    }

}
