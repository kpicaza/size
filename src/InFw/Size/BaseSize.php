<?php

/**
 * This file is part of InFw\File package.
 */

namespace InFw\Size;

use InFw\Range\RangeInterface;

/**
 * Class Size.
 */
class BaseSize implements SizeInterface
{
    /**
     * Size.
     *
     * @var int
     */
    private $size;

    /**
     * Size range.
     *
     * @var RangeInterface
     */
    private $range;

    /**
     * Size constructor.
     *
     * @param $size
     * @param RangeInterface $range
     */
    public function __construct($size, RangeInterface $range)
    {
        $this->range = $range;

        if (
            false === is_int($size)
            || $size < $this->range->getMin()
            || $size > $this->range->getMax()
        ) {
            throw new \InvalidArgumentException(sprintf(
                'Size must be between %s and %s.',
                $this->range->getMin(),
                $this->range->getMax()
            ));
        }

        $this->size = $size;
    }

    /**
     * Get size as a number.
     *
     * @return int
     */
    public function get()
    {
        return $this->size;
    }

    /**
     * Get size range.
     *
     * @return RangeInterface
     */
    public function getRange()
    {
        return $this->range;
    }
}
