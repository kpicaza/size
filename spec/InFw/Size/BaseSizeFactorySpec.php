<?php

namespace spec\InFw\Size;

use InFw\Size\BaseSize;
use InFw\Size\SizeInterface;
use InFw\Range\BaseRange;
use InFw\Range\RangeInterface;
use PhpSpec\ObjectBehavior;

class BaseSizeFactorySpec extends ObjectBehavior
{
    const SIZE = 340000;
    const MIN_SIZE = 230;
    const MAX_SIZE = 740000;

    private $range;

    function let()
    {
        $this->range = new BaseRange(
            self::MIN_SIZE,
            self::MAX_SIZE
        );
    }

    function it_can_create_base_size_objects()
    {
        $this->beConstructedWith(
            self::MIN_SIZE,
            self::MAX_SIZE
        );

        $size = new BaseSize(
            self::SIZE,
            $this->range
        );

        $new = $this->make(self::SIZE);

        $new->shouldBeAnInstanceOf(SizeInterface::class);
        $new->get()->shouldBe($size->get());
        $new->getRange()->shouldBeAnInstanceOf(RangeInterface::class);
        $new->getRange()->getMin()->shouldBe($size->getRange()->getMin());
        $new->getRange()->getMax()->shouldBe($size->getRange()->getMax());
    }
}
