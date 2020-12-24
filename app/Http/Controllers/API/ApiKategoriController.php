<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Kategori;
use App\Konsumen;
use Illuminate\Http\Request;

class ApiKategoriController extends Controller
{
    public function getKonsumenAll()
    {

        $kategori = Kategori::get()->toJson(JSON_PRETTY_PRINT);
        return response($kategori, 200);

    }

    public function createKategori(Request $request) {
        $kategori = new Kategori();
        $kategori->name_kategori = $request->name_kategori;


        $kategori->save();

        return response()->json([
        "message" => "kategori record created"
        ], 201);

      }

      public function getKategori($id) {

            if (Kategori::where('id', $id)->exists()) {
                $kategori = Kategori::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
                return response($kategori, 200);
            } else {
                return response()->json([
                "message" => "Student not found"
                ], 404);

            }
        }



      public function updateKategori(Request $request, $id) {
        if (Kategori::where('id', $id)->exists()) {
            $kategori = Kategori::find($id);

            $kategori->name_kategori = is_null($request->name_kategori) ? $kategori->name_kategori : $request->name_kategori;
            $kategori->save();

            return response()->json([
              "message" => "records updated successfully"
            ], 200);
          } else {
            return response()->json([
              "message" => "konsumen not found"
            ], 404);
          }

      }

      public function deleteKonsumen ($id) {

        if(Konsumen::where('id', $id)->exists()) {
            $konsumen = Konsumen::find($id);
            $konsumen->delete();

            return response()->json([
              "message" => "records deleted"
            ], 202);
          } else {
            return response()->json([
              "message" => "Konsumen not found"
            ], 404);
          }

      }
}
