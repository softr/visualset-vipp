<?php
namespace Softr\Vipp\Adapter;

/**
 * Configuration Interface
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
interface ConfigInterface
{
    /**
     * Retorna usuário de acesso.
     *
     * @return  string
     */
    public function getUsuario();

    /**
     * Retorna token de acesso.
     *
     * @return  string
     */
    public function getToken();

    /**
     * Retorna código do perfil.
     *
     * @return  string
     */
    public function getPerfil();

    /**
     * Retorna número do contrato ECT.
     *
     * @return  string
     */
    public function getNumeroContrato();

    /**
     * Retorna número do cartão ECT.
     *
     * @return  string
     */
    public function getNumeroCartao();

    /**
     * Retorna código administrativo ECT.
     *
     * @return  string
     */
    public function getCodigoAdministrativo();
}