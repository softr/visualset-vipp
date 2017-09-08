<?php
namespace Softr\Vipp\Model;

/**
 * Destinatario Model
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
class Destinatario extends \Softr\Vipp\Core\Model\AbstractModel
{
    /**
     * CNPJ/CPF do destinatário.
     *
     * @var  string
     */
    protected $cnpjCpf;

    /**
     * Inscrição Estadual ou RG.
     *
     * @var  string
     */
    protected $ieRg;

    /**
     * Nome do Destinatário
     *
     * @var  string
     */
    protected $nome;

    /**
     * Endereço Logradouro.
     *
     * @var  integer
     */
    protected $endereco;

    /**
     * Número do endereço.
     *
     * @var  string
     */
    protected $numero;

    /**
     * Complemento do endereço.
     *
     * @var  string
     */
    protected $complemento;

    /**
     * Bairro do endereço.
     *
     * @var  string
     */
    protected $bairro;

    /**
     * Cidade do endereço.
     *
     * @var  string
     */
    protected $cidade;

    /**
     * Sigla do Estado.
     *
     * @var  string
     */
    protected $uf;

    /**
     * CEP do Destinatário.
     *
     * @var  string
     */
    protected $cep;

    /**
     * Telefone.
     *
     * @var  string
     */
    protected $telefone;

    /**
     * Celular.
     *
     * @var  string
     */
    protected $celular;

    /**
     * Email do destinatário.
     *
     * @var  string
     */
    protected $email;

    /**
     * Retorna CNPJ/CPF do destinatário.
     *
     * @return  string
     */
    public function getCnpjCpf()
    {
        return $this->cnpjCpf;
    }

    /**
     * Define CNPJ/CPF do destinatário.
     *
     * @param  string  $cnpjCpf  CNPJ/CPF do destinatário.
     *
     * @return self
     */
    public function setCnpjCpf($cnpjCpf)
    {
        $this->cnpjCpf = $cnpjCpf;

        return $this;
    }

    /**
     * Retorna Inscrição Estadual ou RG.
     *
     * @return  string
     */
    public function getIeRg()
    {
        return $this->ieRg;
    }

    /**
     * Define Inscrição Estadual ou RG.
     *
     * @param  string  $ieRg  Inscrição Estadual ou RG.
     *
     * @return self
     */
    public function setIeRg($ieRg)
    {
        $this->ieRg = $ieRg;

        return $this;
    }

    /**
     * Retorna Nome do Destinatário.
     *
     * @return  string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Define Nome do Destinatário.
     *
     * @param  string  $nome  Nome do Destinatário.
     *
     * @return self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Retorna Endereço Logradouro.
     *
     * @return  integer
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Define Endereço Logradouro.
     *
     * @param  integer  $endereco  Endereço Logradouro.
     *
     * @return self
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Retorna Número do endereço.
     *
     * @return  string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Define Número do endereço.
     *
     * @param  string  $numero  Número do endereço.
     *
     * @return self
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Retorna Complemento do endereço.
     *
     * @return  string
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * Define Complemento do endereço.
     *
     * @param  string  $complemento  Complemento do endereço.
     *
     * @return self
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;

        return $this;
    }

    /**
     * Retorna Bairro do endereço.
     *
     * @return  string
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Define Bairro do endereço.
     *
     * @param  string  $bairro  Bairro do endereço.
     *
     * @return self
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Retorna Cidade do endereço.
     *
     * @return  string
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Define Cidade do endereço.
     *
     * @param  string  $cidade  Cidade do endereço.
     *
     * @return self
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Retorna Sigla do Estado.
     *
     * @return  string
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Define Sigla do Estado.
     *
     * @param  string  $uf  Sigla do Estado.
     *
     * @return self
     */
    public function setUf($uf)
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Retorna CEP do Destinatário.
     *
     * @return  string
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Define CEP do Destinatário.
     *
     * @param  string  $cep  CEP do Destinatário.
     *
     * @return self
     */
    public function setCep($cep)
    {
        $this->cep = preg_replace('/\D/', '', $cep);

        return $this;
    }

    /**
     * Retorna Telefone.
     *
     * @return  string
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Define Telefone.
     *
     * @param  string  $telefone  Telefone.
     *
     * @return self
     */
    public function setTelefone($telefone)
    {
        $this->telefone = preg_replace('/\D/', '', $telefone);

        return $this;
    }

    /**
     * Retorna Celular.
     *
     * @return  string
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Define Celular.
     *
     * @param  string  $celular  Celular.
     *
     * @return self
     */
    public function setCelular($celular)
    {
        $this->celular = preg_replace('/\D/', '', $celular);

        return $this;
    }

    /**
     * Retorna Email do destinatário.
     *
     * @return  string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Define Email do destinatário.
     *
     * @param  string  $email  Email do destinatário.
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}
