<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'division', 'salary', 'allowance', 'total', 'join_date'];

    //fungsi untuk menghitung lama kerja
    public function hitungLamaKerja()
    {
        if ($this->join_date) {
             $joinDate = new \DateTime($this->join_date);
             $now = new \DateTime();
             $interval = $now->diff($joinDate);
             return $interval->y;
        }

        return 0;
    }
}
