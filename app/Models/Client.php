<?php

namespace App\Models;

use App\Library\Enum;
use Illuminate\Support\Facades\Vite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo',
        'description',
        'client_type',
        'is_featured',
        'is_active',
        'operator_id',
    ];

    public function operator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'operator_id');
    }


    public function getLogo(): string
    {
        $path = public_path($this->logo);

        if ($this->logo && is_file($path) && file_exists($path)) {
            return asset($this->logo);
        }

        return Vite::asset(Enum::NO_IMAGE_PATH);
    }


    public function scopeClientType($query)
    {
        return $query->whereClientType(Enum::CLIENT_TYPE_CLIENT);
    }

    public function scopeActive($query)
    {
        return $query->whereIsActive(Enum::STATUS_ACTIVE);
    }

    public function scopeFeatured($query)
    {
        return $query->whereIsFeatured(true);
    }

    public static function getClient()
    {
        return self::clientType()->active()->featured()->get();
    }

    public static function ClientPage(){
        return self::clientType()->active()->get();
    }
}
