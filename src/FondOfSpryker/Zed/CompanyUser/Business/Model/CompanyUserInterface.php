<?php

namespace FondOfSpryker\Zed\CompanyUser\Business\Model;

use Generated\Shared\Transfer\CompanyUserTransfer;
use Spryker\Zed\CompanyUser\Business\Model\CompanyUserInterface as SprykerCompanyUserInterface;

interface CompanyUserInterface extends SprykerCompanyUserInterface
{
    /**
     * @param string $externalReference
     *
     * @return \Generated\Shared\Transfer\CompanyUserTransfer
     */
    public function getCompanyUserByExternalReference(string $externalReference): CompanyUserTransfer;
}
