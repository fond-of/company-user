<?php

namespace FondOfSpryker\Zed\CompanyUser\Business;

use Generated\Shared\Transfer\CompanyUserTransfer;
use Spryker\Zed\CompanyUser\Business\CompanyUserFacadeInterface as SprykerCompanyUserFacadeInterface;

interface CompanyUserFacadeInterface extends SprykerCompanyUserFacadeInterface
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
    public function getCompanyUserByExternalReference(string $externalReference): CompanyUserTransfer;
}
