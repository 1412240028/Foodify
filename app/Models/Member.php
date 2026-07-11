<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends Model<Member>
 * @mixin Builder
 * @property int $id_member
 * @property string $nama
 * @property string $email
 * @property string $nohp
 * @property string $alamat
 * @property string $jenis_kelamin
 * @property \Illuminate\Support\Carbon $tanggal_lahir
 * @method static Builder orderBy(string $column, string $direction = 'asc')
 * @method static Builder query()
 * @method static Member create(array $attributes = [])
 * @method int getKey()
 * @method bool update(array $attributes = [])
 * @method bool delete()
 */
class Member extends Model
{
    protected $table = 'member';
    protected $primaryKey = 'id_member';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;

    /**
     * @property int $id_member
     * @property string $nama
     * @property string $email
     * @property string $nohp
     * @property string $alamat
     * @property string $jenis_kelamin
     * @property \Illuminate\Support\Carbon $tanggal_lahir
     */
    protected $fillable = [
        'nama',
        'email',
        'nohp',
        'alamat',
        'jenis_kelamin',
        'tanggal_lahir',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
    ];
}
