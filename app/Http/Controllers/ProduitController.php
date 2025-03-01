<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{
    public function index()
    {
        // Récupérer tous les produits
        $produits = Produit::all();

        // Retourner la vue avec les produits
        return view('produits.index', compact('produits'));
    }
}
