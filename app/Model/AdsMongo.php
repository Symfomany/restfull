<?php

namespace App\Model;

use Jenssegers\Mongodb\Model;



class AdsMongo extends Model
{

    /**
     * @var string
     */
    protected $connection = 'mongodb';


    /**
     * @var string
     */
    protected $collection = 'ads';

}