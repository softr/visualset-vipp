<?php
namespace Softr\Vipp\Model;

/**
 * ContratoEct Model
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
class ContratoEct extends \Softr\Vipp\Core\Model\AbstractModel
{
    /**
     * Número do contrato
     *
     * @var  string
     */
    protected $numeroContrato;

    /**
     * Número do cartao
     *
     * @var  string
     */
    protected $numeroCartao;

    /**
     * Código Administrativo
     *
     * @var  string
     */
    protected $codigoAdministrativo;

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