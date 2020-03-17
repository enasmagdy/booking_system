<?php

namespace App\Http\Controllers;

use App\Category;
use App\Event;
use App\Ticket;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Providers\SweetAlertServiceProvider;
use Alert;

class TicketController extends Controller
{
    public function index()
    {
        $categories= Category::all();
        return view('ticket', compact('categories'));
    }

    public function create()
    {
        $categories= Category::all();
        $id = Input::get('id');
        $event = Event::findOrFail($id);
        return view('ticket' , compact('categories','event'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'event_id',
            'user_id',
            'category_id',
        ]);

        $user = User::where('email', '=', Input::get('email'))->first();
        if ($user === null) {
            $user = User::create([
                'name'=> $request->name,
                'email'=> $request->email,
                'phone'=> $request->phone,
            ]);
            $InsertedId= $user->id;

            $ticket = new Ticket();
            $ticket->user_id = $InsertedId;
            $ticket->event_id= $request->event_id;
            $ticket->category_id=$request->category_id;
            $ticket->save();
        }
        else {
            $InsertedId= $user->id;
            $ticket = Ticket::where([['user_id','=',$InsertedId],
                                    ['category_id','=',$request->category_id],
                                    ['event_id','=',$request->event_id]])->first();
            if(!empty($ticket)){
                alert()->error('This email has Ticket', 'Oops!');
                return redirect('ticket/create?id='.$request->category_id);
            }
            else {
                $ticket = new Ticket();
                $ticket->user_id = $InsertedId;
                $ticket->event_id= $request->event_id;
                $ticket->category_id=$request->category_id;
                $ticket->save();
            }
        }
        alert()->error('Your Ticket Booked', 'Thank You');
        return redirect('ticket/create?id='.$request->category_id);
    }

    public function show(Ticket $ticket)
    {
        //
    }

    public function edit(Ticket $ticket)
    {
        //
    }

    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    public function destroy(Ticket $ticket)
    {
        //
    }
}
