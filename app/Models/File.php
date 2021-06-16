<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class File extends Model
{
    public function userData($id) {
        return DB::table('files')
        ->where('id_user', '=', $id)
        ->get();
    }
}
