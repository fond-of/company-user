<?php

namespace FondOfSpryker\Zed\CompanyUser\Business\Model;

use FondOfSpryker\Zed\CompanyUser\Persistence\CompanyUserEntityManagerInterface;
use FondOfSpryker\Zed\CompanyUser\Persistence\CompanyUserRepositoryInterface;
use Generated\Shared\Transfer\CompanyUserTransfer;
use Spryker\Zed\CompanyUser\Business\Model\CompanyUser as SprykerCompanyUser;
use Spryker\Zed\CompanyUser\Business\Model\CompanyUserPluginExecutorInterface;
use Spryker\Zed\CompanyUser\Dependency\Facade\CompanyUserToCustomerFacadeInterface;

class CompanyUser extends SprykerCompanyUser implements CompanyUserInterface
{
    /**
     * @var \FondOfSpryker\Zed\CompanyUser\Persistence\CompanyUserRepositoryInterface
     */
    protected $fondOfCompanyUserRepository;

    /**
     * @param \FondOfSpryker\Zed\CompanyUser\Persistence\CompanyUserRepositoryInterface $companyUserRepository
     * @param \FondOfSpryker\Zed\CompanyUser\Persistence\CompanyUserEntityManagerInterface $companyUserEntityManager
     * @param \Spryker\Zed\CompanyUser\Dependency\Facade\CompanyUserToCustomerFacadeInterface $customerFacade
     * @param \Spryker\Zed\CompanyUser\Business\Model\CompanyUserPluginExecutorInterface $companyUserPluginExecutor
     * @param \Spryker\Zed\CompanyUserExtension\Dependency\Plugin\CompanyUserSavePreCheckPluginInterface[] $companyUserSavePreCheckPlugins
     */
    public function __construct(
        CompanyUserRepositoryInterface $companyUserRepository,
        CompanyUserEntityManagerInterface $companyUserEntityManager,
        CompanyUserToCustomerFacadeInterface $customerFacade,
        CompanyUserPluginExecutorInterface $companyUserPluginExecutor,
        array $companyUserSavePreCheckPlugins
    ) {
        parent::__construct($companyUserRepository, $companyUserEntityManager, $customerFacade, $companyUserPluginExecutor, $companyUserSavePreCheckPlugins);
        $this->fondOfCompanyUserRepository = $companyUserRepository;
    }

    /**
     * @param string $externalReference
     *
     * @return \Generated\Shared\Transfer\CompanyUserTransfer
     */
    public function getCompanyUserByExternalReference(string $externalReference): CompanyUserTransfer
    {
        $companyUserTransfer = $this->fondOfCompanyUserRepository->getCompanyUserByExternalReference($externalReference);

        return $this->companyUserPluginExecutor->executeHydrationPlugins($companyUserTransfer);
    }
}
