<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AgendaController extends Controller
{
    public function index()
    {
        // Query untuk daftar agenda di sisi kanan (tetap dengan paginasi)
        $agendas = Agenda::where('tanggal_mulai', '>=', now()->startOfMonth())
                           ->orderBy('tanggal_mulai', 'asc')
                           ->paginate(5);

        // Ambil SEMUA agenda untuk data kalender
        // Ubah formatnya agar sesuai dengan yang dibutuhkan FullCalendar
        $events = Agenda::all()->map(function ($agenda) {
            return [
                'title' => $agenda->judul,
                'start' => $agenda->tanggal_mulai->toDateString(),
                // FullCalendar membutuhkan tanggal akhir yang eksklusif, jadi kita tambah 1 hari
                'end' => $agenda->tanggal_selesai ? $agenda->tanggal_selesai->addDay()->toDateString() : $agenda->tanggal_mulai->addDay()->toDateString(),
            ];
        });

        return view('agenda', [
            'agendas' => $agendas,
            'events_json' => $events->toJson() // Kirim data sebagai JSON ke view
        ]);
    }
}