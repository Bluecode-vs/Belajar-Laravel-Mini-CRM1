<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    public $timestamps = false;
    protected $table="employees";
    protected $primaryKey ='id';
    // protected $guarded =['id'];
    protected $fillable = [
        'id','First_Name', 'Last_Name', 'company_id', 'email', 'phone'
    ];

    public function Rcompany()
    {
        return $this->belongsTo(companies::class, 'company_id');
    }
}
