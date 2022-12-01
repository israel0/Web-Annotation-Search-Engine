<?php

namespace App\Http\Controllers;

use App\Models\DataCenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    function find(Request $request){
            $request->validate([
              'search'=>'required|min:2'
           ]);

           $search_text = $request->input('search');

           $result = DB::table('data_centers')
                      ->where('data_tithe','LIKE','%'.$search_text.'%')
                       ->orWhere('content','like','%'.$search_text.'%')
                        ->get()
                        ->map(function ($row) use ($search_text) {
                            $row->content = preg_replace('/(' . $search_text . ')/i', '<span class="font-size:30px"><mark>$1</mark></span>', $row->content);
                            return $row;
                        });

            $keyword = $search_text;
              return  view('search' ,compact(['result' , 'keyword']));

    }


    function store(Request $request)
    {
        $request->validate([
            'data_tithe'=>'required',
            'link' => 'required',
            'content' => 'required',
            'category' => 'required',
            // 'image' => 'required'
         ]);

         DataCenter::create([
            'data_tithe'=> $request->data_tithe,
            'link' => $request->link,
            'content' => $request->content,
            'category' => $request->category,
            'image' => "search_annotation.jpg"
         ]);

         return redirect()->back()->with("success" , "Upload Successfully!");
    }
}
