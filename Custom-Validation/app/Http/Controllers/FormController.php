<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateExampleRequest;
use Illuminate\Http\Request;

class FormController extends Controller
{

    public function checkValidation(CreateExampleRequest $request)
    {
      $success = "Dữ liệu được xác thực thành công";
      return view('welcome',compact('success'));
    }
}
