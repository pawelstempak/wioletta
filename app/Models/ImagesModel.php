<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class ImagesModel extends Model
{
    public function insertImageTable($request, $filename, $tablename): void
    {
        DB::table($tablename)->insert([
            'filename' => $filename,
            'apartments_id' => $request->id,
            'created_at' => date("Y-m-d H:i:s"),
        ]);
    }

    public function insertSketchImageTable($request, $filename, $tablename): void
    {
        DB::table($tablename)->insert([
            'filename' => $filename,
            'apartments_id' => $request->id,
            'type' => 1,
            'created_at' => date("Y-m-d H:i:s"),
        ]);
    }

    public function getMaxSort($tablename): int
    {
        $max_sort = DB::table($tablename)->max('sort');
        return $max_sort;
    }

    public function getApartment(int $id, string $tablename): object
    {
        $apartment = DB::table($tablename)->find($id);
        return $apartment;
    }

    public function getMainImage(int $id)
    {
        $main_image = DB::table('images')->where([
            ['apartments_id', '=', $id],
            ['type', '=', 0]
        ])->first();
        if ($main_image) return $main_image;
    }

    public function get3dSketchImage(int $id)
    {
        $sketch_image = DB::table('images')->where([
            ['apartments_id', '=', $id],
            ['type', '=', 1]
        ])->first();
        if ($sketch_image) return $sketch_image;
    }

    public function isMainImageExist(int $id): bool
    {
        if (DB::table('images')->where([
            ['apartments_id', '=', $id],
            ['type', '=', 0]
        ])->exists()) {
            return true;
        } else {
            return false;
        }
    }

    public function is3dSketchImageExist(int $id): bool
    {
        if (DB::table('images')->where([
            ['apartments_id', '=', $id],
            ['type', '=', 1]
        ])->exists()) {
            return true;
        } else {
            return false;
        }
    }

    public function getGalleryList(int $id): object
    {
        $gallery = DB::table('gallery')->where('apartments_id', '=', $id)->get();

        return $gallery;
    }

    public function deleteImage(int $id, string $tablename): void
    {
        DB::table($tablename)->where('id', '=', $id)->delete();
    }
}
