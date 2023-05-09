<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Artiste;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    

    /**
     * Display the specified resource.
     */
    public function modifier_nom(Request $req)
    {
        $id = $req->id;
        $user = User::find($id);
        
        if ( $user)
        {
            $user->nom = $req->nom;
            $user->save();

            return redirect()->back();
        }
    }

    public function modifier_prenom(Request $req)
    {
        $id = $req->idP;
        $user = User::find($id);
        
        if ( $user)
        {
            $user->prenom = $req->prenom;
            $user->save();

            return redirect()->back();
        }
    }

    public function modifier_genre(Request $req)
    {
        $id = $req->idG;
        $user = User::find($id);
        
        if ( $user)
        {
            $user->genre = $req->genre;
            $user->save();

            return redirect()->back();
        }
    }

    public function modifier_telephone(Request $req)
    {
        $id = $req->idTEL;
        $user = User::find($id);
        
        if ( $user)
        {
            $user->telephone = $req->telephone;
            $user->save();

            return redirect()->back();
        }
    }

    public function modifier_email(Request $req)
    {
        $id = $req->idE;
        $user = User::find($id);
        
        if ( $user)
        {
            $user->email = $req->email;
            $user->save();

            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
     public function show($id)
    {
        $user = User::find($id);
        return view('admin.showUser', compact('user'));
    }

}
