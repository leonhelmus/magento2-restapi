<?php

namespace Dealer4dealer\Xcore\Api;

interface OrderStateRepositoryInterface
{
    /**
     * Get a list of all order states.
     *
     * @return \Dealer4dealer\Xcore\Api\Data\StateInterface[]
     */
    public function getList();
}