<?php
/**
 * Created by PhpStorm.
 * User: Herminio
 * Date: 25/07/2017
 * Time: 12:44
 */

namespace app\Observers;

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;

class UuidOserver
{
    public function creating(Model $model)
    {
        if (empty($model->uuid)) {
            $model->uuid = Uuid::uuid4();
        }
    }
}