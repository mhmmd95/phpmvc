<?php

namespace App\Controllers;

use App\Core\App;
use App\Enums\Importance;
use Exception;
use Module\Ticket\DataTransferObject\TicketDTO;

class TicketController
{

    public function index()
    {
        $tickets = App::get('database')->table('tickets')->all();
        $importanceCases = Importance::cases();
        return view('tickets_index', compact(['tickets', 'importanceCases']));
    }
    
    public function store()
    {
        App::get('database')->table('tickets')->insert((new TicketDTO(...$_POST))->toArray());

        return redirect('');
    }
}
