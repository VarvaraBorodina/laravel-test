<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nette\Utils\Image;

/**
 * App\Models\Product
 *
 * @property int $id
 * @property string $name
 * @property string|null $img
 * @property string|null $content
 * @property int $price
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @mixin \Eloquent
 */

class Product extends Model
{
    protected $fillable = ['name', 'price', 'img', 'status', 'brand_id'];

    use HasFactory;

    public function brand(){
        return $this->belongsTo(Brand::class)->withDefault([
            'name' => 'No name',
            'logo' => 'https://i.pinimg.com/originals/c1/2a/2e/c12a2e96ef5fdd39935cca777bc32235.png'
        ]);
    }

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
