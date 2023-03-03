<?php

declare(strict_types=1);

namespace Owl\Component\Equipment\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Owl\Component\Attribute\Model\AttributeValueInterface;
use Sylius\Component\Resource\Model\TimestampableTrait;
use Webmozart\Assert\Assert;

class Equipment implements EquipmentInterface
{
    use TimestampableTrait;

    /** @var mixed */
    protected $id;

    /** @var string|null */
    protected $name;

    /** @var string|null */
    protected $symbol;

    /** @var string|null */
    protected $unit;

    /** @var int|null */
    protected $price;

    /** @var string|null */
    protected $other;

    /**
     * @var Collection|AttributeValueInterface[]
     *
     * @psalm-var Collection<array-key, AttributeValueInterface>
     */
    protected $attributes;

    public function __construct()
    {
        /** @var ArrayCollection<array-key, AttributeValueInterface> $this->attributes */
        $this->attributes = new ArrayCollection();

        $this->createdAt = new \DateTime();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getSymbol(): ?string
    {
        return $this->symbol;
    }

    public function setSymbol(?string $symbol): void
    {
        $this->symbol = $symbol;
    }

    public function getUnit(): ?string
    {
        return $this->unit;
    }

    public function setUnit(?string $unit): void
    {
        $this->unit = $unit;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(?int $price): void
    {
        $this->price = $price;
    }

    public function getOther(): ?string
    {
        return $this->other;
    }

    public function setOther(?string $other): void
    {
        $this->other = $other;
    }

    public function getAttributes(): Collection
    {
        return $this->attributes;
    }

    public function addAttribute(?AttributeValueInterface $attribute): void
    {
        /** @var EquipmentAttributeValueInterface $attribute */
        Assert::isInstanceOf(
            $attribute,
            EquipmentAttributeValueInterface::class,
            'Attribute objects added to a Product object have to implement EquipmentAttributeValueInterface'
        );

        if (!$this->hasAttribute($attribute)) {
            $attribute->setProduct($this);
            $this->attributes->add($attribute);
        }
    }

    public function removeAttribute(?AttributeValueInterface $attribute): void
    {
        /** @var EquipmentAttributeValueInterface $attribute */
        Assert::isInstanceOf(
            $attribute,
            EquipmentAttributeValueInterface::class,
            'Attribute objects removed from a Product object have to implement EquipmentAttributeValueInterface'
        );

        if ($this->hasAttribute($attribute)) {
            $this->attributes->removeElement($attribute);
            $attribute->setProduct(null);
        }
    }

    public function hasAttribute(AttributeValueInterface $attribute): bool
    {
        return $this->attributes->contains($attribute);
    }
}
