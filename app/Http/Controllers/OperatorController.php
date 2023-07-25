<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function operation(Request $request)
    {
        // Receive Input
        $input1 = $request->input('num1');
        $input2 = $request->input('num2');
        $inputOperator = $request->input('Operator');

        // Operation
        switch ($inputOperator) {
            case "+":
                echo $input1+$input2;
                break;
            case "-":
                echo $input1-$input2;
                break;
            case "*":
                echo $input1*$input2;
                break;
            case "/":
                echo $input1/$input2;
                break;
            default;
                echo 'shit';
                break;
        }
    }
}


