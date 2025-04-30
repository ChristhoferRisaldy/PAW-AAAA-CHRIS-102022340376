<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    // Retrieve all articles from the database, sort them by the most recent, and send them to the 'admin.index' view.
    public function index()
    {
        $article = Article::latest()->get();
        return view('admin.index', compact('article'));
    }

    // Display the form to create a new article (view 'admin.create').
    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $articleData = $request->only('title', 'content', 'image');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('articles', 'public');
            $articleData['image'] = $imagePath;
        }

        auth()->user()->articles()->create($articleData);

        session()->flash('success', 'Artikel berhasil dibuat!');
        return redirect()->route('admin.index');
    }

    // Display the edit form for a specific article (view 'admin.edit') with the selected article data.
    public function edit(Article $article)
    {
        return view('admin.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $articleData = $request->only('title', 'content', 'image');

        if ($request->hasFile('image')) {
            if ($article->image) {
                Storage::delete('public/' . $article->image);
            }

            $imagePath = $request->file('image')->store('articles', 'public');
            $articleData['image'] = $imagePath;
        }

        $article->update($articleData);

        session()->flash('success', 'Artikel berhasil diperbarui!');

        return redirect()->route('admin.index');
    }

    // - Delete the associated image if it exists
    // - Delete the article data from the database
    // - Redirect to the 'admin.index' route with a success message
    public function destroy(Article $article)
    {
        $article->delete();
        session()->flash('success', 'Article deleted successfully!');
        return redirect()->route('admin.index');
    }

    // - Display the details of a specific article based on its ID
    // - Include the comment and user relationships on the comments
    // - Send to the 'articles.show' view
    public function show($id)
    {
        Article::with('comments.user')->findOrFail($id);
        return view('articles.show');
    }
}
