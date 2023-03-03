<?php
declare(strict_types=1);

namespace Owl\Component\Equipment\Model;

use Owl\Component\Attribute\Model\AttributeSubjectInterface;
use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TimestampableInterface;

interface EquipmentInterface extends 
    AttributeSubjectInterface,
    TimestampableInterface,
    ResourceInterface
{
    public function getName(): ?string;

    public function setName(?string $name): void;

    public function getSymbol(): ?string;

    public function setSymbol(?string $symbol): void;

    public function getUnit(): ?string;

    public function setUnit(?string $unit): void;

    public function getPrice(): ?int;

    public function setPrice(?int $price): void;

    public function getOther(): ?string;

    public function setOther(?string $other): void;
}
