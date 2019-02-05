<?php

namespace FondOfSpryker\Client\CompanyUser;

use Spryker\Client\CompanyUser\CompanyUserDependencyProvider as SprykerCompanyUserDependencyProvider;
use Spryker\Client\Kernel\Container;

class CompanyUserDependencyProvider extends SprykerCompanyUserDependencyProvider
{
    /**
     * @param \Spryker\Client\Kernel\Container $container
     *
     * @return \Spryker\Client\Kernel\Container
     */
    public function provideServiceLayerDependencies(Container $container): Container
    {
        $container = parent::provideServiceLayerDependencies($container);

        return $container;
    }
}
