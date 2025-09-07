<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AgendaController extends Controller
{
    public function index()
    {
        $agendas = Agenda::latest('tanggal_mulai')->paginate(10);
        return view('admin.agenda.index', compact('agendas'));
    }

    public function create()
    {
        return view('admin.agenda.create');
    }

    public function store(Request $request)
    {
        // Validasi disesuaikan dengan field baru
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'nullable|date|after_or_equal:tanggal_mulai',
            'lokasi' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('public/agenda');
            $validated['gambar'] = str_replace('public/', '', $path);
        }

        Agenda::create($validated);

        return redirect()->route('admin.agenda.index')->with('success', 'Agenda baru berhasil ditambahkan.');
    }

    public function edit(Agenda $agenda)
    {
        return view('admin.agenda.edit', compact('agenda'));
    }

    public function update(Request $request, Agenda $agenda)
    {
        // Validasi disesuaikan dengan field baru
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'nullable|date|after_or_equal:tanggal_mulai',
            'lokasi' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        
        // Jika tanggal selesai tidak diisi, set nilainya menjadi null
        $validated['tanggal_selesai'] = $request->filled('tanggal_selesai') ? $request->tanggal_selesai : null;


        if ($request->hasFile('gambar')) {
            if ($agenda->gambar) {
                Storage::delete('public/' . $agenda->gambar);
            }
            $path = $request->file('gambar')->store('public/agenda');
            $validated['gambar'] = str_replace('public/', '', $path);
        }

        $agenda->update($validated);

        return redirect()->route('admin.agenda.index')->with('success', 'Agenda berhasil diperbarui.');
    }

    public function destroy(Agenda $agenda)
    {
        if ($agenda->gambar) {
            Storage::delete('public/' . $agenda->gambar);
        }
        $agenda->delete();
        return redirect()->route('admin.agenda.index')->with('success', 'Agenda berhasil dihapus.');
    }
}