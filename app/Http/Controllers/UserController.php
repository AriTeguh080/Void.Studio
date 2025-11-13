<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard() {
        $articles = Article::all();
        return view('user.dashboard', compact('articles'));
    }

    public function addFavorite(Article $article) {
        auth()->user()->favorites()->toggle($article->id);
        return back()->with('success', 'Favorite updated!');
    }

    public function favorites() {
        $favorites = auth()->user()->favorites;
        return view('user.favorites', compact('favorites'));
    }
}
