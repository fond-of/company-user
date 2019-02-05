<?php

namespace FondOfSpryker\Zed\CompanyUser\Persistence;

use Generated\Shared\Transfer\CompanyUserTransfer;
use Spryker\Zed\CompanyUser\Persistence\CompanyUserRepositoryInterface as SprykerCompanyUserRepositoryInterface;

interface CompanyUserRepositoryInterface extends SprykerCompanyUserRepositoryInterface
{
    /**
     * @param string $externalReference
     *
     * @throws
     *
     * @return \Generated\Shared\Transfer\CompanyUserTransfer
     */
    public function getCompanyUserByExternalReference(string $externalReference): CompanyUserTransfer;
}
