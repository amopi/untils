<?php
/**
 * Created by PhpStorm.
 * User: amopi
 * Date: 2016-09-02
 * Time: 17:39
 */

namespace Amopi\Mlib\Utils\Validators;

class DummyValidator implements ValidatorInterface
{
    
    public function validate($target)
    {
        return $target;
    }
}
