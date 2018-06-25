<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;


class MarkController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
	 
	
	 
    public function MarkForm()
    {
        $categories = Category::where('parent_id', '=', 0)->get();
		$allCategories = Category::pluck('title','id')->all();
		$marks = \App\Mark::orderBy('created_at', 'asc')->get() ;
		
		return view('marks' ,compact('categories','allCategories','marks'));
    }


    public function MarkFormAdd(Request $request)
    {
       
		
        $mark = new \App\Mark;
        $mark->nombre 		= $request->nombre;
		$mark->descripcion 	= $request->descripcion;
		$mark->estado 		= $request->estado;
		$mark->logo 		= $request->logo;
		$mark->id_categoria = $request->id_categoria;
		$mark->url 			= $request->url;
		
        $mark->save();
		
		
		$categories = Category::where('parent_id', '=', 0)->get();
        $allCategories = Category::pluck('title','id')->all();
		$marks = \App\Mark::orderBy('created_at', 'asc')->get() ;
		
		return view('marks' ,compact('categories','allCategories','marks'));
    }
	
	
	public function dashboard()
    {
       return view('dashboard');
    }
	
	
   


}