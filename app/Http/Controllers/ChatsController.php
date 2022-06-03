<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use App\Events\MessageSent;

class ChatsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        // dd();
        return view('chat.index');
    }
    public function fetchMessages()
    {
        $data = Message::with('user')->where('user_id',Auth::user()->id)->get();
        // dd($data);
        return view('chat.index',['data'=>$data]);
        // return $data;

    }

    public function sendMessage(Request $request){
        $user = Auth::user();
        $message = $user->messages()->create([
            'message' => $request->input('message')
        ]);
        broadcast(new MessageSent($user, $message))->toOthers();
        // return ['status' => 'Message Sent!'];
        return redirect('messages');
    }
}
