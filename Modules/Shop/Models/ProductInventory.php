<?php

namespace Modules\Shop\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Shop\Database\Factories\ProductInventoryFactory;

class ProductInventory extends Model
{
    use HasFactory, UuidTrait;

    protected $table = 'shop_product_inventories';

    protected $fillable = [
        'product_id',
        'qty',
        'low_stock_threshold',
    ];

    protected static function newFactory()
    {
        return ProductInventoryFactory::new();
    }
}
