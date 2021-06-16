<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\parentt;
use App\Models\file;

class Student extends Model
{
    public function userData($id) {
        return DB::table('users')
                    ->join('students', 'users.id', '=', 'students.user_id')
                    ->join('parents', 'users.id', '=', 'parents.user_id')
                    ->join('files', 'users.id', '=', 'files.user_id')
                    ->where('users.id', '=', $id)
                    ->get();
    }
}
