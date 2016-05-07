<?php
namespace Wonderapp\Yellowapp\Facade;

use Illuminate\Support\Facades\Facade;

class Myschool extends Facade {
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Myschool';
    }
}
