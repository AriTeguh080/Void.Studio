<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        $articles = Article::all();
        return view('admin.dashboard', compact('articles'));
    }

public function updateArticle(Request $request, Article $article) {
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'background_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'slogan' => 'nullable|string|max:255',
        'price' => 'required|numeric|min:0',
        'stock' => 'required|integer|min:0',
    ]);

    $imagePath = $article->image;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('articles', 'public');
    }

    $backgroundImagePath = $article->background_image;
    if ($request->hasFile('background_image')) {
        $backgroundImagePath = $request->file('background_image')->store('article_backgrounds', 'public');
    }

    $article->update([
        'name' => $request->name,
        'description' => $request->description,
        'image' => $imagePath,
        'background_image' => $backgroundImagePath,
        'slogan' => $request->slogan,
        'price' => $request->price,
        'stock' => $request->stock,
    ]);

    return back()->with('success','Artikel berhasil diupdate');
}

public function createArticle(Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'background_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'slogan' => 'nullable|string|max:255',
        'price' => 'required|numeric|min:0',
        'stock' => 'required|integer|min:0',
    ]);

    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('articles', 'public');
    }

    $backgroundImagePath = null;
    if ($request->hasFile('background_image')) {
        $backgroundImagePath = $request->file('background_image')->store('article_backgrounds', 'public');
    }

    Article::create([
        'name' => $request->name,
        'description' => $request->description,
        'image' => $imagePath ?: 'default.jpg',
        'background_image' => $backgroundImagePath,
        'slogan' => $request->slogan,
        'price' => $request->price,
        'stock' => $request->stock,
    ]);

    return back()->with('success','Artikel baru berhasil ditambahkan');
}
}

