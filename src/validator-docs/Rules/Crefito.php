<?php

declare(strict_types=1);

namespace geekcom\ValidatorDocs\Rules;

use function preg_match;
use function mb_strlen;

final class Crefito extends Sanitization
{
    public function validateCrefito($attribute, $value): bool
    {
        $c = $this->sanitize($value);
        $v = str_split($value);

        if ($v[7] != "F"){
            return false;
        }

        if (mb_strlen($c) != 6 || preg_match("/[0-9]{6}F/", $c)) {
            return false;
        }

        return true;
    }
}
