<?php

namespace BlockCypher\AppWallet\Infrastructure\AppWalletBundle\Controller;

use BlockCypher\AppCommon\Infrastructure\Controller\AppCommonController;
use BlockCypher\AppWallet\App\Command\CreateAddressCommand;
use BlockCypher\AppWallet\App\Command\CreateTransactionCommand;
use BlockCypher\AppWallet\App\Command\CreateWalletCommand;

/**
 * Class AppWalletController
 * @package BlockCypher\AppWallet\Infrastructure\AppWalletBundle\Controller
 */
class AppWalletController extends AppCommonController
{
    public function getBaseTemplatePrefix()
    {
        return 'BlockCypherAppWalletInfrastructureAppWalletBundle';
    }

    /**
     * @param string $walletId
     * @param string $tag
     * @param string $callbackUrl
     * @return CreateAddressCommand
     */
    protected function createCreateAddressCommand($walletId, $tag, $callbackUrl)
    {
        $createAddressCommand = new CreateAddressCommand($walletId, $tag, $callbackUrl);
        return $createAddressCommand;
    }

    /**
     * @param string $walletId
     * @param $payToAddress
     * @param $description
     * @param $amount
     * @return CreateTransactionCommand
     */
    protected function createCreateTransactionCommand($walletId, $payToAddress = '', $description = '', $amount = '')
    {
        $createTransactionCommand = new CreateTransactionCommand($walletId, $payToAddress, $description, $amount);
        return $createTransactionCommand;
    }

    /**
     * @param string $name
     * @param string $coin
     * @return CreateWalletCommand
     */
    protected function createCreateWalletCommand($name = '', $coin = '')
    {
        $createWalletCommand = new CreateWalletCommand($name, $coin);
        return $createWalletCommand;
    }

    /**
     * Shortcut to trans. Consider to put it in some common parent controller.
     * @param $id
     * @param array $parameters
     * @param string $domain
     * @param null $locale
     * @return string
     */
    protected function trans(
        $id,
        $parameters = array(),
        $domain = 'BlockCypherAppWalletInfrastructureAppWalletBundle',
        $locale = null
    )
    {
        return $this->translator->trans($id, $parameters, $domain, $locale);
    }
}