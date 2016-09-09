<?php
namespace Softr\Vipp\Model;

use \Softr\Vipp\Core\Utils\Time;


/**
 * EventoRastreio Model
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
class EventoRastreio extends \Softr\Vipp\Core\Model\AbstractModel
{
    /**
     * Id do Volume.
     *
     * @var  string
     */
    protected $idVolume;

    /**
     * Id do Evento.
     *
     * @var  string
     */
    protected $idEvento;

    /**
     * Tipo do Evento
     *
     * @var  string
     */
    protected $tipo;

    /**
     * Id do Status
     *
     * @var  integer
     */
    protected $idStatus;

    /**
     * Descricao.
     *
     * @var  string
     */
    protected $descricao;

    /**
     * Data.
     *
     * @var  \DateTime
     */
    protected $data;

    /**
     * Nome do Status.
     *
     * @var  string
     */
    protected $nomeGrupo;

    /**
     * Codigo EDI.
     *
     * @var  string
     */
    protected $codigoEdi;

    /**
     * Id do Local.
     *
     * @var  string
     */
    protected $idLocal;

    /**
     * Local.
     *
     * @var  string
     */
    protected $local;

    /**
     * Tipo do Endereço.
     *
     * @var  string
     */
    protected $tipoEndereco;

    /**
     * Endereço.
     *
     * @var  string
     */
    protected $endereco;

    /**
     * Complemento.
     *
     * @var  string
     */
    protected $complemento;

    /**
     * Bairro.
     *
     * @var  string
     */
    protected $bairro;

    /**
     * Cidade.
     *
     * @var  string
     */
    protected $cidade;

    /**
     * UF.
     *
     * @var  string
     */
    protected $uf;

    /**
     * STO.
     *
     * @var  string
     */
    protected $sto;

    /**
     * Id do Local Destino
     *
     * @var  string
     */
    protected $idLocalDestino;

    /**
     * Destino.
     *
     * @var  string
     */
    protected $destino;

    /**
     * Tipo do Endereço Destino.
     *
     * @var  string
     */
    protected $tipoEnderecoDestino;

    /**
     * Endereço Destino.
     *
     * @var  string
     */
    protected $enderecoDestino;

    /**
     * Complemento Destino.
     *
     * @var  string
     */
    protected $complementoDestino;

    /**
     * Bairro Destino.
     *
     * @var  string
     */
    protected $bairroDestino;

    /**
     * Cidade Destino.
     *
     * @var  string
     */
    protected $cidadeDestino;

    /**
     * UF Destino.
     *
     * @var  string
     */
    protected $ufDestino;

    /**
     * STO Destino.
     *
     * @var  string
     */
    protected $stoDestino;

    /**
     * Nome do recebedor.
     *
     * @var  string
     */
    protected $nomeRecebedor;

    /**
     * Documento do recebedor.
     *
     * @var  string
     */
    protected $documentoRecebedor;

    /**
     * Obs do recebedor.
     *
     * @var  string
     */
    protected $obsRecebedor;

    /**
     * Retorna Id do Volume.
     *
     * @return  string
     */
    public function getIdVolume()
    {
        return $this->idVolume;
    }

    /**
     * Define Id do Volume.
     *
     * @param  string  $idVolume  Id Volume
     *
     * @return self
     */
    public function setIdVolume($idVolume)
    {
        $this->idVolume = $idVolume;

        return $this;
    }

    /**
     * Retorna Id do Evento.
     *
     * @return  string
     */
    public function getIdEvento()
    {
        return $this->idEvento;
    }

    /**
     * Define Id do Evento.
     *
     * @param  string  $idEvento  Id Evento
     *
     * @return self
     */
    public function setIdEvento($idEvento)
    {
        $this->idEvento = $idEvento;

        return $this;
    }

    /**
     * Retorna Tipo do Evento.
     *
     * @return  string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Define Tipo do Evento.
     *
     * @param  string  $tipo  Tipo
     *
     * @return self
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Retorna Id do Status.
     *
     * @return  integer
     */
    public function getIdStatus()
    {
        return $this->idStatus;
    }

    /**
     * Define Id do Status.
     *
     * @param  integer $idStatus Id Status
     *
     * @return self
     */
    public function setIdStatus($idStatus)
    {
        $this->idStatus = $idStatus;

        return $this;
    }

    /**
     * Retorna Descricao.
     *
     * @return  string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Define Descricao.
     *
     * @param  string  $descricao  Descricao
     *
     * @return self
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Retorna Data do Evento.
     *
     * @return  \DateTime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Define Data.
     *
     * @param  string  $data  Data do Evento
     *
     * @return self
     */
    public function setData($data)
    {
        $this->data = Time::stringToDateTime($data);

        return $this;
    }

    /**
     * Retorna Nome do Status.
     *
     * @return  string
     */
    public function getNomeGrupo()
    {
        return $this->nomeGrupo;
    }

    /**
     * Define Nome do Status.
     *
     * @param  string  $nomeGrupo  Nome Grupo
     *
     * @return self
     */
    public function setNomeGrupo($nomeGrupo)
    {
        $this->nomeGrupo = $nomeGrupo;

        return $this;
    }

    /**
     * Retorna Codigo EDI.
     *
     * @return  string
     */
    public function getCodigoEdi()
    {
        return $this->codigoEdi;
    }

    /**
     * Define Codigo EDI.
     *
     * @param  string  $codigoEdi  Codigo Edi
     *
     * @return self
     */
    public function setCodigoEdi($codigoEdi)
    {
        $this->codigoEdi = $codigoEdi;

        return $this;
    }

    /**
     * Retorna Id do Local.
     *
     * @return  string
     */
    public function getIdLocal()
    {
        return $this->idLocal;
    }

    /**
     * Define Id do Local.
     *
     * @param  string  $idLocal  Id Local
     *
     * @return self
     */
    public function setIdLocal($idLocal)
    {
        $this->idLocal = $idLocal;

        return $this;
    }

    /**
     * Retorna Local.
     *
     * @return  string
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Define Local.
     *
     * @param  string  $local  Local
     *
     * @return self
     */
    public function setLocal($local)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Retorna Tipo do Endereço.
     *
     * @return  string
     */
    public function getTipoEndereco()
    {
        return $this->tipoEndereco;
    }

    /**
     * Define Tipo do Endereço.
     *
     * @param  string  $tipoEndereco  Tipo Endereco
     *
     * @return self
     */
    public function setTipoEndereco($tipoEndereco)
    {
        $this->tipoEndereco = $tipoEndereco;

        return $this;
    }

    /**
     * Retorna Endereço.
     *
     * @return  string
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Define Endereço.
     *
     * @param  string  $endereco  Endereco
     *
     * @return self
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Retorna Complemento.
     *
     * @return  string
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * Define Complemento.
     *
     * @param  string  $complemento  Complemento
     *
     * @return self
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;

        return $this;
    }

    /**
     * Retorna Bairro.
     *
     * @return  string
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Define Bairro.
     *
     * @param  string  $bairro  Bairro
     *
     * @return self
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Retorna Cidade.
     *
     * @return  string
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Define Cidade.
     *
     * @param  string  $cidade  Cidade
     *
     * @return self
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Retorna UF.
     *
     * @return  string
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Define UF.
     *
     * @param  string  $uf  UF
     *
     * @return self
     */
    public function setUf($uf)
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Retorna STO.
     *
     * @return  string
     */
    public function getSto()
    {
        return $this->sto;
    }

    /**
     * Define STO.
     *
     * @param  string  $sto  UF
     *
     * @return self
     */
    public function setSto($sto)
    {
        $this->sto = $sto;

        return $this;
    }

    /**
     * Retorna Id do Local Destino.
     *
     * @return  string
     */
    public function getIdLocalDestino()
    {
        return $this->idLocalDestino;
    }

    /**
     * Define Id do Local Destino.
     *
     * @param  string  $idLocalDestino  Id Local Destino
     *
     * @return self
     */
    public function setIdLocalDestino($idLocalDestino)
    {
        $this->idLocalDestino = $idLocalDestino;

        return $this;
    }

    /**
     * Retorna Destino.
     *
     * @return  string
     */
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * Define Destino.
     *
     * @param  string  $destino  Destino
     *
     * @return self
     */
    public function setDestino($destino)
    {
        $this->destino = $destino;

        return $this;
    }

    /**
     * Retorna Tipo do Endereço Destino.
     *
     * @return  string
     */
    public function getTipoEnderecoDestino()
    {
        return $this->tipoEnderecoDestino;
    }

    /**
     * Define Tipo do Endereço Destino.
     *
     * @param  string  $tipoEnderecoDestino  Tipo Endereco Destino
     *
     * @return self
     */
    public function setTipoEnderecoDestino($tipoEnderecoDestino)
    {
        $this->tipoEnderecoDestino = $tipoEnderecoDestino;

        return $this;
    }

    /**
     * Retorna Endereço Destino.
     *
     * @return  string
     */
    public function getEnderecoDestino()
    {
        return $this->enderecoDestino;
    }

    /**
     * Define Endereço Destino.
     *
     * @param  string  $enderecoDestino  Endereco Destino
     *
     * @return self
     */
    public function setEnderecoDestino($enderecoDestino)
    {
        $this->enderecoDestino = $enderecoDestino;

        return $this;
    }

    /**
     * Retorna Complemento Destino.
     *
     * @return  string
     */
    public function getComplementoDestino()
    {
        return $this->complementoDestino;
    }

    /**
     * Define Complemento Destino.
     *
     * @param  string  $complementoDestino  Complemento Destino
     *
     * @return self
     */
    public function setComplementoDestino($complementoDestino)
    {
        $this->complementoDestino = $complementoDestino;

        return $this;
    }

    /**
     * Retorna Bairro Destino.
     *
     * @return  string
     */
    public function getBairroDestino()
    {
        return $this->bairroDestino;
    }

    /**
     * Define Bairro Destino.
     *
     * @param  string  $bairroDestino  Bairro Destino
     *
     * @return self
     */
    public function setBairroDestino($bairroDestino)
    {
        $this->bairroDestino = $bairroDestino;

        return $this;
    }

    /**
     * Retorna Cidade Destino.
     *
     * @return  string
     */
    public function getCidadeDestino()
    {
        return $this->cidadeDestino;
    }

    /**
     * Define Cidade Destino.
     *
     * @param  string  $cidadeDestino  Cidade Destino
     *
     * @return self
     */
    public function setCidadeDestino($cidadeDestino)
    {
        $this->cidadeDestino = $cidadeDestino;

        return $this;
    }

    /**
     * Retorna UF Destino.
     *
     * @return  string
     */
    public function getUfDestino()
    {
        return $this->ufDestino;
    }

    /**
     * Define UF Destino.
     *
     * @param  string  $ufDestino  UF Destino
     *
     * @return self
     */
    public function setUfDestino($ufDestino)
    {
        $this->ufDestino = $ufDestino;

        return $this;
    }

    /**
     * Retorna STO Destino.
     *
     * @return  string
     */
    public function getStoDestino()
    {
        return $this->stoDestino;
    }

    /**
     * Define STO Destino.
     *
     * @param  string  $stoDestino  STO Destino
     *
     * @return self
     */
    public function setStoDestino($stoDestino)
    {
        $this->stoDestino = $stoDestino;

        return $this;
    }

    /**
     * Retorna Nome do recebedor.
     *
     * @return  string
     */
    public function getNomeRecebedor()
    {
        return $this->nomeRecebedor;
    }

    /**
     * Define Nome do recebedor.
     *
     * @param  string  $nomeRecebedor  Nome Recebedor
     *
     * @return self
     */
    public function setNomeRecebedor($nomeRecebedor)
    {
        $this->nomeRecebedor = $nomeRecebedor;

        return $this;
    }

    /**
     * Retorna Documento do recebedor.
     *
     * @return  string
     */
    public function getDocumentoRecebedor()
    {
        return $this->documentoRecebedor;
    }

    /**
     * Define Documento do recebedor.
     *
     * @param  string  $documentoRecebedor  Documento Recebedor
     *
     * @return self
     */
    public function setDocumentoRecebedor($documentoRecebedor)
    {
        $this->documentoRecebedor = $documentoRecebedor;

        return $this;
    }

    /**
     * Retorna Obs do recebedor.
     *
     * @return  string
     */
    public function getObsRecebedor()
    {
        return $this->obsRecebedor;
    }

    /**
     * Define Obs do recebedor.
     *
     * @param  string  $obsRecebedor  Obs Recebedor
     *
     * @return self
     */
    public function setObsRecebedor($obsRecebedor)
    {
        $this->obsRecebedor = $obsRecebedor;

        return $this;
    }
}