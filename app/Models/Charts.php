<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charts extends Model
{
    use HasFactory;

    protected $fillable = ['site','pageAuthority','domainAuthority','externalLinks','indexPages'];
}