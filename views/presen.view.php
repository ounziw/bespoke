<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

\Nos\Nos::main_controller()->addJavascript('static/apps/bespoke/js/bespoke-voltaire.js');
?>
<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>Bespoke.js</title>

</head>
<body class="coverflow">
<div id="main">
    <?php
    // fork from noviusos_templates_basic
    // https://github.com/novius-os/noviusos_templates_basic/blob/master/elche/views/subviews/menu.view.php
    // https://github.com/novius-os/noviusos_templates_basic/blob/master/elche/views/subviews/menu_driver.view.php
    $tpvar = \Nos\Nos::main_controller()->getTemplateVariation();
    $menu = $tpvar->menus->principal;
    if (!empty($menu)) {
    $items = $menu->branch();
    if (count($items)) {
    ?>
    <article>
        <?php
        foreach ($items as $item) {
            echo '<section><div class="bullet"><h2>', e($item->mitem_title), '</h2>', $item->html(), '</div>';

            $subitems = $menu->branch($item);
            if (count($subitems)) {
                foreach ($subitems as $si) {
                    echo '<div class="bullet">', $si->html(), '</div>';
                }
            }

            echo '</section>';
        }
        echo '</article>';
        }
        }


        ?>

</div>

</body>
</html>