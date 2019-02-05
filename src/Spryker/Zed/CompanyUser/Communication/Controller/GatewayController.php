<?php

namespace FondOfSpryker\Zed\CompanyUser\Communication\Controller;

use Generated\Shared\Transfer\CompanyUserTransfer;
use Spryker\Zed\CompanyUser\Communication\Controller\GatewayController as SprykerGatewayController;

/**
 * @method \FondOfSpryker\Zed\CompanyUser\Business\CompanyUserFacadeInterface getFacade()
 */
class GatewayController extends SprykerGatewayController
{
    /**
     * @param \Generated\Shared\Transfer\CompanyUserTransfer $companyUserTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyUserTransfer
     */
    public function getCompanyUserByExternalReferenceAction(CompanyUserTransfer $companyUserTransfer): CompanyUserTransfer
    {
        return $this->getFacade()->getCompanyUserByExternalReference($companyUserTransfer->getExternalReference());
    }
}
