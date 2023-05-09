<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Oeuvre;
use App\Models\Categorie;
use App\Models\Artiste;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;

class ArtisteController extends Controller
{
    public function artiste_dashboard()
    {
        $user = Auth()->user()->id;
        $artiste = DB::select("SELECT * FROM `artistes` WHERE user_id = $user;");
        $artiste_id = $artiste[0]->id;

        $oeuvres = DB::select("SELECT * FROM `oeuvres` WHERE artiste_id = $artiste_id ;");
        return view('artiste/artiste_dashboard', compact('oeuvres'));
    }




    /**
     * START FONCTION CATEGORIE
     */
    public function gestion_categories()
    {
        $categories = Categorie::all();
        return view('artiste/gestion_categories', compact('categories'));
    }

    public function categorie_form()
    {
        return view('artiste/ajouter_categorie');
    }

    public function categorie_register(Request $request)
    {
        $request->validate([
            'categorie' => ['required', 'string'],
        ]);
        $categorie = Categorie::create([
            'categorie' => $request->categorie,
        ]);
        return redirect()->route('gestion_categories');
    }

    public function modifier_categorie(Request $req)
    {
        $id = $req->idM;
        $categorie = Categorie::find($id);

        if ( $categorie )
        {
            $req->validate([
            'categorie' => ['required', 'string'],
            ]);

            $categorie->categorie = $req->CategorieM;
            $categorie->save();
            return redirect()->back();
        }

        else
        {
            $notification = "Erreur : modification non effectuée !";
            return redirect()->back();
        }

    }

    public function supprimer_categorie(Request $req)
    {
        $id = $req->id;
        Categorie::destroy($id);
        return redirect()->route('gestion_categories');
    }
    /* END FONCTION CATEGORIE */




    /**
     * START FONCTION OEUVRE
     * 
     */

    public function mes_oeuvres()
    {
        $user = Auth()->user()->id;
        $artiste = DB::select("SELECT * FROM `artistes` WHERE user_id = $user;");
        $artiste_id = $artiste[0]->id;

        $oeuvres = DB::select("SELECT * FROM `oeuvres` WHERE artiste_id = $artiste_id ;");

        return view('artiste/mes_oeuvres', compact('oeuvres'));
    }


    public function oeuvre_form()
    {
        $categories = Categorie::all();
        return view('artiste/ajouter_oeuvre', compact('categories'));
    }

    public function oeuvre_register(Request $request)
    {
        $user = Auth()->user()->id;
        $artiste = DB::select("SELECT * FROM `artistes` WHERE user_id = $user;");

        $request->validate([
            'titre' => ['required', 'string'],
            'description' => ['required', 'string'],
            'categorie_id' => ['required', 'numeric'],
            'prix' => ['required', 'numeric'],
            'longeur' => ['required', 'numeric'],
            'largeur' => ['required', 'numeric'],
            'image' =>  ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:20000'],
        ]);

        if (count($artiste) > 0)
        {
            if ($request->file("image"))
            {
                $imageName = time() . "_" . $request->acronyme . "_" . $request->file("image")->getClientOriginalName();
                $request->file("image")->storeAS("public/image/oeuvres/", $imageName);
            }

            $oeuvre = Oeuvre::create([
                'artiste_id' => $artiste[0]->id,
                'titre' => $request->titre,
                'nombre_exemplaire' => $request->nombre_exemplaire,
                'date_recent' => date('Y-m-d'),
                'description' => $request->description,
                'categorie_id' => $request->categorie_id,
                'prix' => $request->prix,
                'largeur' => $request->largeur,
                'longeur' => $request->longeur,
                'image' => $imageName,
            ]);
        } else return redirect()->back()->withInput();

        return redirect()->route('mes_oeuvres');
    }


    public function modifier_oeuvre($id)
    {
        $categories = Categorie::all();
        $oeuvre = Oeuvre::find($id);
        return view('artiste/modifier_oeuvre', compact('oeuvre', 'categories'));
    }

    public function activer_oeuvre(Request $req)
    {
        $id = $req->id;
        $oeuvre = Oeuvre::find($id);

        if (!$oeuvre->status) {
            $oeuvre->status = 1;
            $oeuvre->save();
        }
        return redirect()->back();
    }

    public function desactiver_oeuvre(Request $req)
    {
        $id = $req->idD;
        $oeuvre = Oeuvre::find($id);
        if ($oeuvre->status == 1) {
            $oeuvre->status = 0;
            $oeuvre->save();
        }
        return redirect()->back();
    }

    public function supprimer_oeuvre(Request $req)
    {
        $id = $req->idS;
        Oeuvre::destroy($id);
        return redirect()->back();
    }
    /* END FONCTION OEUVRE */


    public function artiste_profil()
    {   
        $user = Auth()->user()->id;
        $artiste = DB::select("SELECT * FROM `artistes` WHERE user_id = $user;");
        $id = $artiste[0]->id;
        $artiste = Artiste::find($id);
        return view('artiste/artiste_profil', compact('artiste'));
    }


    /**
     * LES FONCTIONS DE MODIFICATION DES OEUVRE
     * 
     */


    /*    Fonction de modification du titre   */
    public function modifier_titre(Request $req)
    {
        $id = $req->id;
        $oeuvre = Oeuvre::find($id);

        if ( $oeuvre )
        {
            $req->validate([
            'titre' => ['required', 'string'],
            ]);
            $oeuvre->titre = $req->titre;
            $oeuvre->save();

            return redirect()->back();
        }
    }
    /*    ------------------------------------   */


    /*    Fonction de modification du prix      */
    public function modifier_prix(Request $req)
    {
        $id = $req->idP;
        $oeuvre = Oeuvre::find($id);

        if ( $oeuvre )
        {
            $req->validate([
                'prix' => ['required', 'numeric'],
            ]);
            $oeuvre->prix = $req->prix;
            $oeuvre->save();

            return redirect()->back();
        }
    }
    /*    ------------------------------------   */


    /*    Fonction de modification du nombre d'exemplaire      */
    public function modifier_nombre_exemplaire(Request $req)
    {
        $id = $req->idNE;
        $oeuvre = Oeuvre::find($id);

        if ( $oeuvre )
        {
            $req->validate([
                'nombre_exemplaire' => ['required', 'numeric'],
            ]);
            $oeuvre->nombre_exemplaire = $req->nombre_exemplaire;
            $oeuvre->save();

            return redirect()->back();
        }
    }
    /*    ------------------------------------   */


    /*    Fonction de modification des dimensions      */
    public function modifier_dimension(Request $req)
    {
        $id = $req->idD;
        $oeuvre = Oeuvre::find($id);

        if ( $oeuvre )
        {
            $req->validate([
                'longeur' => ['required', 'numeric'],
                'largeur' => ['required', 'numeric'],
            ]);

            $oeuvre->longeur = $req->longeur;
            $oeuvre->largeur = $req->largeur;
            $oeuvre->save();

            return redirect()->back();
        }
    }
    /*    ------------------------------------   */

    /*    Fonction de modification de la description      */
    public function modifier_description(Request $req)
    {
        $id = $req->idDES;
        $oeuvre = Oeuvre::find($id);

        if ( $oeuvre )
        {
            $req->validate([
                'description' => ['required', 'string'],
            ]);

            $oeuvre->description = $req->description;

            $oeuvre->save();

            return redirect()->back();
        }
    }
    /*    ------------------------------------   */
}