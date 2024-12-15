<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;

use Inertia\Inertia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataGuruController extends Controller
{
    public function index()
    {
        $guru = User::where('role', 'guru')->get();
        return Inertia::render('admin/DataGuru', compact('guru'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return Inertia::render('admin/EditGuru', compact('user'));
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

        return redirect()->route('master.guru')->with('success', 'User berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('master.guru')->with('success', 'User berhasil dihapus.');
    }
}
