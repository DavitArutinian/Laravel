<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//1
Route::get('/prime/{number}', function ($number) {

    function isPrime($num) {
        if ($num == 1) return false;
        for ($i = 2; $i <= $num/2; $i++){
            if ($num % $i == 0)return false;
        }
        return true;}

    $number = (int) $number;

    if (isPrime($number)) {
        $response = ['result' => true, 'message' => "$number is a prime number."];
    } else {
        $response = ['result' => false, 'message' => "$number is not a prime number."];
    }
    return response()->json($response);
});

//2
Route::get('/palindrome/{string}', function ($string) {

    $cleanedString = strtolower(str_replace('', '', $string));

    $Palindrome = $cleanedString === strrev($cleanedString);

    $response = [
        'result' => $Palindrome,
        'message' => $Palindrome ? 'The string is a palindrome.' : 'The string is not a palindrome.'
    ];

    return response()->json($response);
});
//3

//4
Route::get('/triangle/{rows}', function ($rows) {
    function PascalsTriangle($numRows) {
        $triangle = [];
        for ($i = 0; $i < $numRows; $i++) {
            $row = [];
            for ($j = 0; $j <= $i; $j++) {
                if ($j === 0 || $j === $i) {
                    $row[] = 1;
                } else {
                    $row[] = $triangle[$i - 1][$j - 1] + $triangle[$i - 1][$j];
                }
            }
            $triangle[] = $row;
        }
        return $triangle;
    }
    
    $rows = (int) $rows;

    if ($rows >= 1) {
        $triangle = pascalsTriangle($rows);

        $response = [
            'rows' => $triangle,
            'message' => "Pascal's Triangle with $rows rows.",
        ];
    }
    return response()->json($response);
});

//5
Route::get('/cal/{op1},{op},{op2}', function ($op1, $op, $op2) {
    $result = 0;

    if ($op === '+') {
        $result = $op1 + $op2;
    } elseif ($op === '-') {
        $result = $op1 - $op2;
    } elseif ($op === '*') {
        $result = $op1 * $op2;
    } elseif ($op === '/' && $op2 != 0) {
        $result = $op1 / $op2;
    }
    $response = [
        'op1' => $op1,
        'op' => $op,
        'op2' => $op2,
        'result' => $result,
    ];
    return response()->json($response);
});

//6
Route::get('/convert-currency/{amount},{from},{to}', function ($amount, $from, $to)  {


    $exchangeRates = [
        'USD' => 1.0, 
        'GEL' => 2.69,  
        'EUR' => 0.85, 
    ];
    
    $moneyamount = $amount / $exchangeRates[$from]; 
    $convertedAmount = $moneyamount * $exchangeRates[$to]; 

    $response = [
        'amount' => $amount,
        'from' => $from,
        'to' => $to,
        'convertedAmount' => $convertedAmount,
    ];

    return response()->json($response);
});