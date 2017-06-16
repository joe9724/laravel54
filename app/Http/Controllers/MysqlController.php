<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 2017/6/15
 * Time: 14:33
 */
namespace  App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class MysqlController extends  Controller
{
     public function  GetDb()
     {
         //return 'abc';
        $temp = DB::select('select * from addresses');
        dd($temp);
        //return $temp;
     }

     public function Login()
     {
         return view('login');
     }

     public function Do()
     {
         $name = Input::get('first_name');
         //return  'validated!';
         return $name;
     }
}