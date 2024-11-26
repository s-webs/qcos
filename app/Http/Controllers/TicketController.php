<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TicketController extends Controller
{
    public function create($categoryId, $locale)
    {
        $category = Category::query()->findOrFail($categoryId);
        $ticket = Ticket::createTicket($category->id);

        return redirect()->to(route('digitalTicket-show', [$ticket->id, $locale]));
    }

    public function show($ticketId, $locale)
    {
        $ticket = Ticket::query()->findOrFail($ticketId);
        $category = Category::query()->findOrFail($ticket->category_id);
        return Inertia::render('Guest/Ticket', compact('ticket', 'locale', 'category'));
    }
}
