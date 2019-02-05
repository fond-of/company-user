<?php

namespace FondOfSpryker\Client\CompanyUser;

use Generated\Shared\Transfer\CompanyUserTransfer;
use Spryker\Client\CompanyUser\CompanyUserClientInterface as SprykerCompanyUserClientInterface;

interface CompanyUserClientInterface extends SprykerCompanyUserClientInterface
{
    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyUserTransfer $companyUserTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyUserTransfer
     */
    public function getCompanyUserByExternalReference(CompanyUserTransfer $companyUserTransfer): CompanyUserTransfer;
}
