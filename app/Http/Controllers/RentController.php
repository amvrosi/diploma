<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Http\Requests\SearchRequest;
use App\Models\Category;
use App\Models\Tool;
use Illuminate\Http\Request;

class RentController extends Controller
{
    public function categories(){
        $categories = Category::all();
        return view('rent.categories', compact('categories'));
    }
    public function heavy_machines(){
        $category = Category::find(1);
        $machines = Tool::where('category_id', $category->id)->paginate(5);
        return view('rent.heavy_machines', compact('machines', 'category'));
    }
    public function tools(){
        $category = Category::find(2);
        $tools = Tool::where('category_id', $category->id)->paginate(5);
        return view('rent.tools', compact('tools', 'category'));
    }
    public function cabins(){
        $category = Category::find(3);
        $cabins = Tool::where('category_id', $category->id)->paginate(5);
        return view('rent.cabins', compact('cabins', 'category'));
    }
    public function air_compressors(){
        $category = Category::find(4);
        $compressors = Tool::where('category_id', $category->id)->paginate(5);
        return view('rent.air_compressors', compact('compressors', 'category'));
    }
    public function tool_info(Tool $tool){
        return view('rent.tool_info', compact('tool'));
    }

    public function search(Request $request){
        $s = $request->searched;
        $tools = Tool::where('name', 'LIKE', "%{$s}%")->paginate(10);
        return view('rent.test', compact('tools', 's'));
    }

    public function order(Tool $tool){
        return view('rent.order', compact('tool'));
    }

    public function create_order(OrderRequest $request, $tool){
        $data = $request->validated();

        $date1 = $data->startDate;
        $date2 = $data->finishDate;
        $interval = $date1->diff($date2);
        dd($interval);

        return view('rent.order', compact('tool'));
    }
}
