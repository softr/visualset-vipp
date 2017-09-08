<?php
namespace Softr\Vipp\Model;

use \Softr\Vipp\Core\Collection;
use \Softr\Vipp\Model\ContratoEct;
use \Softr\Vipp\Model\Destinatario;

/**
 * Postagem Model
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
class Postagem extends \Softr\Vipp\Core\Model\AbstractModel
{
    /**
     * ContratoECT Model Instance.
     *
     * @var  ContratoEct
     */
    protected $contratoEct;

    /**
     * Destinatario Model Instance.
     *
     * @var  Destinatario
     */
    protected $destinatario;

    /**
     * Código do Servico.
     *
     * @var  integer
     */
    protected $servico;

    /**
     * Array de Notas Fiscais.
     *
     * @var  Collection
     */
    protected $notasFiscais;

    /**
     * Volumes Array.
     *
     * @var  Collection
     */
    protected $volumes;

    /**
     * Status da Postagem.
     *
     * @var  string.
     */
    protected $statusPostagem;

    /**
     * Retorna o Objeto ContratoEct.
     *
     * @return  ContratoEct
     */
    public function getContratoEct()
    {
        return $this->contratoEct;
    }

    /**
     * Define o Objeto ContratoEct.
     *
     * @param  ContratoEct  $contratoEct  ContratoEct Instance.
     *
     * @return self
     */
    public function setContratoEct(ContratoEct $contratoEct)
    {
        $this->contratoEct = $contratoEct;

        return $this;
    }

    /**
     * Retorna o Objeto Destinatario.
     *
     * @return  Destinatario
     */
    public function getDestinatario()
    {
        return $this->destinatario;
    }

    /**
     * Define o Objeto Destinatario.
     *
     * @param  Destinatario  $contratoEct  Destinatario Instance.
     *
     * @return self
     */
    public function setDestinatario(Destinatario $destinatario)
    {
        $this->destinatario = $destinatario;

        return $this;
    }

    /**
     * Retorna o código do serviço.
     *
     * @return  integer
     */
    public function getServico()
    {
        return $this->servico;
    }

    /**
     * Define código do serviço.
     *
     * @param  string  $servico  Código do Serviço
     *
     * @return self
     */
    public function setServico($servico)
    {
        $this->servico = $servico;

        return $this;
    }

    /**
     * Retorna o array de notas fiscais.
     *
     * @return  ResultSet
     */
    public function getNotasFiscais()
    {
        return $this->notasFiscais;
    }

    /**
     * Retorna o primeiro item do array de notas fiscais.
     *
     * @return  NotaFiscal
     */
    public function getNotaFiscal()
    {
        return $this->notasFiscais->offsetGet(0);
    }

    /**
     * Define o array de notas fiscais.
     *
     * @param  Collection  $notasFiscais  Array de notas fiscais
     *
     * @return self
     */
    public function setNotasFiscais(Collection $notasFiscais)
    {
        $this->notasFiscais = $notasFiscais;

        return $this;
    }

    /**
     * Retorna o array de volumes.
     *
     * @return  Collection
     */
    public function getVolumes()
    {
        return $this->volumes;
    }

    /**
     * Retorna o primeiro item do array de volumes.
     *
     * @return  Volume
     */
    public function getVolume()
    {
        return $this->volumes->offsetGet(0);
    }

    /**
     * Define o array de volumes.
     *
     * @param  Collection  $volumes  Array de volumes
     *
     * @return self
     */
    public function setVolumes(Collection $volumes)
    {
        $this->volumes = $volumes;

        return $this;
    }

    /**
     * Retorna o status da postagem.
     *
     * @return  string
     */
    public function getStatusPostagem()
    {
        return $this->statusPostagem;
    }

    /**
     * Define o status da postagem.
     *
     * @param  string  $statusPostagem  Status da Postagem
     *
     * @return self
     */
    public function setStatusPostagem($statusPostagem)
    {
        $this->statusPostagem = $statusPostagem;

        return $this;
    }
}
