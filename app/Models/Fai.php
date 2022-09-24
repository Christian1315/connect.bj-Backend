<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fai extends Model
{
    use HasFactory;

    // RELATION ENTRE FAI ET FaiCOMMENTAIRE 
    public function comments()
    {
        return $this->hasMany(FaiComment::class,'fai_id','id');
    }

    // RELATION ENTRE FAI ET PACKS 
    public function packs()
    {
       return $this->belongsToMany(Pack::class);
    }

    public function scopeFilter($query,array $filters)
    {
        if ($filters['search']?? false) {
            $query->where('name', 'like', '%'.request('search').'%')
                    ->orWhere('description','like','%'.request('search').'%')    
                    ;
        }
    }
}
