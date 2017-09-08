<?php
namespace Softr\Vipp;

use Softr\Vipp\Adapter\ConfigInterface;
use Softr\Vipp\Api\Postagem;
use Softr\Vipp\Api\Rastreio;

/**
 * Client API Wrapper
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
class Client
{
    /**
     * Config Interface
     *
     * @var  ConfigInterface
     */
    protected $config;

    /**
     * Constructor
     *
     * @param  ConfigInterface  $config  Config Instance
     */
    public function __construct(ConfigInterface $config)
    {
        $this->config = $config;
    }

    /**
     * Postagem endpoint
     *
     * @return  Postagem
     */
    public function postagem()
    {
        return new Postagem($this->config);
    }

    /**
     * Rastreio endpoint
     *
     * @return  Rastreio
     */
    public function rastreio()
    {
        return new Rastreio($this->config);
    }
}
