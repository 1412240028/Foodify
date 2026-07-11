<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends Model<Product>
 * @mixin Builder
 * @method static Builder orderBy(string $column, string $direction = 'asc')
 * @method static Builder query()
 * @method static Product create(array $attributes = [])
 */
class Product extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = [
        'nama_produk',
        'kategori',
        'harga',
        'deskripsi',
    ];
}
