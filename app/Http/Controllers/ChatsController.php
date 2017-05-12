<?php
namespace App\Http\Controllers;

use App\User;

use Carbon\Carbon;

use App\Events\MessageSent;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatsController extends Controller
{
    public function __construct()
	{
	  // $this->middleware('auth', ['except' => 'broadcast']);
	}

	/**
	 * Show chats
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
	  return view('chat');
	}

	public function test()
	{
		return view('test');
		
	}

	/**
	 * Fetch all messages
	 *
	 * @return Message
	 */
	public function fetchMessages()
	{

	  return Message::with('user')->whereDate('created_at', '>=', Carbon::today())->get();
	}

	/**
	 * Persist message to database
	 *
	 * @param  Request $request
	 * @return Response
	 */
	public function sendMessage(Request $request)
	{
	  // $user = Auth::user();

		if (Auth::guest())
		{
			$user = User::find(2);
		}
		else
		{
			$user = Auth::user();
		}

		$message = new Message;

		$message->message = $request->input('message');
		$message->user_id = '2';

		$message->save();

		// $message = Message::create([
		// 	'message' => $request->input('message')
		// ]);
	  // $message = $user->messages()->create([
	  //   'message' => $request->input('message')
	  // ]);

	  broadcast(new MessageSent($user, $message))->toOthers();

	  return ['status' => 'Message Sent!'];
	}
}