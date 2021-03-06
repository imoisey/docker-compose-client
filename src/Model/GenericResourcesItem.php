<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace DockerPhpClient\Compose\Model;

class GenericResourcesItem
{
    /**
     * @var GenericResourcesItemDiscreteResourceSpec
     */
    protected $discreteResourceSpec;

    /**
     * @return GenericResourcesItemDiscreteResourceSpec
     */
    public function getDiscreteResourceSpec(): ?GenericResourcesItemDiscreteResourceSpec
    {
        return $this->discreteResourceSpec;
    }

    /**
     * @param GenericResourcesItemDiscreteResourceSpec $discreteResourceSpec
     *
     * @return self
     */
    public function setDiscreteResourceSpec(?GenericResourcesItemDiscreteResourceSpec $discreteResourceSpec): self
    {
        $this->discreteResourceSpec = $discreteResourceSpec;

        return $this;
    }
}
