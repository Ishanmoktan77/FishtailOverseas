<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function indexAdminPanel()
    {
        $messages = Message::orderBy('created_at', 'desc')->paginate(10);
        return view('adminPanel.messages',compact('messages'));
    }

    public function create(Request $request)
    {
        $message = new Message;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;

        if ($message->save()) {
            return redirect()->back()->with('success', 'Message sent successfully.');
        } else {
            return redirect()->back()->with('failure', 'Message cannot be sent! Please try again.');
        }
    }

    public function delete($id){
        $message = Message::find($id);

        if ($message->delete()) {
            return redirect()->back()->with('success', 'Message deleted successfully.');
        } else {
            return redirect()->back()->with('failure', 'Message cannot be deleted! Please try again.');
        }
    }
}
