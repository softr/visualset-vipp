<?php
namespace Softr\Vipp\Adapter;

/**
 * Config Adapter
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
class Config implements \Softr\Vipp\Adapter\ConfigInterface
{
    /**
     * Usuário de acesso.
     *
     * @var  string
     */
    protected $usuario;

    /**
     * Token de acesso.
     *
     * @var  string
     */
    protected $token;

    /**
     * Código do perfil de configuração.
     *
     * @var  string
     */
    protected $perfil;

    /**
     * Número do contrato ECT.
     *
     * @var  string
     */
    protected $numeroContrato;

    /**
     * Número do cartao ECT.
     *
     * @var  string
     */
    protected $numeroCartao;

    /**
     * Código Administrativo ECT.
     *
     * @var  string
     */
    protected $codigoAdministrativo;

    /**
     * Constructor
     *
     * @param  string  $usuario               Usuário de acesso
     * @param  string  $token                 Token de acesso
     * @param  string  $perfil                Perfil de configuração
     * @param  string  $numeroContrato        (optional)  Número do contrato ECT
     * @param  string  $numeroCartao          (optional)  Número do cartão ECT
     * @param  string  $codigoAdministrativo  (optional)  Codigo Administrativo
     */
    public function __construct($usuario, $token, $perfil, $numeroContrato, $numeroCartao, $codigoAdministrativo)
    {
        $this->setUsuario($usuario);

        $this->setToken($token);

        $this->setPerfil($perfil);

        if ($numeroContrato) {
            $this->setNumeroContrato($numeroContrato);
        }

        if ($numeroCartao) {
            $this->setNumeroCartao($numeroCartao);
        }

        if ($codigoAdministrativo) {
            $this->setCodigoAdministrativo($codigoAdministrativo);
        }
    }

    /**
     * Retorna Usuário de acesso.
     *
     * @return  string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Define Usuário de acesso.
     *
     * @param  string  $usuario  Usuário de acesso.
     *
     * @return self
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Retorna Token de acesso.
     *
     * @return  string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Define Token de acesso.
     *
     * @param  string  $token  Token de acesso.
     *
     * @return self
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Retorna perfil de configuração.
     *
     * @return  string
     */
    public function getPerfil()
    {
        return $this->perfil;
    }

    /**
     * Define perfil de configuração.
     *
     * @param  string  $perfil  Perfil de configuração.
     *
     * @return self
     */
    public function setPerfil($perfil)
    {
        $this->perfil = $perfil;

        return $this;
    }

    /**
     * Retorna Número do contrato.
     *
     * @return  string
     */
    public function getNumeroContrato()
    {
        return $this->numeroContrato;
    }

    /**
     * Define Número do contrato.
     *
     * @param  string  $numeroContrato  Número do contrato.
     *
     * @return self
     */
    public function setNumeroContrato($numeroContrato)
    {
        $this->numeroContrato = $numeroContrato;

        return $this;
    }

    /**
     * Retorna Número do cartão.
     *
     * @return  string
     */
    public function getNumeroCartao()
    {
        return $this->numeroCartao;
    }

    /**
     * Define Número do cartão.
     *
     * @param  string  $numeroCartao  Número do cartão.
     *
     * @return self
     */
    public function setNumeroCartao($numeroCartao)
    {
        $this->numeroCartao = $numeroCartao;

        return $this;
    }

    /**
     * Retorna Código Administrativo.
     *
     * @return  string
     */
    public function getCodigoAdministrativo()
    {
        return $this->codigoAdministrativo;
    }

    /**
     * Define Código Administrativo.
     *
     * @param  string  $codigoAdministrativo  Código Administrativo.
     *
     * @return self
     */
    public function setCodigoAdministrativo($codigoAdministrativo)
    {
        $this->codigoAdministrativo = $codigoAdministrativo;

        return $this;
    }
}