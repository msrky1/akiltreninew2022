<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class BasvuruController extends Controller
{
    
    public function addApp(Request $request) {

        if($request->has('tc')){
            $request->validate([
                'tc' => 'required|max:11', 
                'tc' => 'required|min:11', 
               
            ]);
        }

        $class = new Application();
        $class->name = $request->name;
        $class->email = $request->email;
      
        $class->tc = $request->tc;
        $class->classroom = $request->classroom;
        $class->classroom_id = $request->classroom_id;
        $class->save();

        return  redirect()->back()->with('message' , 'Başvurunuz Başarıyla Yapıldı!');
    }
}
