<?php
namespace Softr\Vipp\Model;

/**
 * Volume Model
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
class Volume extends \Softr\Vipp\Core\Model\AbstractModel
{
    /**
     * Peso em gramas.
     *
     * @var  integer
     */
    protected $peso;

    /**
     * Cubagem.
     *
     * @var  boolean
     */
    protected $cubagem;

    /**
     * Altura em centímetros
     *
     * @var  integer
     */
    protected $altura;

    /**
     * Largura em centímetros.
     *
     * @var  integer
     */
    protected $largura;

    /**
     * Comprimento em centímetros.
     *
     * @var  integer
     */
    protected $comprimento;

    /**
     * Código de barras.
     *
     * @var  string
     */
    protected $codigoBarraVolume;

    /**
     * Código de barras do cliente.
     *
     * @var  string
     */
    protected $codigoBarraCliente;

    /**
     * Observação.
     *
     * @var  string
     */
    protected $observacaoVisual;

    /**
     * Posição do volume.
     *
     * @var  integer
     */
    protected $posicaoVolume;

    /**
     * Conteúdo.
     *
     * @var  string
     */
    protected $conteudo;

    /**
     * Valor declarado.
     *
     * @var  string
     */
    protected $valorDeclarado;

    /**
     * Serviços Adicionais.
     *
     * @var  string
     */
    protected $adicionaisVolume;

    /**
     * Código da etiqueta.
     *
     * @var  string
     */
    protected $etiqueta;

    /**
     * Valor do serviço
     *
     * @var  float
     */
    protected $valorTarifa;

    /**
     * Valor dos serviços adicionais.
     *
     * @var  float
     */
    protected $ValorAdicionais;

    /**
     * Valor total da postagem.
     *
     * @var  float
     */
    protected $valorPostagem;

    /**
     * Entrega aos sábados
     *
     * @var  boolean
     */
    protected $entregaSabado;

    /**
     * Entrega domiciliar
     *
     * @var  boolean
     */
    protected $entregaDomiciliar;

    /**
     * Prazo de entrega da postagem em dias úteis.
     *
     * @var  string.
     */
    protected $prazo;

    /**
     * Retorna peso em gramas.
     *
     * @return  integer
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Define peso em gramas.
     *
     * @param  integer  $peso  Peso
     *
     * @return self
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Retorna cubagem.
     *
     * @return  boolean
     */
    public function getCubagem()
    {
        return $this->cubagem;
    }

    /**
     * Define cubagem.
     *
     * @param  boolean  $cubagem  Cubagem
     *
     * @return self
     */
    public function setCubagem($cubagem)
    {
        $this->cubagem = $cubagem;

        return $this;
    }

    /**
     * Retorna altura em centímetros.
     *
     * @return  integer
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Define altura em centímetros.
     *
     * @param  integer  $altura  Altura
     *
     * @return self
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Retorna largura em centímetros.
     *
     * @return  integer
     */
    public function getLargura()
    {
        return $this->largura;
    }

    /**
     * Define largura em centímetros.
     *
     * @param  integer  $largura  Largura
     *
     * @return self
     */
    public function setLargura($largura)
    {
        $this->largura = $largura;

        return $this;
    }

    /**
     * Retorna comprimento em centímetros.
     *
     * @return  integer
     */
    public function getComprimento()
    {
        return $this->comprimento;
    }

    /**
     * Define comprimento em centímetros.
     *
     * @param  integer  $comprimento  Comprimento
     *
     * @return self
     */
    public function setComprimento($comprimento)
    {
        $this->comprimento = $comprimento;

        return $this;
    }

    /**
     * Retorna código de barras.
     *
     * @return  string
     */
    public function getCodigoBarraVolume()
    {
        return $this->codigoBarraVolume;
    }

    /**
     * Define código de barras.
     *
     * @param  string  $codigoBarraVolume  Codigo de barras
     *
     * @return self
     */
    public function setCodigoBarraVolume($codigoBarraVolume)
    {
        $this->codigoBarraVolume = $codigoBarraVolume;

        return $this;
    }

    /**
     * Retorna código de barras do cliente.
     *
     * @return  string
     */
    public function getCodigoBarraCliente()
    {
        return $this->codigoBarraCliente;
    }

    /**
     * Define código de barras do cliente.
     *
     * @param  string  $codigoBarraCliente  Codigo de barras do cliente
     *
     * @return self
     */
    public function setCodigoBarraCliente($codigoBarraCliente)
    {
        $this->codigoBarraCliente = $codigoBarraCliente;

        return $this;
    }

    /**
     * Retorna observação visual.
     *
     * @return  string
     */
    public function getObservacaoVisual()
    {
        return $this->observacaoVisual;
    }

    /**
     * Define observação.
     *
     * @param  string  $observacaoVisual  Observacao Visual
     *
     * @return self
     */
    public function setObservacaoVisual($observacaoVisual)
    {
        $this->observacaoVisual = $observacaoVisual;

        return $this;
    }

    /**
     * Retorna posição do volume.
     *
     * @return  integer
     */
    public function getPosicaoVolume()
    {
        return $this->posicaoVolume;
    }

    /**
     * Define posição do volume.
     *
     * @param  integer  $posicaoVolume  Posição do volume
     *
     * @return self
     */
    public function setPosicaoVolume($posicaoVolume)
    {
        $this->posicaoVolume = $posicaoVolume;

        return $this;
    }

    /**
     * Retorna conteúdo.
     *
     * @return  string
     */
    public function getConteudo()
    {
        return $this->conteudo;
    }

    /**
     * Define conteúdo.
     *
     * @param  string  $conteudo  Conteudo
     *
     * @return self
     */
    public function setConteudo($conteudo)
    {
        $this->conteudo = $conteudo;

        return $this;
    }

    /**
     * Retorna valor declarado.
     *
     * @return  string
     */
    public function getValorDeclarado()
    {
        return $this->valorDeclarado;
    }

    /**
     * Define valor declarado.
     *
     * @param  string  $valorDeclarado  Valor Declarado
     *
     * @return self
     */
    public function setValorDeclarado($valorDeclarado)
    {
        $this->valorDeclarado = $valorDeclarado;

        return $this;
    }

    /**
     * Retorna serviços adicionais.
     *
     * @return  string
     */
    public function getAdicionaisVolume()
    {
        return $this->adicionaisVolume;
    }

    /**
     * Define serviços adicionais.
     *
     * @param  string  $adicionaisVolume  Adicionais Volume
     *
     * @return self
     */
    public function setAdicionaisVolume($adicionaisVolume)
    {
        $this->adicionaisVolume = $adicionaisVolume;

        return $this;
    }

    /**
     * Retorna código da etiqueta.
     *
     * @return  string
     */
    public function getEtiqueta()
    {
        return $this->etiqueta;
    }

    /**
     * Define código da etiqueta.
     *
     * @param  string  $etiqueta  Etiqueta
     *
     * @return self
     */
    public function setEtiqueta($etiqueta)
    {
        $this->etiqueta = $etiqueta;

        return $this;
    }

    /**
     * Retorna valor do serviço.
     *
     * @return  float
     */
    public function getValorTarifa()
    {
        return $this->valorTarifa;
    }

    /**
     * Define valor do serviço.
     *
     * @param  float  $valorTarifa  Valor Tarifa
     *
     * @return self
     */
    public function setValorTarifa($valorTarifa)
    {
        $this->valorTarifa = $valorTarifa;

        return $this;
    }

    /**
     * Retorna valor dos serviços adicionais.
     *
     * @return  float
     */
    public function getValorAdicionais()
    {
        return $this->ValorAdicionais;
    }

    /**
     * Define valor dos serviços adicionais.
     *
     * @param  float  $ValorAdicionais  Valor Adicionais
     *
     * @return self
     */
    public function setValorAdicionais($ValorAdicionais)
    {
        $this->ValorAdicionais = $ValorAdicionais;

        return $this;
    }

    /**
     * Retorna valor total da postagem.
     *
     * @return  float
     */
    public function getValorPostagem()
    {
        return $this->valorPostagem;
    }

    /**
     * Define valor total da postagem.
     *
     * @param  float  $valorPostagem  Valor Postagem
     *
     * @return self
     */
    public function setValorPostagem($valorPostagem)
    {
        $this->valorPostagem = $valorPostagem;

        return $this;
    }

    /**
     * Retorna entrega aos sábados.
     *
     * @return  boolean
     */
    public function getEntregaSabado()
    {
        return $this->entregaSabado;
    }

    /**
     * Define entrega aos sábados.
     *
     * @param  boolean  $entregaSabado  Entrega Sabado
     *
     * @return self
     */
    public function setEntregaSabado($entregaSabado)
    {
        $this->entregaSabado = $entregaSabado;

        return $this;
    }

    /**
     * Retorna entrega domiciliar.
     *
     * @return  boolean
     */
    public function getEntregaDomiciliar()
    {
        return $this->entregaDomiciliar;
    }

    /**
     * Define entrega domiciliar.
     *
     * @param  boolean  $entregaDomiciliar  Entrega Domiciliar
     *
     * @return self
     */
    public function setEntregaDomiciliar($entregaDomiciliar)
    {
        $this->entregaDomiciliar = $entregaDomiciliar;

        return $this;
    }

    /**
     * Retorna prazo de entrega da postagem em dias úteis.
     *
     * @return  string
     */
    public function getPrazo()
    {
        return $this->prazo;
    }

    /**
     * Define prazo de entrega da postagem em dias úteis.
     *
     * @param  string  $prazo  Prazo
     *
     * @return self
     */
    public function setPrazo($prazo)
    {
        $this->prazo = $prazo;

        return $this;
    }
}
