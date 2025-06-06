<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'category_id',
        'store_id',
        'price',
        'compare_price',
        'status',
    ];

    protected $hidden = [
        'image',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $appends = [
        'image_url',
    ];



    protected static function booted()
    {
        static::creating(function (Product $product) {
            $product->slug = Str::slug($product->name);
        });
    }


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id')->withDefault([
            'name' => 'No Category',
        ]);
    }

    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id', 'id')
            ->withDefault([
                'name' => 'No Store',
            ]);
    }

    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return 'https://www.incathlab.com/images/products/default_product.png';
        }
        if (Str::startsWith($this->image, ['http://', 'https://'])) {
            return $this->image;
        }
        return asset('uploads/' . $this->image);
    }

    public function getSalePercentAttribute()
    {
        if (!$this->compare_price || $this->compare_price == 0) {
            return 0;
        }

        $discount = 100 * ($this->compare_price - $this->price) / $this->compare_price;
        return round($discount, 1);
    }


    public function scopeFilter(Builder $builder, $filters)
    {
        $options = array_merge([
            'store_id' => null,
            'category_id' => null,
            'status' => 'active',
        ], $filters);

        $builder->when($options['status'], function ($query, $status) {
            return $query->where('status', $status);
        });

        $builder->when($options['store_id'], function ($builder, $value) {
            $builder->where('store_id', $value);
        });
        $builder->when($options['category_id'], function ($builder, $value) {
            $builder->where('category_id', $value);
        });
    }
}
