<?php
namespace Softr\Vipp\Model;

use \Softr\Vipp\Core\Utils\Time;

/**
 * NotaFiscal Model
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
class NotaFiscal extends \Softr\Vipp\Core\Model\AbstractModel
{
    /**
     * Data da Nota Fiscal
     *
     * @var  \DateTime
     */
    protected $data;

    /**
     * Série da Nota Fiscal
     *
     * @var  string
     */
    protected $serie;

    /**
     * Número da Nota Fiscal
     *
     * @var  string
     */
    protected $numero;

    /**
     * Valor.
     *
     * @var  float
     */
    protected $valor;

    /**
     * Retorna Data da Nota Fiscal.
     *
     * @return  \DateTime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Define Data da Nota Fiscal.
     *
     * @param  string  $data  Data da Nota Fiscal.
     *
     * @return self
     */
    public function setData($data)
    {
        $this->data = Time::stringToDateTime($data);

        return $this;
    }

    /**
     * Retorna Série da Nota Fiscal.
     *
     * @return  string
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Define Série da Nota Fiscal.
     *
     * @param  string  $serie  Série da Nota Fiscal.
     *
     * @return self
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Retorna Número da Nota Fiscal.
     *
     * @return  string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Define Número da Nota Fiscal.
     *
     * @param  string  $numero  Número da Nota Fiscal.
     *
     * @return self
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Retorna Valor.
     *
     * @return  float
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Define Valor.
     *
     * @param  float  $valor  Valor.
     *
     * @return self
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }
}
