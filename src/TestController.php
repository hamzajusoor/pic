<?php

namespace Alzugbieh\Pic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class TestController extends Controller
{

     public function test()
    {
      return view('hamza::test');
    }
}
