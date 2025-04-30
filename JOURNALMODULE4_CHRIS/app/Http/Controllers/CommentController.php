<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * - Validate the comment input ('comment' is required and must not exceed 1000 characters)
     * - Save the new comment for a specific article, associate it with the currently logged-in user
     * - Display a success message and redirect to the article detail page
     */
    public function store(Request $request, Article $article)
    {
        $request->validate([
            'comment' => 'required|string|max:1000',
        ]);

        $comment = new Comment([
            'comment' => $request->comment,
            'user_id' => auth()->id(),
        ]);
        
        $article->comments()->save($comment);           

        session()->flash('success', 'Comment successfully added!');
        return redirect()->route('articles.show', $article->id);
    }

    public function destroy(Comment $comment)
    {
        $articleId = $comment->article_id;
        $comment->delete();

        session()->flash('success', 'Comment berhasil dihapus!');
        return redirect()->route('articles.show', ['article' => $articleId]);
    }
}
