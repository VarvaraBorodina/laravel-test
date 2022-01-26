<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Brand extends Model
{
    protected $fillable = ['name', 'status', 'logo', 'description','status', 'creation_year'];
    use HasFactory;

    protected $casts = [
        'creation_year' => 'integer'
    ];

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function latestProduct(){
        return $this->hasOne(Product::class)->latestOfMany();
    }

    public function oldestProduct(){
        return $this->hasOne(Product::class)->oldestOfMany();
    }

    public function getNameAttribute(){
        return Str::ucfirst(Str::lower($this->attributes['name']));
    }

    public function setNameAttribute(int $value){
        if($value > 0) {
            $this->attributes['name'] = $value;
        }
        dump($value);
    }
}
