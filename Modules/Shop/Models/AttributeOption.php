<?php

namespace Modules\Shop\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Shop\Database\Factories\AttributeOptionFactory;
use App\Traits\UuidTrait;

class AttributeOption extends Model
{
    use HasFactory, UuidTrait;

    protected $table = 'shop_attribute_options';

    protected $fillable = [
        'attribute_id',
        'slug',
        'name',
    ];

    protected static function newFactory()
    {
        return \Modules\Shop\Database\factories\AttributeOptionFactory::new();
    }
}
