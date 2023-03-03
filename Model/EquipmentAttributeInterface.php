<?php

declare(strict_types=1);

namespace Owl\Component\Equipment\Model;

use Owl\Component\Attribute\Model\AttributeInterface as BaseAttributeInterface;

interface EquipmentAttributeInterface extends BaseAttributeInterface
{
    public function getName(): ?string;

    public function setName(?string $name): void;
}
