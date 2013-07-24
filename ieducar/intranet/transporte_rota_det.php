<?php

/**
 * i-Educar - Sistema de gest�o escolar
 *
 * Copyright (C) 2006  Prefeitura Municipal de Itaja�
 *                     <ctima@itajai.sc.gov.br>
 *
 * Este programa � software livre; voc� pode redistribu�-lo e/ou modific�-lo
 * sob os termos da Licen�a P�blica Geral GNU conforme publicada pela Free
 * Software Foundation; tanto a vers�o 2 da Licen�a, como (a seu crit�rio)
 * qualquer vers�o posterior.
 *
 * Este programa � distribu��do na expectativa de que seja �til, por�m, SEM
 * NENHUMA GARANTIA; nem mesmo a garantia impl��cita de COMERCIABILIDADE OU
 * ADEQUA��O A UMA FINALIDADE ESPEC�FICA. Consulte a Licen�a P�blica Geral
 * do GNU para mais detalhes.
 *
 * Voc� deve ter recebido uma c�pia da Licen�a P�blica Geral do GNU junto
 * com este programa; se n�o, escreva para a Free Software Foundation, Inc., no
 * endere�o 59 Temple Street, Suite 330, Boston, MA 02111-1307 USA.
 *
 * @author    Lucas Schmoeller da Silva <lucas@portabilis.com.br>
 * @category  i-Educar
 * @license   @@license@@
 * @package   Module
 * @since     07/2013
 * @version   $Id$
 */

require_once 'include/clsBase.inc.php';
require_once 'include/clsDetalhe.inc.php';
require_once 'include/clsBanco.inc.php';
require_once 'include/pmieducar/geral.inc.php';
require_once 'include/modules/clsModulesRotaTransporteEscolar.inc.php';

require_once 'Portabilis/Date/Utils.php';
require_once 'Portabilis/View/Helper/Application.php';


/**
 * clsIndexBase class.
 *
 * @author    Prefeitura Municipal de Itaja� <ctima@itajai.sc.gov.br>
 * @category  i-Educar
 * @license   @@license@@
 * @package   iEd_Pmieducar
 * @since     Classe dispon�vel desde a vers�o 1.0.0
 * @version   @@package_version@@
 */
class clsIndexBase extends clsBase
{
  function Formular()
  {
    $this->SetTitulo($this->_instituicao . ' i-Educar - Rotas');
    $this->processoAp = 578;
  }
}

/**
 * indice class.
 *
 * @author    Prefeitura Municipal de Itaja� <ctima@itajai.sc.gov.br>
 * @category  i-Educar
 * @license   @@license@@
 * @package   iEd_Pmieducar
 * @since     Classe dispon�vel desde a vers�o 1.0.0
 * @version   @@package_version@@
 */
class indice extends clsDetalhe
{
  var $titulo;

  function Gerar()
  {
    @session_start();
    $this->pessoa_logada = $_SESSION['id_pessoa'];
    session_write_close();

    // Verifica��o de permiss�o para cadastro.
    $this->obj_permissao = new clsPermissoes();

    $this->nivel_usuario = $this->obj_permissao->nivel_acesso($this->pessoa_logada);

    $this->titulo = 'Rota - Detalhe';
    $this->addBanner('imagens/nvp_top_intranet.jpg', 'imagens/nvp_vert_intranet.jpg', 'Intranet');

    $cod_rota_transporte_escolar = $_GET['cod_rota'];

    $tmp_obj = new clsModulesRotaTransporteEscolar($cod_rota_transporte_escolar);
    $registro = $tmp_obj->detalhe();

    if (! $registro) {
      header('Location: transporte_rota_lst.php');
      die();
    }

    $this->addDetalhe( array("Ano", $registro['ano']) );
    $this->addDetalhe( array("C�digo da rota", $cod_rota_transporte_escolar));
    $this->addDetalhe( array("Descri��o", $registro['descricao']) );
    $this->addDetalhe( array("Destino", $registro['nome_destino']));
    $this->addDetalhe( array("Empresa", $registro['nome_empresa']));
    $this->addDetalhe( array("Tipo da rota", ($registro['tipo_rota'] == 'U' ? 'Urbana' : 'Rural' )));
    if (trim($registro['km_pav'])!='')
      $this->addDetalhe( array("Percurso pavimentado", $registro['km_pav'].' km'));
    if (trim($registro['km_npav'])!='')
      $this->addDetalhe( array("Percurso n�o pavimentado", $registro['km_npav'].' km'));

    $this->addDetalhe( array("Tercerizado", ($registro['tipo_rota'] == 'S' ? 'Sim' : 'N�o' )));
    $this->url_novo = "../module/TransporteEscolar/Veiculo";
    $this->url_editar = "../module/TransporteEscolar/Rota?id={$cod_rota_transporte_escolar}";
    $this->url_cancelar = "transporte_rota_lst.php";

    $this->largura = "100%";
  }
}

// Instancia o objeto da p�gina
$pagina = new clsIndexBase();

// Instancia o objeto de conte�do
$miolo = new indice();

// Passa o conte�do para a p�gina
$pagina->addForm($miolo);

// Gera o HTML
$pagina->MakeAll();
