<?php
namespace Softr\Vipp\Api;

use Softr\Vipp\Core\Collection;
use Softr\Vipp\Model\ContratoEct;
use Softr\Vipp\Model\Destinatario;
use Softr\Vipp\Model\NotaFiscal;
use Softr\Vipp\Model\Volume;
use Softr\Vipp\Model\Postagem as PostagemModel;

/**
 * Postagem Endpoint
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
class Postagem extends \Softr\Vipp\Core\Api\AbstractApi
{
    /**
     * Postar Objeto
     *
     * @param   array  $dados  Dados da postagem
     * @return  PostagemModel
     */
    public function postarObjeto($dados)
    {
        try {

            // Complementar dados do usuário
            $dados['PerfilVipp'] =
            [
                'Usuario'  => $this->config->getUsuario(),
                'Token'    => $this->config->getToken(),
                'IdPerfil' => $this->config->getPerfil(),
            ];

            $dados['ContratoEct'] =
            [
                'NrContrato'           => $this->config->getNumeroContrato(),
                'CodigoAdministrativo' => $this->config->getCodigoAdministrativo(),
                'NrCartao'             => $this->config->getNumeroCartao(),
            ];

            $result = $this->client->PostarObjeto(['PostagemVipp' => $dados]);

            $result = simplexml_load_string($result->PostarObjetoResult->any);
        } catch (Exception $e) {
            return false;
        }

        // Contrato ECT
        $contratoEct = new ContratoEct();

        if (property_exists($result, 'ContratoEct')) {
            $contratoEct->setNumeroContrato($result->ContratoEct->NrContrato->__toString())
                        ->setNumeroCartao($result->ContratoEct->NrCartao->__toString())
                        ->setCodigoAdministrativo($result->ContratoEct->CodigoAdministrativo->__toString());
        }

        // Destinatario
        $destinatario = new Destinatario();

        if (property_exists($result, 'Destinatario')) {
            $destinatario->setCnpjCpf($result->Destinatario->CnpjCpf->__toString())
                         ->setIeRg($result->Destinatario->IeRg->__toString())
                         ->setNome($result->Destinatario->Nome->__toString())
                         ->setEndereco($result->Destinatario->Endereco->__toString())
                         ->setNumero($result->Destinatario->Numero->__toString())
                         ->setComplemento($result->Destinatario->Complemento->__toString())
                         ->setBairro($result->Destinatario->Bairro->__toString())
                         ->setCidade($result->Destinatario->Cidade->__toString())
                         ->setUf($result->Destinatario->UF->__toString())
                         ->setCep($result->Destinatario->Cep->__toString())
                         ->setTelefone($result->Destinatario->Telefone->__toString())
                         ->setCelular($result->Destinatario->TelefoneSMS->__toString())
                         ->setEmail($result->Destinatario->Email->__toString());
        }

        // Array de notas fiscais
        $notasFiscais = new Collection();

        if ($result->NotasFiscais->NotaFiscal) {
            $notaFiscal = new NotaFiscal();

            $notaFiscal->setData($result->NotasFiscais->NotaFiscal->DtNotaFiscal->__toString())
                       ->setSerie($result->NotasFiscais->NotaFiscal->SerieNotaFiscal->__toString())
                       ->setNumero($result->NotasFiscais->NotaFiscal->NrNotaFiscal->__toString())
                       ->setValor($result->NotasFiscais->NotaFiscal->VlrTotalNota->__toString());

            $notasFiscais->addItem($notaFiscal);
        }

        // Array de volumes
        $volumes = new Collection();

        if ($result->Volumes->VolumeObjeto) {
            $volume = new Volume();

            $volume->setPeso($result->Volumes->VolumeObjeto->Peso->__toString())
                   ->setCubagem($result->Volumes->VolumeObjeto->Cubagem->__toString())
                   ->setAltura($result->Volumes->VolumeObjeto->Altura->__toString())
                   ->setLargura($result->Volumes->VolumeObjeto->Largura->__toString())
                   ->setComprimento($result->Volumes->VolumeObjeto->Comprimento->__toString())
                   ->setCodigoBarraVolume($result->Volumes->VolumeObjeto->CodigoBarraVolume->__toString())
                   ->setCodigoBarraCliente($result->Volumes->VolumeObjeto->CodigoBarraCliente->__toString())
                   ->setObservacaoVisual($result->Volumes->VolumeObjeto->ObservacaoVisual->__toString())
                   ->setPosicaoVolume($result->Volumes->VolumeObjeto->PosicaoVolume->__toString())
                   ->setConteudo($result->Volumes->VolumeObjeto->Conteudo->__toString())
                   ->setValorDeclarado($result->Volumes->VolumeObjeto->ValorDeclarado->__toString())
                   ->setAdicionaisVolume($result->Volumes->VolumeObjeto->AdicionaisVolume->__toString())
                   ->setEtiqueta($result->Volumes->VolumeObjeto->Etiqueta->__toString())
                   ->setValorTarifa($result->Volumes->VolumeObjeto->ValorTarifa->__toString())
                   ->setValorAdicionais($result->Volumes->VolumeObjeto->ValorAdicionais->__toString())
                   ->setValorPostagem($result->Volumes->VolumeObjeto->ValorPostagem->__toString())
                   ->setEntregaSabado($result->Volumes->VolumeObjeto->StEntregaSabado->__toString())
                   ->setEntregaDomiciliar($result->Volumes->VolumeObjeto->StEntregaDomiciliar->__toString())
                   ->setPrazo($result->Volumes->VolumeObjeto->DiasUteisPrazo->__toString());

            $volumes->addItem($volume);
        }

        // Objeto Postagem
        $postagem = new PostagemModel();

        $postagem->setServico($result->Servico->ServicoECT->__toString())
                 ->setContratoEct($contratoEct)
                 ->setDestinatario($destinatario)
                 ->setStatusPostagem($result->StatusPostagem->__toString())
                 ->setNotasFiscais($notasFiscais)
                 ->setVolumes($volumes);

        return $postagem;
    }
}