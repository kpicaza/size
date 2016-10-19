<?php

/**
 * This file is part of InFw\Size package.
 */

namespace InFw\Size;

use InFw\Range\BaseRange;
use InFw\Range\RangeInterface;

/**
 * Class BaseSizeFactory.
 */
class BaseSizeFactory implements SizeFactory
{
    /**
     * File size range.
     *
     * @var RangeInterface
     */
    private $range;

    /**
     * BaseSizeFactory constructor.
     *
     * @param int $minSize
     * @param int $maxSize
     */
    public function __construct($minSize, $maxSize)
    {
        $this->range = new BaseRange(
            $minSize,
            $maxSize
        );
    }

    /**
     * Create instances of Size object.
     *
     * @param int $size
     * @param int $minSize
     * @param int $maxSize
     *
     * @return SizeInterface
     */
    public function make($size)
    {
        return new BaseSize(
            $size,
            $this->range
        );
    }
}
