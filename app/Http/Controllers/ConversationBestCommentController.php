<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class ConversationBestCommentController extends Controller
{
  public function store(Comment $comment)
  {
    $this->authorize('update', $comment->conversation);
    $comment->conversation->best_comment_id = $comment->id;
    $comment->conversation->save();
    return back();
  }
}
