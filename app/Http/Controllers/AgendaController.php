<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.agenda.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.agenda.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png|max:4000',
            'description' => 'required',
            'agenda_date' => 'required',
        ]);

        $agenda = new Agenda();
        $agenda->title = $request->title;
        $agenda['image'] = $request->file('image')->store('agenda_image','public');
        $agenda->description = $request->description;
        $agenda->agenda_date = $request->agenda_date;

        $agenda->save();

        Alert::success('Sukses','Agenda Berhasil dibuat');
        return redirect()->route('agenda.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $agenda = Agenda::findorfail($id);
        return view('admin.pages.agenda.edit', compact('agenda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'mimes:jpg,jpeg,png|max:4000',
            'description' => 'required',
            'agenda_date' => 'required',
        ]);

        $agenda = Agenda::findorFail($id);
        $agenda->title = $request->title;
        $agenda->description = $request->description;
        $agenda->agenda_date = $request->agenda_date;

        if ($request->hasFile('image')) {
            // Jika ada, simpan gambar baru
            $data['image'] = $request->file('image')->store('agenda_image', 'public');
        }

        $agenda->save();

        Alert::success('Sukses', 'Agenda Berhasil diubah');
        return redirect()->route('agenda.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $agenda = Agenda::findorfail($id);
        $agenda->delete();
        
        Alert::success('Sukses', 'Agenda Berhasil dihapus');
        return redirect()->route('agenda.index');
    }
}
