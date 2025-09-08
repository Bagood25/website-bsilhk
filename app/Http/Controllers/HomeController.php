<?php

namespace App\Http\Controllers;

// Gunakan semua model yang diperlukan
use App\Models\News;
use App\Models\Photo;
use App\Models\Agenda;
use App\Models\Video;
use App\Models\Partner;
use Illuminate\Http\Request;
use Carbon\CarbonPeriod;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman utama dengan data yang diperlukan.
     */
    public function index()
    {
        // ... (kode untuk berita tidak berubah)
        $beritaUtama = News::where('kategori', 'berita-p2semh')->latest()->take(5)->get();
        $beritaFokus = News::where('kategori', 'berita-p2semh')->latest()->take(15)->get();
        $beritaStandar = News::where('kategori', 'berita-kehutanan')->latest()->take(6)->get();
        
        // ... (Query lain tidak berubah)
        $latestPhotos = Photo::latest()->take(12)->get();
        $latestVideos = Video::latest()->take(15)->get();
        $partners = Partner::latest()->get();

        // ======================================================
        // ==         PERBAIKAN LOGIKA PENGAMBILAN AGENDA        ==
        // ======================================================
        // Mengambil semua agenda yang belum selesai (termasuk yang sedang berlangsung)
        $latestAgendas = Agenda::where('tanggal_selesai', '>=', now()->today())
                               ->orderBy('tanggal_mulai', 'asc')
                               ->get();
        // ======================================================

        // Mengambil semua tanggal agenda untuk ditandai di kalender statis
        $allAgendas = Agenda::all();
        $eventDates = [];
        foreach ($allAgendas  as $agenda) {
            // Membuat rentang tanggal dari tanggal_mulai hingga tanggal_selesai
            $period = CarbonPeriod::create($agenda->tanggal_mulai, $agenda->tanggal_selesai ?? $agenda->tanggal_mulai);
            foreach ($period as $date) {
                $eventDates[] = $date->toDateString(); // Format 'YYYY-MM-DD'
            }
        }
        // Menjadikan unik dan mengubah ke format JSON
        $eventDatesJson = json_encode(array_values(array_unique($eventDates)));

        return view('home', compact(
            'beritaUtama',
            'beritaFokus',
            'beritaStandar',
            'latestPhotos',
            'latestVideos',
            'partners',
            'latestAgendas',
            'eventDatesJson' // Kirim data tanggal agenda ke view
        ));
    }
    
    public function p2semh()
    {
        $title = 'Tautan Terkait P2SEMH';
        $partners = Partner::latest()->get();
        return view('p2semh', compact('title', 'partners'));
    }
}