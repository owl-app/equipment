<?php

declare(strict_types=1);

namespace Owl\Component\Equipment\Model;

use Owl\Component\Attribute\Model\Attribute as BaseAttribute;

class EquipmentAttribute extends BaseAttribute implements EquipmentAttributeInterface
{
    /** @var string */
    protected $name;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }
}
