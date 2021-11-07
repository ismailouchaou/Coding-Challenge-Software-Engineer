<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'parent_category'
    ];

    public function parent()
    {
        return $this->belongsTo('Category', 'parent_category');
    }

    public function children()
    {
        return $this->hasMany('Category', 'parent_category');
    }

    /**
     * Get the product that owns the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
