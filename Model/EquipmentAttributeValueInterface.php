<?php

declare(strict_types=1);

namespace Owl\Component\Equipment\Model;

use Owl\Component\Attribute\Model\AttributeValueInterface as BaseAttributeValueInterface;

interface EquipmentAttributeValueInterface extends BaseAttributeValueInterface
{
    public function getProduct(): ?EquipmentInterface;

    public function setProduct(?EquipmentInterface $product): void;
}
