<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Oeuvre;
use App\Models\Artiste;
use App\Models\Categorie;
use Illuminate\Support\Facades\DB;


class MainController extends Controller
{
    public function home()
    {
        $oeuvres = DB::select("SELECT * FROM `oeuvres` WHERE actif = 1;");
        return view('home', compact('oeuvres'));
    }

    public function listeOeuvres()
    {
        $oeuvres = Oeuvre::all();
        return view('listeOeuvres', compact('oeuvres'));
    }

    public function listeArtistes()
    {
        $artistes = Artiste::all();
        return view('listeArtistes', compact('artistes'));
    }

    public function home1()
    {
        $oeuvres = Oeuvre::all();
        return view('home1', compact('oeuvres'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    

}
