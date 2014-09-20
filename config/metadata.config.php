<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

return array(
    'name'    => 'Bespoke',
    'version' => '5.0 (Elche)',
    'provider' => array(
        'name' => 'Fumito MIZUNO',
    ),
    'namespace' => 'Nos\Bespoke',
    'launchers' => array(
    ),
    'enhancers' => array(
    ),
    'templates' => array(
        'bespoke_presen' => array(
            'file' => 'bespoke::presen',
            'title' => 'Bespoke Presentation',
            'cols' => 1,
            'rows' => 1,
            'layout' => array(
                'content' => '0,0,1,1',
            ),
            'module' => '',
        ),
    ),
);
