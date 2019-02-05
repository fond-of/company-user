<?php

namespace FondOfSpryker\Zed\CompanyUser\Business;

use Generated\Shared\Transfer\CompanyUserTransfer;
use Spryker\Zed\CompanyUser\Business\CompanyUserFacade as SprykerCompanyUserFacade;

/**
 * @method \FondOfSpryker\Zed\CompanyUser\Business\CompanyUserBusinessFactory getFactory()
 * @method \FondOfSpryker\Zed\CompanyUser\Persistence\CompanyUserRepositoryInterface getRepository()
 * @method \FondOfSpryker\Zed\CompanyUser\Persistence\CompanyUserEntityManagerInterface getEntityManager()
 */
class CompanyUserFacade extends SprykerCompanyUserFacade implements CompanyUserFacadeInterface
{
    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $externalReference
     *
     * @return \Generated\Shared\Transfer\CompanyUserTransfer
     */
    public function getCompanyUserByExternalReference(string $externalReference): CompanyUserTransfer
    {
        return $this->getFactory()->createFondOfCompanyUser()->getCompanyUserByExternalReference($externalReference);
    }
}
