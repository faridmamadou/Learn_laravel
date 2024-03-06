<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class AddController extends Controller
{
    public function addArticle(Request $request) {
        return view('add');
    }

    public function storeArticle(Request $request) {
        $article = Article::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category' => $request->category,
            'status' => 'available',
        ]);
        
        return redirect()->back();
    }
}
