<?php

use Illuminate\Support\Facades\Route;


// Premiere Méthode
Route::get('/', function () {
    return view('base')->with("nom", "Sarr");
});
//Route::get('/about', function () {
   // return view('pages/about')
   // ->with("prenom", "Modou")
   // ->with('nom', "Sarr");
// });


// Deuxieme Méthode
 //Route::get('/about', function () {
  // return view('pages/about')
   // ->withPrenom("Gnoror")
   //->withNom("Sarr");
//});


// Troisime Méthode
 Route::get('/about', function () {
     return view('pages/about')
     ->with([
         'prenom' => "Modou",
         'nom' => "Sarr"
  ]);
 });


// Quatrime Méthode
// Route::get('/about', function () {
//     $tab = [
//         'prenom' => 'Modou',
//         'nom' => "Sarr"
//     ];
//     $nomComplet = "Issa pouye";
//     return view('pages/about', compact('tab', 'nomComplet'));
// });


// Cinquieme Méthode
// Route::get('/about', function () {
//     $view = view('pages/about');
//     $view->nom = "Sarr";
//     $view->prenom = "Fatou";
//     $view->adresse= "Pikine";

//     return $view;
// });
?>