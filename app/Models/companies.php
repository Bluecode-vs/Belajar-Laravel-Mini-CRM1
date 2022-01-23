<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    protected $table="companies";
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'name','email','website','logo'
    ];

    public function Remployee()
    {
        return $this->hasMany(employees::class);
    }
}
