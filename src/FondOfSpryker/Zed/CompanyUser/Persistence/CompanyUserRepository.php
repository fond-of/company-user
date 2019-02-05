<?php

namespace FondOfSpryker\Zed\CompanyUser\Persistence;

use Generated\Shared\Transfer\CompanyUserTransfer;
use Spryker\Zed\CompanyUser\Persistence\CompanyUserRepository as SprykerCompanyUserRepository;

/**
 * @method \FondOfSpryker\Zed\CompanyUser\Persistence\CompanyUserPersistenceFactory getFactory()
 */
class CompanyUserRepository extends SprykerCompanyUserRepository implements CompanyUserRepositoryInterface
{
    /**
     * @param string $externalReference
     *
     * @throws
     *
     * @return \Generated\Shared\Transfer\CompanyUserTransfer
     */
    public function getCompanyUserByExternalReference(string $externalReference): CompanyUserTransfer
    {
        $query = $this->getFactory()
            ->createCompanyUserQuery()
            ->joinWithCustomer()
            ->leftJoinWithCompany()
            ->filterByExternalReference($externalReference);

        $entityTransfer = $this->buildQueryFromCriteria($query)->findOne();

        return $this->getFactory()
            ->createCompanyUserMapper()
            ->mapEntityTransferToCompanyUserTransfer($entityTransfer);
    }
}
