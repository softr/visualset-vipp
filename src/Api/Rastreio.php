<?php
namespace Softr\Vipp\Api;

use Softr\Vipp\Core\Collection;
use Softr\Vipp\Model\Rastreio as RastreioModel;
use Softr\Vipp\Model\EventoRastreio as EventoRastreioModel;

/**
 * Rastreio Endpoint
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
class Rastreio extends \Softr\Vipp\Core\Api\AbstractApi
{
    /**
     * Rastrear objeto
     *
     * @param   string  $numeroEtiqueta  Numero da etiqueta de rastreio
     * @param   string  $idConhecimento  (optional) Id do Conhecimento
     * @return  RastreioModel
     */
    public function rastrearObjeto($numeroEtiqueta, $idConhecimento = '')
    {
        try {

            // Dados do envio
            $dados = [
                'PerfilVipp' => [
                    'Usuario'  => $this->config->getUsuario(),
                    'Token'    => $this->config->getToken(),
                    'IdPerfil' => $this->config->getPerfil(),
                ],
                'NrEtiquetaPostagem' => $numeroEtiqueta,
                'IdConhecimento'     => $idConhecimento,
            ];

            $result = $this->client->ListarRastreioObjeto(['ListarRastreio' => $dados]);

            // Validar resultado
            if (property_exists($result, 'ListarRastreioObjetoResult') == false || property_exists($result->ListarRastreioObjetoResult, 'ObjetoRastreio') == false) {
                return false;
            }

            $result = $result->ListarRastreioObjetoResult->ObjetoRastreio;
        } catch (Exception $e) {
            return false;
        }

        // Objeto não encontrado
        if (property_exists($result, 'IdConhecimento') == false || $result->IdConhecimento < 1) {
            return false;
        }

        // Array de eventos
        $eventos = new Collection();

        if (property_exists($result->EventoRastreio, 'EventoRastreio') && is_array($result->EventoRastreio->EventoRastreio)) {
            foreach ($result->EventoRastreio->EventoRastreio as $er) {
                $evento = new EventoRastreioModel();

                $evento->setIdVolume($er->IdVolumeObjeto)
                         ->setIdEvento($er->IdEventoRastreio)
                         ->setTipo($er->TipoEvento)
                         ->setIdStatus($er->IdStatus)
                         ->setDescricao($er->DescricaoStatusEvento)
                         ->setData($er->DtEventoCompleta)
                         ->setIdGrupoStatus($er->IdGrupoStatusEvento)
                         ->setNomeGrupo($er->NomeGrupoStatusEvento)
                         ->setCodigoEdi($er->CodigoEdi)

                         // Origem
                         ->setIdLocal($er->IdLocalEventoOrigem)
                         ->setLocal($er->LocalEvento)
                         ->setTipoEndereco($er->TipoEndereco)
                         ->setEndereco($er->EnderecoEvento)
                         ->setComplemento($er->ComplementoEnderecoEvento)
                         ->setBairro($er->BairroEvento)
                         ->setCidade($er->CidadeEvento)
                         ->setUf($er->UFEvento)
                         ->setSto($er->STOEvento)

                         // Destino
                         ->setIdLocalDestino($er->IdLocalEventoDestino)
                         ->setDestino($er->Destino)
                         ->setTipoEnderecoDestino($er->TipoEnderecoDestino)
                         ->setEnderecoDestino($er->EnderecoDestino)
                         ->setComplementoDestino($er->ComplementoEnderecoDestino)
                         ->setBairroDestino($er->BairroDestino)
                         ->setCidadeDestino($er->CidadeDestino)
                         ->setUfDestino($er->UFDestino)
                         ->setStoDestino($er->STODestino)

                         // Dados do recebedor
                         ->setNomeRecebedor($er->NomeRecebedor)
                         ->setDocumentoRecebedor($er->DocumentoRecebedor)
                         ->setObsRecebedor($er->ObsRecebedor);

                $eventos->addItem($evento);
            }
        }

        // Objeto Rastreio
        $rastreio = new RastreioModel();

        $rastreio->setEtiquetaPostagem($result->EtiquetaPostagem)
                 ->setIdConhecimento($result->IdConhecimento)
                 ->setDataPostagem($result->DtPostagem)
                 ->setUltimoStatus($result->IdUltimoStatus)
                 ->setGrupoStatusEvento($result->IdGrupoStatusEvento)
                 ->setNomeGrupo($result->NomeGrupoStatusEvento)
                 ->setStatusEntrega($result->IdStatusEntrega)
                 ->setIdAoRemetente($result->IdAoRemetente)
                 ->setPi($result->StPI)
                 ->setConhecimento($result->StConhecimento)
                 ->setEventos($eventos);

        return $rastreio;
    }
}
