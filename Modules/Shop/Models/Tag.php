<?php

namespace Modules\Shop\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Shop\Database\Factories\TagFactory;
use App\Traits\UuidTrait;

class Tag extends Model
{
    use HasFactory, UuidTrait;

    protected $table = 'shop_tags';

    protected $fillable = [
        'slug',
        'name',
    ];

    protected static function newFactory()
    {
        return TagFactory::new();
    }

    public function products()
    {
        return $this->belongsToMany('Modules\Shop\Models\Product', 'shop_products_tags', 'tag_id', 'product_id');
    }
}
