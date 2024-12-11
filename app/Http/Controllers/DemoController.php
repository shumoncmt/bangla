<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DemoController extends Controller
{
    // function DemoAction(Request $request){
    // //     return  "This is a frist controller";

    //     // $name = $request->name;
    //     // $age= $request->age;
    //     // return "Name is = {$name}, age is ={$age}";

    //     // $name = $request->input('name');
    //     // $age = $request->input('age');
    //     // return "Name is = {$name}, Age is = {$age}";

    //     // $name = $request->header('name');
    //     // $age = $request->header('age');
    //     // return "Name is = {$name},  Age is = {$age}";

        


    // }

    // function DemoAction(Request $request):array{
    //     // return $request->header();
    //     return $request->input();

    // }

    // function DemoAction(Request $request):array{
    //     // return $request->header();
    //     return $request->query();

    // }

//    function DemoAction(Request $request){

//      $img=$request->file('image_file');
//      $filesize= filesize($img);
//      $filetype=filetype($img);
//      $OriginalName=$img->getClientOriginalName();
//      $TempFilename=$img->getFilename();
//      $extension=$img->extension();

//      return array(
//         'filesize'=>$filesize,
//         'filetype'=>$filetype,
//         'OriginalName'=>$OriginalName,
//         'TempFilename'=>$TempFilename,
//         'extension' =>$extension
//      );

//    }

// function DemoAction(Request $request){
//     // return  $request ->getAcceptableContentTypes();
//     // return $request->ip();
// //     if ($request->accepts(['application/json'])){
// //         return 1;
// //     }
// //     else {
// //         return 0;
// //     }
//     // return $request->cookie();

//     // return $request->cookie('Cookie_2');

//     // return "This is Sreing";
//     // return  100;
//     // return null;
//     // return true;
//     // return false;
//     // return array('A', 'B', 'C');
//     // return array(['name'=> 'shakil', 'age'=>'25']);
//     return response()->json(['name'=> 'shakil', 'age'=>'25']);



// }

// function DemoAction ():JsonResponse{
//     $msg = "Success";
//     $data=['name'=> 'shakie', 'state'=> 'Dhaka'];
//     $code = 200;
//     return response()->json(['msg' => $msg,'data'=>$data,'code'=>$code]);

    
// }

// function DemoAction(Request $request){
//     return redirect('/');
// }

// Function DemoAction(){
//     $pathToFile="img.jpg";
//     return response()->file($pathToFile);
// }

// function DemoAction(){
//     $pathToFile= "img.jpg";
//     return response()->download($pathToFile);
// }
 function DemoAction(){
    // $pathToFile= "img.jpg";
    // return response()->download($pathToFile);

    // $name= "Cookie_1";
    // $value ="This is my Data";
    // $minutes = 50;
    // $path ="/";
    // $domain=$_SERVER['SERVER_NAME'];
    // $secure =true;
    // $httpOnly=true;
    // return response ('Hello World')->cookie(
    //     $name, $value, $minutes, $path, $domain, $secure, $httpOnly
    // );

    return response('Hello')
    ->header('X-Header-One', 'Header Value')
    ->header('X-Header-Two','Header value');
 }


}
