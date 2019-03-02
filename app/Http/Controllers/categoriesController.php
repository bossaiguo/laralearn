<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Category;

class categoriesController extends Controller
{
    public function show(Category $category, Request $request, Topic $topic)
    {
    	//读取分类ID关联的话题，并按每20条分页
    	// $topic = Topic::where('category_id', $category->id)->paginate(20);
    	$topics = $topic->withOrder($request->order)
    					->where('category_id', $category->id)
    					->paginate(20);

    	//传参变量话题和分类到模板
    	return view('topic.index', compact('topic', 'category'));
    }

}
