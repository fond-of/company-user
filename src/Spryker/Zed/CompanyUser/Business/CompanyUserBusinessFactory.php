<?php

namespace FondOfSpryker\Zed\CompanyUser\Business;

use FondOfSpryker\Zed\CompanyUser\Business\Model\CompanyUser;
use FondOfSpryker\Zed\CompanyUser\Business\Model\CompanyUserInterface;
use Spryker\Zed\CompanyUser\Business\CompanyUserBusinessFactory as SprykerCompanyUserBusinessFactory;

/**
 * @method \FondOfSpryker\Zed\CompanyUser\CompanyUserConfig getConfig()
 * @method \FondOfSpryker\Zed\CompanyUser\Persistence\CompanyUserRepositoryInterface getRepository()
 * @method \FondOfSpryker\Zed\CompanyUser\Persistence\CompanyUserEntityManagerInterface getEntityManager()
 */
class CompanyUserBusinessFactory extends SprykerCompanyUserBusinessFactory
{
    /**
     * @return \FondOfSpryker\Zed\CompanyUser\Business\Model\CompanyUserInterface
     */
    public function createFondOfCompanyUser(): CompanyUserInterface
    {
        return new CompanyUser(
            $this->getRepository(),
            $this->getEntityManager(),
            $this->getCustomerFacade(),
            $this->createCompanyUserPluginExecutor()
        );
    }
}
