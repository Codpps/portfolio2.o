<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = ['title', 'description', 'photo'];

    public function teches()
    {
        return $this->belongsToMany(Tech::class, 'tech_work');
    }
}
