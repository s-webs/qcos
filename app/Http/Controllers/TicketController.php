<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function show($categoryId, $locale)
    {
        $category = Category::query()->findOrFail($categoryId);
        $ticket = Ticket::createTicket($category->id);

        dd($categoryId, $locale, $ticket);

        return inertia('Queue/QR', [
            'ticket' => $ticket,
            'category' => $category,
        ]);
    }
}
