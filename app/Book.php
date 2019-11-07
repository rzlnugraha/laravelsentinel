<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $fillable = [
        'judul_buku','pengarang','penerbit','tahun_terbit'
    ];
}
