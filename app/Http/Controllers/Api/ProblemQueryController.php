<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class ProblemQueryController extends Controller
{

    public function queryToZero(int $n = 2 ,array  $q = [3,4]){
       $this->validateQueryFunction($n , $q);
       $result= [];
       foreach($q as $query)
           $result[] =  self::downToZero($query);
      
        print_r($result);
    }

    public static function downToZero($n)
    {
        if ($n == 1 || $n == 2 || $n == 3){ return $n;}
        $sqrt = (int)sqrt($n);
        for ($i = $sqrt; $i > 1; $i--)
        {
            if ((int)($n / $i) * $i == $n)
            {
                return 1 + self::downToZero((int)($n / $i));
            }
        }
        return 1 + self::downToZero($n - 1);
    }

    public function validateQueryFunction($n , $q){
        if(count($q) !== $n)
            throw new \Exception('Please check N === count of Q');

        if($n < 1 || $n > 4000)
            throw new \Exception('Please check N must between 1 and 10^4');

        for($i = 0 ; $i <= count($q) - 1 ; $i++){
            if($q[$i] < 0 || $q[$i] > 4000)
                throw new \Exception('Please check N in Q must between 1 and 10^4');
         }   
        return true;
    }

}
