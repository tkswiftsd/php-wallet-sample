<?php

namespace BlockCypher\AppExplorer\Infrastructure\AppExplorerBundle\Controller;

use BlockCypher\AppExplorer\Presentation\Facade\AddressServiceFacade;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Translation\TranslatorInterface;

class SubscribeAddressController extends AppExplorerController
{
    /**
     * @param EngineInterface $templating
     * @param TranslatorInterface $translator
     * @param AddressServiceFacade $addressServiceFacade
     */
    public function __construct(
        EngineInterface $templating,
        TranslatorInterface $translator,
        AddressServiceFacade $addressServiceFacade
    )
    {
        parent::__construct($templating, $translator);
        $this->addressServiceFacade = $addressServiceFacade;
    }

    /**
     * @param Request $request
     * @param string $hash
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function __invoke(Request $request, $hash)
    {
        // TODO
    }
}