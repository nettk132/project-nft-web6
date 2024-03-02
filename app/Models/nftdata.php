<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class nftdata extends Model
{
    protected $table = 'nfts';

    protected $primaryKey = 'nft_id';
    protected $fillable = [
        'name',
        'image',
        'price',
    ];
}
