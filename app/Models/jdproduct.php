<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class jdproduct extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'jd';

    public function gettest()
    {
        // return $this->connection('mongodb')->collection('jd')->get();
        return $this->collection('jd')->get(10);
    }
}
