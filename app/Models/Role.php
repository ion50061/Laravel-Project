<?php

namespace App\Models;

use DragonCode\Contracts\Cashier\Resources\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Permission\Contracts\Role as RoleContract;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole implements RoleContract
{
    use HasFactory;

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class);
    }

    public function model(): BelongsToMany
    {
        return $this->belongsToMany(Model::class);
    }
}
