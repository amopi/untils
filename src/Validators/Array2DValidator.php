<?php
/**
 * Created by PhpStorm.
 * User: amopi
 * Date: 2016-09-02
 * Time: 17:31
 */

namespace Amopi\Mlib\Utils\Validators;

class Array2DValidator extends ArrayValidator
{
    public function __construct($allowNull = true, $elementValidator = null)
    {
        parent::__construct($allowNull, new ArrayValidator($allowNull, $elementValidator));
    }
    
}
