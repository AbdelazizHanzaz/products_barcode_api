<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;



    protected $fillable = ['name', 'description', 'price', 'sku', 'barcode'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function isInStock()
    {
        return $this->inventory_count > 0;
    }

    public function decrementInventory($quantity = 1)
    {
        $this->inventory_count -= $quantity;
        $this->save();
    }

    public function incrementInventory($quantity = 1)
    {
        $this->inventory_count += $quantity;
        $this->save();
    }

    public function setBarcodeAttribute($value)
    {
        $this->attributes['barcode'] = strtoupper($value);
    }



    protected static function boot()
    {
        parent::boot();

        // Generate barcode before saving model
        self::creating(function ($product) {
            $product->generated_barcode = self::generateBarcode();
        });
    }

    public function getBarcodeAttribute()
    {
        return $this->generated_barcode;
    }

    public static function generateBarcode()
    {
        $number = mt_rand(10000000, 99999999);
        return 'PROD-' . $number;
    }
}
