<?php
namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;

class BeasiswaController extends Controller
{
    public function index()
    {
        $beasiswas = Beasiswa::all();
        return view('beasiswa.index', compact('beasiswas'));
    }

    public function show($id)
    {
        $beasiswa = Beasiswa::with('details')->findOrFail($id);
        return view('beasiswa.show', compact('beasiswa'));
    }
}