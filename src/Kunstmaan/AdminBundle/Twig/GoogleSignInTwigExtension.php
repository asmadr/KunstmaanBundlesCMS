<?php

namespace Kunstmaan\AdminBundle\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Class GoogleSignInTwigExtension
 *
 * @final since 5.4
 */
class GoogleSignInTwigExtension extends AbstractExtension
{
    private $enabled;

    private $clientId;

    public function __construct($enabled, $clientId)
    {
        $this->enabled = $enabled;
        $this->clientId = $clientId;
    }

    /**
     * Returns a list of functions to add to the existing list.
     *
     * @return array An array of functions
     */
    public function getFunctions()
    {
        return array(
            new TwigFunction('google_signin_enabled', array($this, 'isGoogleSignInEnabled')),
            new TwigFunction('google_signin_client_id', array($this, 'getClientId')),
        );
    }

    public function isGoogleSignInEnabled()
    {
        return $this->enabled;
    }

    /**
     * @return mixed
     */
    public function getClientId()
    {
        return $this->clientId;
    }
}
