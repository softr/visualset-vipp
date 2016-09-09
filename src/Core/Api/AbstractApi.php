<?php
namespace Softr\Vipp\Core\Api;

use Softr\Vipp\Adapter\ConfigInterface;

/**
 * Abstract API
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
abstract class AbstractApi
{
    /**
     * SOAP Client Instance
     *
     * @var ConfigInterface
     */
    protected $client;

    /**
     * Config Instance
     *
     * @var ConfigInterface
     */
    protected $config;

    /**
     * Constructor
     *
     * @param  ConfigInterface  $config  Adapter Instance
     */
    public function __construct(ConfigInterface $config)
    {
        $this->client = new \SoapClient('http://vpsrv.visualset.com.br/?wsdl', array('trace' => 1));

        $this->config = $config;
    }

    /**
     * Get API Last Request
     *
     * @return  mixed
     */
    public function getLastRequest()
    {
        return $this->client->__getLastRequest();
    }
}