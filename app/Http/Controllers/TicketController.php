<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function create($categoryId, $locale)
    {
        $category = Category::query()->findOrFail($categoryId);
        $ticket = Ticket::createTicket($category->id);

        return redirect()->to(route('digitalTicket-show', $ticket->id));
    }

    public function show($ticketId)
    {
        $ticket = Ticket::query()->findOrFail($ticketId);
        dd($ticket);
    }
}
