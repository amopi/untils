<?php
/**
 * Created by PhpStorm.
 * User: amopi
 * Date: 2016-09-02
 * Time: 22:20
 */

namespace Amopi\Mlib\Utils\Validators;

use Amopi\Mlib\Utils\Exceptions\InvalidDataTypeException;

/**
 * Class UrlValidator
 *
 * @package Amopi\Mlib\Utils\Validators
 */
class UrlValidator implements ValidatorInterface
{
    public function validate($target)
    {
        if (!is_string($target)) {
            throw new InvalidDataTypeException("Target is not a string, and cannot be validated as URL!");
        }
        
        $filtered = filter_var(
            $target,
            FILTER_VALIDATE_URL,
            FILTER_FLAG_SCHEME_REQUIRED |
            FILTER_FLAG_HOST_REQUIRED
        );
        if ($filtered === false) {
            throw new InvalidDataTypeException("Target is not a valid url: " . $target);
        }
        
        return $filtered;
    }
}
    
