<?php

namespace Resiliency\Places;

use Resiliency\States;

final class ClosedPlace extends AbstractPlace
{
    /**
     * @param int $failures the Place failures
     * @param float $timeout the Place timeout
     */
    public function __construct(int $failures, float $timeout)
    {
        parent::__construct($failures, $timeout, 0.0);
    }

    /**
     * {@inheritdoc}
     */
    public function getState(): string
    {
        return States::CLOSED_STATE;
    }
}
