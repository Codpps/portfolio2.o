<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tech extends Model
{
    use HasFactory;

    protected $table = 'teches'; // Pastikan sesuai nama tabel di database
    protected $fillable = ['name', 'logo', 'description'];

    public function works()
    {
        return $this->belongsToMany(Work::class, 'tech_work');
    }
}
