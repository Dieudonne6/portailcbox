<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sousdomaine;


class ClientController extends Controller
{
    public function accueil() {
        $domaines = Sousdomaine::All();
        return view ('Pages.Clients.accueil')->with('domaines', $domaines);
    }
}
