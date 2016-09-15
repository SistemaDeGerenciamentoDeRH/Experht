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
 * Strings for component 'cachestore_memcached', language 'pt_br', branch 'MOODLE_26_STABLE'
 *
 * @package   cachestore_memcached
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['hash'] = 'Método Hash';
$string['hash_crc'] = 'CRC';
$string['hash_default'] = 'Padrão (one-at-a-time)';
$string['hash_fnv1_32'] = 'FNV1_32';
$string['hash_fnv1_64'] = 'FNV1_64';
$string['hash_fnv1a_32'] = 'FNV1A_32';
$string['hash_fnv1a_64'] = 'FNV1A_64';
$string['hash_md5'] = 'MD5';
$string['prefix'] = 'Tecla de prefixo';
$string['servers'] = 'Servidores';
$string['servers_help'] = 'Isso define os servidores que devem ser utilizados por este adaptador memcached. Servidores devem ser definidos por uma linha e constituído por um endereço de servidor e, opcionalmente, uma porta e peso. Se nenhuma porta é fornecida será utilizada a porta padrão (11211).

Por exemplo:

<pre>
server.url.com
ipaddress:port
servername:port:weight
</pre>';
$string['testservers'] = 'Servidores de teste';
$string['usecompression'] = 'Usar compressão';
$string['useserialiser'] = 'Usar serializador';
