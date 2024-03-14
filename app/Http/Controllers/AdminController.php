<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Sousdomaine;


class AdminController extends Controller
{
    public function login () {
        return view ('Pages.Admin.login');
    }

    public function admin () {
        $domaines = Sousdomaine::All();

        if(Session::has('admin')){
            return view ('Pages.Admin.dashboard')->with('domaines', $domaines);
        } 
        else {
            return redirect ('/');
        }
        // return view ('Pages.Admin.dashboard');
    }

    public function addforms () {
        if(Session::has('admin')){
            return view ('Pages.Admin.addforms');
        } 
        else {
            return redirect ('/');
        }
        // return view ('Pages.Admin.addforms');
    }

    public function acceslogin (Request $request) {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $admin = Admin::where('name', $request->name)->first();

        if($admin){
            if($request->input('password') == $admin->password){
                Session::put('admin', $admin);
                return redirect('/admin/dashbord');
            }
            return back()->with('error', 'Mauvais nom ou mot de passe');
        }

        return back()->with('error', 'Pas de compte pour ce nom');


    }

    public function savedomaine (Request $request) {
            $domaine = new Sousdomaine();
    
            $domaine->nom = $request->input('nom');
            $domaine->lien = $request->input('lien');
            $domaine->description = $request->input('description');
            $domaine->save();
    
            return back()->with("status", "Votre sous domaine a ete creer avec succes");
    }


    public function deletedomaine ($id) {
        $domaine = Sousdomaine::find($id);
        $domaine->delete();

        return back()->with("status", "Le sous domaine a ete supprimer avec succes");
    }

    public function editdomaine ($id) {

        $domaine = Sousdomaine::find($id);

        return view('Pages.Admin.editdomaine')->with('domaine', $domaine);
    }

    public function updatedomaine ($id, Request $request) {

        $domaine = Sousdomaine::find($id);
        $domaine->nom = $request->input('nom');
        $domaine->lien = $request->input('lien');
        $domaine->description = $request->input('description');
        $domaine->update();

        return redirect('/admin/dashbord')->with("status", "Le sous domaine a ete modifier avec succes" );
    }

    public function deconnexion () {
        Session::forget('admin');
        return redirect('/');
    }
}
