<?php

/**
 * This file is part of InFw\File package.
 */

namespace InFw\Size;

use InFw\Range\RangeInterface;

/**
 * Class Size.
 */
interface SizeInterface
{
    /**
     * Get size.
     *
     * @return int
     */
    public function get();

    /**
     * Get size range.
     *
     * @return RangeInterface
     */
    public function getRange();
}
