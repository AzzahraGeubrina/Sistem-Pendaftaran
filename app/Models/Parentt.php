<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Parentt extends Model
{
    protected $table = 'parents';
    
    public function userData($id) {
        return DB::table('parents')
        ->where('id_user', '=', $id)
        ->get();
    }

}
