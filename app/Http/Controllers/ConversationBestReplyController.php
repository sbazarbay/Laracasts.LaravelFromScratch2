<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reply;

class ConversationBestReplyController extends Controller
{
    public function store(Reply $reply)
    {
    	$this->authorize('update', $reply->conversation);

    	$reply->conversation->setBestReply($reply);

    	return back();
    }
}
