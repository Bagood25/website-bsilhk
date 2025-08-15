<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agendas = Agenda::latest()->paginate(9); // Ambil data terbaru, 9 per halaman
        $pageTitle = 'Agenda';
        return view('agenda', compact('agendas', 'pageTitle'));
    }
}