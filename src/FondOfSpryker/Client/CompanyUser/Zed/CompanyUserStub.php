<?php

namespace FondOfSpryker\Client\CompanyUser\Zed;

use Generated\Shared\Transfer\CompanyUserTransfer;
use Spryker\Client\CompanyUser\Zed\CompanyUserStub as SprykerCompanyUserStub;

class CompanyUserStub extends SprykerCompanyUserStub implements CompanyUserStubInterface
{
    /**
     * @param \Generated\Shared\Transfer\CompanyUserTransfer $companyUserTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyUserTransfer
     */
    public function getCompanyUserByExternalReference(CompanyUserTransfer $companyUserTransfer): CompanyUserTransfer
    {
        /** @var \Generated\Shared\Transfer\CompanyUserTransfer $companyUserTransfer */
        $companyUserTransfer = $this->zedRequestClient->call(
            '/company-user/gateway/get-company-user-by-external-reference',
            $companyUserTransfer
        );

        return $companyUserTransfer;
    }
}
