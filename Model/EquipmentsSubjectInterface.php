<?php

declare(strict_types=1);

namespace Owl\Component\Equipment\Model;

use Doctrine\Common\Collections\Collection;

interface EquipmentsSubjectInterface
{
    /**
     * @return Collection|EquipmentInterface[]
     *
     * @psalm-return Collection<array-key, EquipmentInterface>
     */
    public function getEquipments(): Collection;

    public function hasEquipments(): bool;

    public function addEquipment(EquipmentInterface $equipment): void;

    public function removeEquipment(EquipmentInterface $equipment): void;

    public function hasEquipment(EquipmentInterface $equipment): bool;
}
