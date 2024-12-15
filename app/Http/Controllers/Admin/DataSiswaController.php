<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;

use Inertia\Inertia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataSiswaController extends Controller
{
    public function index()
    {
        $siswa = User::where('role', 'siswa')->get();
        return Inertia::render('admin/DataSiswa', compact('siswa'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return Inertia::render('admin/EditSiswa', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:user,email,' . $id,
            'role' => 'required|string',
        ]);

        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('master.siswa')->with('success', 'User berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('master.siswa')->with('success', 'User berhasil dihapus.');
    }
}
