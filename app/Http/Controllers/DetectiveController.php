<?php

namespace App\Http\Controllers;
use App\Detective;
use Illuminate\Http\Request;

class DetectiveController extends Controller
{
    //
    public function show($detective_slug)
    {
        
        
        $detective = \App\Detective::where('slug', $detective_slug)->first();

        if (!$detective) {
            abort(404, 'Detective not found');
        }

        $view = view('detective/show');
        $view->detective = $detective;
        return $view;
    }

    public function index(request $Request){

        $detectives = Movie::orderBy('name', 'asc')->limit(10)->get();
    
    $detectives = DB::select($detectives);

    return $detectives;

    return view('detective.index', ['detective' => $detective]);


    
}


}
