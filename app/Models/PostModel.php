<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    use HasFactory;

    public string $image = 'images/audi.png';
    public string $title = 'Title';
    public string $content = 'Content example';
    public string $date = '12:32 12/11/2023';
}
