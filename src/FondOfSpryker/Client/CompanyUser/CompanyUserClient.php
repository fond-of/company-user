<?php

namespace FondOfSpryker\Client\CompanyUser;

use Generated\Shared\Transfer\CompanyUserTransfer;
use Spryker\Client\CompanyUser\CompanyUserClient as SprykerCompanyUserClient;

/**
 * @method \FondOfSpryker\Client\CompanyUser\CompanyUserFactory getFactory()
 */
class CompanyUserClient extends SprykerCompanyUserClient implements CompanyUserClientInterface
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
    public function getCompanyUserByExternalReference(CompanyUserTransfer $companyUserTransfer): CompanyUserTransfer
    {
        return $this->getFactory()
            ->createFondOfZedCompanyUserStub()
            ->getCompanyUserByExternalReference($companyUserTransfer);
    }
}
