<?php

namespace App;

use App\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Model;

class Respondent extends Model
{
    use UsesUuid;
    protected $guarded = [];
}
