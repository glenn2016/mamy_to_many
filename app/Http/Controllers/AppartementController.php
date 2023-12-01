<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use App\Models\FormationAppartement;
use Illuminate\Http\Request;

/**
 * Class AppartementController
 * @package App\Http\Controllers
 */
class AppartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appartements = Appartement::paginate();

        return view('appartement.index', compact('appartements'))
            ->with('i', (request()->input('page', 1) - 1) * $appartements->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $appartement = new Appartement();
        return view('appartement.create', compact('appartement'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Appartement::$rules);

        $appartement = Appartement::create($request->all());

        return redirect()->route('appartements.index')
            ->with('success', 'Appartement created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appartement = Appartement::find($id);
        $formationAppartement = FormationAppartement();;

        return view('appartement.show', compact('apprenant', 'formations'));
}
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appartement = Appartement::find($id);

        return view('appartement.edit', compact('appartement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Appartement $appartement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appartement $appartement)
    {
        request()->validate(Appartement::$rules);

        $appartement->update($request->all());

        return redirect()->route('appartements.index')
            ->with('success', 'Appartement updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $appartement = Appartement::find($id)->delete();

        return redirect()->route('appartements.index')
            ->with('success', 'Appartement deleted successfully');
    }
}
