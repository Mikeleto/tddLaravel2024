<?php

namespace App\Http\Controllers;

use App\Profession;
use App\Sortable;

class ProfessionController extends Controller
{
    public function index(Sortable $sortable)
    {
        
        return view('professions.index', [
            'professions' => Profession::withCount('profiles')->orderBy('title')->get(),
            'sortable' => $sortable,
            'professions' => Profession::orderBy('title')->get(),
            'checkedProfessions' => collect(request('professions')),
        ]);
    }

    public function destroy(Profession $profession)
    {
        abort_if($profession->profiles()->exists(), 400, 'Cannot delete a profession linked to a profile');

        $profession->delete();

        return redirect()->route('profession.index');
    }

    protected function form($view, Profession $profession)
    {
        return view($view, [
            'professions' => Profession::orderBy('title', 'ASC')->get(),
            
            
        ]);
    }
}
