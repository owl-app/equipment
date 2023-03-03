<?php

declare(strict_types=1);

namespace Owl\Component\Equipment\Model;

use Owl\Component\Attribute\Model\AttributeValue as BaseAttributeValue;
use Webmozart\Assert\Assert;

class EquipmentAttributeValue extends BaseAttributeValue implements EquipmentAttributeValueInterface
{
    public function getProduct(): ?EquipmentInterface
    {
        $subject = parent::getSubject();

        /** @var EquipmentInterface|null $subject */
        Assert::nullOrIsInstanceOf($subject, EquipmentInterface::class);

        return $subject;
    }

    public function setProduct(?EquipmentInterface $product): void
    {
        parent::setSubject($product);
    }
}
