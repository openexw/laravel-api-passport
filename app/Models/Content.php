<?php

namespace App\Models;

class Content extends BaseModel {

    public function contentable() {
        return $this->morphTo();
    }
}
