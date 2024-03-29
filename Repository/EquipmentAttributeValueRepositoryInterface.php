<?php

declare(strict_types=1);

namespace Owl\Component\Equipment\Repository;

use Owl\Component\Equipment\Model\EquipmentAttributeValueInterface;
use Sylius\Component\Resource\Repository\RepositoryInterface;

/**
 * @template T of EquipmentAttributeValueInterface
 *
 * @extends RepositoryInterface<T>
 */
interface EquipmentAttributeValueRepositoryInterface extends RepositoryInterface
{
    /**
     * @return array|EquipmentAttributeValueInterface[]
     */
    public function findByJsonChoiceKey(string $choiceKey): array;
}
