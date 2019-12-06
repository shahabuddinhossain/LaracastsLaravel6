<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class assignment extends Model
{
    public function complete()
    {
        $this->completed = true;
        $this->save();
    }

    public function uncomplete() {
        $this->completed = false;
        $this->save();
    }
}
