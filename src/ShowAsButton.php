<?php

declare(strict_types=1);

namespace Assurdeal\ActionButtonSelector;

trait ShowAsButton
{
    /**
     * ShowAsButton constructor.
     */
    public function __construct(...$parameters)
    {
        if (method_exists(parent::class, '__construct')) {
            parent::__construct(...$parameters);
        }

        return $this->showAsButton();
    }

    public function showAsButton(bool $show = true): self
    {
        return $this->withMeta(['showAsButton' => $show]);
    }
}
