<?php

namespace app\Observers;

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;

class UuidObserver
{
    public function creating(Model $model)
    {
        if (empty($model->uuid)) {
            $model->uuid = Uuid::uuid4();
        }
    }
}