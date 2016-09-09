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
            $result = $this->client->ListarRastreioObjeto(array(
                'NrEtiquetaPostagem' => $numeroEtiqueta,
                'IdConhecimento'     => $idConhecimento
            ));

            $result = $result->ListarRastreioObjetoResult;
        } catch (Exception $e) {
            return false;
        }

        // Objeto não encontrado
        if ($result->IdConhecimento < 1) {
            return false;
        }

        // Array de eventos
        $eventos = new Collection();

        if(property_exists($result->EventoRastreio, 'EventoRastreio') && is_array($result->EventoRastreio->EventoRastreio))
        {
            foreach($result->EventoRastreio->EventoRastreio as $er)
            {
                $evento = new EventoRastreioModel();

                $evento->setIdVolume($er->EtiquetaPostagem)
                         ->setIdEvento($er->IdConhecimento)
                         ->setTipo($er->DtPostagem)
                         ->setIdStatus($er->IdUltimoStatus)
                         ->setDescricao($er->IdGrupoStatusEvento)
                         ->setData($er->NomeGrupo)
                         ->setNomeGrupo($er->IdStatusEntrega)
                         ->setCodigoEdi($er->StPI)

                         // Origem
                         ->setIdLocal($er->StPI)
                         ->setLocal($er->StPI)
                         ->setTipoEndereco($er->StPI)
                         ->setEndereco($er->StPI)
                         ->setComplemento($er->StPI)
                         ->setBairro($er->StPI)
                         ->setCidade($er->StPI)
                         ->setUf($er->StPI)
                         ->setSto($er->StPI)

                         // Destino
                         ->setIdLocalDestino($er->StPI)
                         ->setDestino($er->StPI)
                         ->setTipoEnderecoDestino($er->StPI)
                         ->setEnderecoDestino($er->StPI)
                         ->setComplementoDestino($er->StPI)
                         ->setBairroDestino($er->StPI)
                         ->setCidadeDestino($er->StPI)
                         ->setUfDestino($er->StPI)
                         ->setStoDestino($er->StPI)

                         // Dados do recebedor
                         ->setNomeRecebedor($er->StPI)
                         ->setDocumentoRecebedor($er->StPI)
                         ->setObsRecebedor($er->StPI);

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
                 ->setNomeGrupo($result->NomeGrupo)
                 ->setStatusEntrega($result->IdStatusEntrega)
                 ->setIdAoRemetente($result->IdAoRemetente)
                 ->setPi($result->StPI)
                 ->setConhecimento($result->StConhecimento)
                 ->setEventos($eventos);

        return $rastreio;
    }
}