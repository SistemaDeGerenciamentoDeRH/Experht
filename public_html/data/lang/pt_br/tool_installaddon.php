<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_installaddon', language 'pt_br', branch 'MOODLE_26_STABLE'
 *
 * @package   tool_installaddon
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Reconhecimento';
$string['acknowledgementmust'] = 'Você deve reconhecer este';
$string['acknowledgementtext'] = 'Eu entendo que é minha responsabilidade ter backups completos deste site antes de instalar os complementos. Aceito e compreendo que complementos (especialmente, mas não apenas os originários de fontes não oficiais) podem conter falhas de segurança, pode tornar o site indisponível ou causar vazamentos de dados privados ou perda.';
$string['featuredisabled'] = 'O instalador do complemento está desativado neste site.';
$string['installaddon'] = 'Instalar o complemento';
$string['installaddons'] = 'Instalar o complemento';
$string['installexception'] = 'Oops ... Ocorreu um erro ao tentar instalar o complemento. Ative o modo de depuração para ver os detalhes do erro.';
$string['installfromrepo'] = 'Instalar o complemento do diretório Moodle plugins';
$string['installfromzip'] = 'Instalar o complemento do arquivo ZIP';
$string['installfromzipfile'] = 'Pacote ZIP';
$string['installfromziprootdir'] = 'Renomeie o diretório raiz';
$string['installfromzipsubmit'] = 'Instalar o complemento do arquivo ZIP';
$string['installfromziptype'] = 'Tipo de Plugin';
$string['permcheck'] = 'Certifique-se se o tipo de plugin no local raiz é gravável pelo processo do servidor web.';
$string['permcheckerror'] = 'Erro durante a verificação de permissão de gravação';
$string['permcheckprogress'] = 'Verificação de permissão de gravação ...';
$string['permcheckresultno'] = 'Tipo Plugin localização <em>{$a->path}</em> não é gravável';
$string['permcheckresultyes'] = 'Tipo Plugin localização <em>{$a->path}</em> é gravável';
$string['pluginname'] = 'complemento de instalação';
$string['remoterequestalreadyinstalled'] = 'Há um pedido para instalar o complemento {$a->name} ({$a->component}) versão {$a->version} do diretório de plugins Moodle neste site. No entanto, este plugin <strong>já</strong> está <strong>instalado</strong> no site.';
$string['validationmsg_componentmatch'] = 'Nome do componente completo';
$string['validationmsg_filenotexists'] = 'Arquivo extraído não encontrado';
$string['validationmsg_filestatus'] = 'Não foi possível extrair todos os arquivos';
$string['validationmsglevel_debug'] = 'Debug';
$string['validationmsglevel_error'] = 'Erro';
$string['validationmsglevel_info'] = 'OK';
$string['validationmsglevel_warning'] = 'Atenção';
$string['validationmsg_maturity'] = 'Nível de maturidade declarada';
$string['validationmsg_missinglangenfile'] = 'Nenhum arquivo de idioma Inglês encontrado';
$string['validationmsg_missinglangenfolder'] = 'Faltando pasta do idioma Inglês';
$string['validationmsg_missingversionphp'] = 'Arquivo Version.php não encontrado';
$string['validationmsg_multiplelangenfiles'] = 'Vários arquivos de língua inglesa encontrados';
$string['validationmsg_onedir'] = 'Estrutura inválida do pacote ZIP.';
$string['validationmsg_pathwritable'] = 'Escrever acessar verificar';
$string['validationmsg_requiresmoodle'] = 'Versão Moodle Obrigatório';
$string['validationmsg_rootdir'] = 'Nome do complemento para ser instalado';
$string['validationmsg_rootdirinvalid'] = 'Nome do complemento Inválido';
$string['validationmsg_targetexists'] = 'Local de destino já existe';
$string['validationmsg_targetexists_help'] = 'O diretório que o complemento deve ser instalado, não deve existir ainda.';
$string['validationmsg_unknowntype'] = 'Tipo de plugin desconhecido';
$string['validationresult0'] = 'Validação falhou!';
$string['validationresult1'] = 'Validação passou!';
$string['validationresult1_help'] = 'O pacote de complemento foi validado e nenhum problema grave foi detectado.';
$string['validationresultinfo'] = 'Informações';
$string['validationresultmsg'] = 'Mensagem';
$string['validationresultstatus'] = 'Status';
