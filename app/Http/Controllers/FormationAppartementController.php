<?php

namespace App\Http\Controllers;

use App\Models\FormationAppartement;
use App\Models\Formation;
use App\Models\Appartement;
use Illuminate\Http\Request;

/**
 * Class FormationAppartementController
 * @package App\Http\Controllers
 */
class FormationAppartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formationAppartements = FormationAppartement::paginate();

        return view('formation-appartement.index',['formations' => Formation::all()], compact('formationAppartements'))
            ->with('i', (request()->input('page', 1) - 1) * $formationAppartements->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formationAppartement = new FormationAppartement();

        
        return view('formation-appartement.create',[
            'appartements' => Appartement::all(),
            'formations' => Formation::all(),
        ], compact('formationAppartement'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(FormationAppartement::$rules);

        $formationAppartement = FormationAppartement::create($request->all());

        return redirect()->route('formation-appartements.index')
            ->with('success', 'FormationAppartement created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formationAppartement = FormationAppartement::find($id);

        return view('formation-appartement.show', compact('formationAppartement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formationAppartement = FormationAppartement::find($id);

        return view('formation-appartement.edit', compact('formationAppartement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  FormationAppartement $formationAppartement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormationAppartement $formationAppartement)
    {
        request()->validate(FormationAppartement::$rules);

        $formationAppartement->update($request->all());

        return redirect()->route('formation-appartements.index')
            ->with('success', 'FormationAppartement updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $formationAppartement = FormationAppartement::find($id)->delete();

        return redirect()->route('formation-appartements.index')
            ->with('success', 'FormationAppartement deleted successfully');
    }
}
