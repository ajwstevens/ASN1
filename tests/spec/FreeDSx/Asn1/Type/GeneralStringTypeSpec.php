<?php
/**
 * This file is part of the FreeDSx ASN1 package.
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\FreeDSx\Asn1\Type;

use FreeDSx\Asn1\Type\AbstractType;
use FreeDSx\Asn1\Type\GeneralStringType;
use PhpSpec\ObjectBehavior;

class GeneralStringTypeSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('foo');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(GeneralStringType::class);
    }

    function it_should_set_the_value()
    {
        $this->getValue()->shouldBeEqualTo('foo');
        $this->setValue('bar')->getValue()->shouldBeEqualTo('bar');
    }

    function it_should_have_a_default_tag_type()
    {
        $this->getTagNumber()->shouldBeEqualTo(AbstractType::TAG_TYPE_GENERAL_STRING);
    }
}
