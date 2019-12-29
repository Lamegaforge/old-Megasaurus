<?php

namespace App\Managers\Twitch;

use App\Managers\Twitch\Contracts\Driver;
use App\Managers\Twitch\Contracts\Former;

class Repository
{
    protected Driver $driver;
    protected Former $former;

    public function __construct(Driver $driver, Former $former)
    {
        $this->driver = $driver;
        $this->former = $former;
    }

    public function getLastClips() :array
    {
        $clips = $this->driver->getLastClips();

        return $this->former->clips($clips);
    }
}