<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    /**
     * Menampilkan daftar semua admin.
     */
    public function index()
    {
        // Ambil semua user yang merupakan admin
        // UBAH 1 MENJADI TRUE DI SINI
        $users = User::where('is_admin', true)->latest()->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Menampilkan form untuk membuat admin baru.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Menyimpan admin baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => 1, // Menyimpan sebagai 1 tidak masalah
        ]);

        return redirect()->route('admin.users.index')->with('success', 'Admin baru berhasil ditambahkan.');
    }

    /**
     * Menghapus admin dari database.
     */
    public function destroy(User $user)
    {
        if (auth()->user()->id == $user->id) {
            return redirect()->route('admin.users.index')->with('error', 'Anda tidak dapat menghapus akun Anda sendiri.');
        }

        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'Admin berhasil dihapus.');
    }
}