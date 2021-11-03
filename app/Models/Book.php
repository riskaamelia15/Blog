<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'pengarang_id',
        'nama',
        'halaman',
        'translate'];

    public function pengarang()
    {
        return $this->belongsTo(Pengarang::class, 'pengarang_id');
    }
}
