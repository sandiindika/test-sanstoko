<?php

namespace Modules\Shop\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Shop\Database\Factories\ProductImageFactory;

class ProductImage extends Model
{
    use HasFactory, UuidTrait;

    protected $table = 'shop_product_images';

    protected $fillable = [
        'product_id',
        'name',
    ];

    protected static function newFactory()
    {
        return ProductImageFactory::new();
    }
}
