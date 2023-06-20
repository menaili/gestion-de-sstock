<?php

namespace App\Http\Controllers;

use App\Mail\ClientMail;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageWork;
use FontLib\Table\Type\name;
use Mockery\Generator\Method;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $msgs = Message::all();
        return view('messages',compact('msgs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Message::create([
            'name'=> $request->name,
            'subject'=> $request->subject,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'msg'=> $request->message,
        ]);
        $data = [
            'name'=> $request->name,
            'subject'=> $request->subject,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'msg'=> $request->message,
        ];
        Mail::to("derndjilali38@gmail.com")->send(new MessageWork($data));
        Mail::to($data['email'])->send(new ClientMail($data));
        return 'ok';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        return view('ClientMessage',compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        Message::destroy($message->id);
        $msgs = Message::all();
        return view('messages',compact('msgs'));
    }
}
