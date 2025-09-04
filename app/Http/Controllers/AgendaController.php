<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AgendaController extends Controller
{
    public function index()
    {
        $agendas = Agenda::where('tanggal_mulai', '>=', now()->startOfMonth())
                           ->orderBy('tanggal_mulai', 'asc')
                           ->paginate(5);

        // Ambil semua agenda untuk data kalender (dalam format JSON)
        $events = Agenda::all()->map(function ($agenda) {
            return [
                'title' => $agenda->judul,
                'start' => $agenda->tanggal_mulai->toDateString(),
                'end' => $agenda->tanggal_selesai ? $agenda->tanggal_selesai->addDay()->toDateString() : $agenda->tanggal_mulai->addDay()->toDateString(),
            ];
        });

        return view('agenda', [
            'agendas' => $agendas,
            'events_json' => $events->toJson()
        ]);
    }
}