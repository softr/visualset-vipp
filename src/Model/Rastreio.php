<?php
namespace Softr\Vipp\Model;

use \Softr\Vipp\Core\Utils\Time;
use \Softr\Vipp\Core\Collection;

/**
 * Rastreio Model
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
class Rastreio extends \Softr\Vipp\Core\Model\AbstractModel
{
    /**
     * Número da etiqueta.
     *
     * @var  string
     */
    protected $etiquetaPostagem;

    /**
     * Id do Conhecimento;
     *
     * @var  string
     */
    protected $idConhecimento;

    /**
     * Data da postagem.
     *
     * @var  string
     */
    protected $dataPostagem;

    /**
     * Id do Ultimo Status
     *
     * @var  string
     */
    protected $ultimoStatus;

    /**
     * Nome do Grupo de Status do Evento
     *
     * @var  string
     */
    protected $grupoStatusEvento;

    /**
     * Nome do Status
     *
     * @var  string
     */
    protected $nomeGrupo;

    /**
     * Id do Status de Entrega
     *
     * @var  string
     */
    protected $statusEntrega;

    /**
     * Id Ao Remetente
     *
     * @var  string
     */
    protected $idAoRemetente;

    /**
     * PI.
     *
     * @var  string
     */
    protected $pi;

    /**
     * Conhecimento.
     *
     * @var  string
     */
    protected $conhecimento;

    /**
     * Array de Eventos de Rastreio.
     *
     * @var  Collection
     */
    protected $eventos;

    /**
     * Retorna número da etiqueta.
     *
     * @return  string
     */
    public function getEtiquetaPostagem()
    {
        return $this->etiquetaPostagem;
    }

    /**
     * Define número da etiqueta.
     *
     * @param  string  $etiquetaPostagem  Etiqueta Postagem
     *
     * @return self
     */
    public function setEtiquetaPostagem($etiquetaPostagem)
    {
        $this->etiquetaPostagem = $etiquetaPostagem;

        return $this;
    }

    /**
     * Retorna Id do conhecimento.
     *
     * @return  string
     */
    public function getIdConhecimento()
    {
        return $this->idConhecimento;
    }

    /**
     * Define id do conhecimento.
     *
     * @param  string  $idConhecimento  Id Conhecimento
     *
     * @return self
     */
    public function setIdConhecimento($idConhecimento)
    {
        $this->idConhecimento = max($idConhecimento, 0);

        return $this;
    }

    /**
     * Retorna data da postagem.
     *
     * @return  string
     */
    public function getDataPostagem()
    {
        return $this->dataPostagem;
    }

    /**
     * Define data da postagem.
     *
     * @param  string  $dataPostagem  Data postagem
     *
     * @return self
     */
    public function setDataPostagem($dataPostagem)
    {
        $this->dataPostagem = Time::stringToDateTime($dataPostagem);

        return $this;
    }

    /**
     * Retorna id do ultimo status.
     *
     * @return  string
     */
    public function getUltimoStatus()
    {
        return $this->ultimoStatus;
    }

    /**
     * Define id do ultimo status.
     *
     * @param  string  $ultimoStatus  Id do ultimo status
     *
     * @return self
     */
    public function setUltimoStatus($ultimoStatus)
    {
        $this->ultimoStatus = max($ultimoStatus, 0);

        return $this;
    }

    /**
     * Retorna nome do grupo de status do evento.
     *
     * @return  string
     */
    public function getGrupoStatusEvento()
    {
        return $this->grupoStatusEvento;
    }

    /**
     * Define nome do grupo de status do evento.
     *
     * @param  string  $grupoStatusEvento  Nome do grupo de status do evento
     *
     * @return self
     */
    public function setGrupoStatusEvento($grupoStatusEvento)
    {
        $this->grupoStatusEvento = max($grupoStatusEvento, 0);

        return $this;
    }

    /**
     * Retorna nome do status.
     *
     * @return  string
     */
    public function getNomeGrupo()
    {
        return $this->nomeGrupo;
    }

    /**
     * Define nome do status.
     *
     * @param  string  $nomeGrupo  Nome do status
     *
     * @return self
     */
    public function setNomeGrupo($nomeGrupo)
    {
        $this->nomeGrupo = $nomeGrupo;

        return $this;
    }

    /**
     * Retorna id do status de entrega.
     *
     * @return  string
     */
    public function getStatusEntrega()
    {
        return $this->statusEntrega;
    }

    /**
     * Define id do status de entrega.
     *
     * @param  string  $statusEntrega  Id do status de entrega
     *
     * @return self
     */
    public function setStatusEntrega($statusEntrega)
    {
        $this->statusEntrega = max($statusEntrega, 0);

        return $this;
    }

    /**
     * Retorna id ao remetente.
     *
     * @return  string
     */
    public function getIdAoRemetente()
    {
        return $this->idAoRemetente;
    }

    /**
     * Define id ao remetente.
     *
     * @param  string  $idAoRemetente  Id ao remetente
     *
     * @return self
     */
    public function setIdAoRemetente($idAoRemetente)
    {
        $this->idAoRemetente = max($idAoRemetente, 0);

        return $this;
    }

    /**
     * Retorna PI.
     *
     * @return  string
     */
    public function getPi()
    {
        return $this->pi;
    }

    /**
     * Define PI.
     *
     * @param  string  $pi  PI
     *
     * @return self
     */
    public function setPi($pi)
    {
        $this->pi = max($pi, 0);

        return $this;
    }

    /**
     * Retorna destinatario model instance.
     *
     * @return  string
     */
    public function getConhecimento()
    {
        return $this->conhecimento;
    }

    /**
     * Define conhecimento.
     *
     * @param  string  $conhecimento  Conhecimento
     *
     * @return self
     */
    public function setConhecimento($conhecimento)
    {
        $this->conhecimento = max($conhecimento, 0);

        return $this;
    }

    /**
     * Retorna array de eventos de rastreio.
     *
     * @return  \Model\ResultSet
     */
    public function getEventos()
    {
        return $this->eventos;
    }

    /**
     * Define array de eventos de rastreio.
     *
     * @param  Collection  $eventos  Array de eventos
     *
     * @return self
     */
    public function setEventos(Collection $eventos)
    {
        $this->eventos = $eventos;

        return $this;
    }
}
