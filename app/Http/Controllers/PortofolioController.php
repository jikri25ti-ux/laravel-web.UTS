<?php
namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function index()
    {
        $portofolios = Portofolio::latest()->get();
        return view('admin.portofolio.index', compact('portofolios'));
    }

    public function create()
    {
        return view('admin.portofolio.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('portofolio_photos', 'public');
        }

        Portofolio::create($data);

        return redirect()->route('portofolio.index')->with('success', 'Portofolio berhasil dibuat!');
    }

    public function edit($id)
    {
        $portofolio = Portofolio::findOrFail($id);
        return view('admin.portofolio.edit', compact('portofolio'));
    }

    public function update(Request $request, $id)
    {
        $portofolio = Portofolio::findOrFail($id);
        $data       = $request->all();

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('portofolio_photos', 'public');
        }

        $portofolio->update($data);

        return redirect()->route('portofolio.index')->with('success', 'Portofolio berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $portofolio = Portofolio::findOrFail($id);
        $portofolio->delete();

        return redirect()->route('portofolio.index')->with('success', 'Portofolio berhasil dihapus!');
    }

    public function show($id)
    {
        $portofolio = Portofolio::findOrFail($id);
        return view('admin.portofolio.show', compact('portofolio'));
    }
}
