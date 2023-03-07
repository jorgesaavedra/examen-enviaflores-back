<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagen;

class ImagenesController extends Controller
{
    public function get() {
        return Imagen::all();
    }
    public function add(Request $request) {
        $imagen = new Imagen;
        $imagen->filename = $request->filename;
        $imagen->base64 = $request->base64;
        $imagen->alt_text = $request->alt_text;
        $imagen->is_favorite = $request->is_favorite;        
        $imagen->save();
        return response()->json(['message' => 'success', 'imagen' => $imagen]);
    }
    public function update($id, Request $request) {
        $imagen = Imagen::find($id);
        $imagen->filename = $request->filename;
        $imagen->alt_text = $request->alt_text;
        $imagen->is_favorite = $request->is_favorite;        
        $imagen->save();
        return response()->json(['message' => 'success', 'imagen' => $imagen]);
    }
    public function delete($id, Request $request) {
        $imagen = Imagen::find($id);
        $imagen->delete();
        return response()->json(['message' => 'success', 'imagen' => $imagen]);
    }
    public function favoritas() {
        return Imagen::where('is_favorite', 1)->get();
    }
}
