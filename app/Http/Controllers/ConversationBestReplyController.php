<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reply;

class ConversationBestReplyController extends Controller
{
    public function store(Reply $reply)
    {
    	$this->authorize($reply->conversation); // used ability mapping
    	// $this->authorize('create', $reply->conversation); can also be this

    	$reply->conversation->setBestReply($reply);

    	return back();
    }
}
