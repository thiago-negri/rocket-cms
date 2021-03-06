<?php

namespace App\Http\Controllers\Admin\Mailbox;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin\Mailbox;

class MessageController extends Controller
{
    public function index($id)
    {

    	$message = Mailbox::find($id);

    	$message->open = 1;
    	$message->save();

    	return view('admin.mailbox.message', ['message' => $message]);
    }
}
