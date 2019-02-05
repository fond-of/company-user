<?php

namespace FondOfSpryker\Client\CompanyUser\Zed;

use Generated\Shared\Transfer\CompanyUserTransfer;
use Spryker\Client\CompanyUser\Zed\CompanyUserStubInterface as SprykerCompanyUserStubInterface;

interface CompanyUserStubInterface extends SprykerCompanyUserStubInterface
{
    /**
     * @param \Generated\Shared\Transfer\CompanyUserTransfer $companyUserTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyUserTransfer
     */
    public function getCompanyUserByExternalReference(CompanyUserTransfer $companyUserTransfer): CompanyUserTransfer;
}
