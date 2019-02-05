<?php

namespace FondOfSpryker\Client\CompanyUser;

use FondOfSpryker\Client\CompanyUser\Zed\CompanyUserStub;
use FondOfSpryker\Client\CompanyUser\Zed\CompanyUserStubInterface;
use Spryker\Client\CompanyUser\CompanyUserFactory as SprykerCompanyUserFactory;

class CompanyUserFactory extends SprykerCompanyUserFactory
{
    /**
     * @return \FondOfSpryker\Client\CompanyUser\Zed\CompanyUserStubInterface
     */
    public function createFondOfZedCompanyUserStub(): CompanyUserStubInterface
    {
        return new CompanyUserStub($this->getProvidedDependency(CompanyUserDependencyProvider::CLIENT_ZED_REQUEST));
    }
}
