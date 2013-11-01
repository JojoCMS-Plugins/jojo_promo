<?php
/**
 *                    Jojo CMS
 *                ================
 *
 * Copyright 2007 Harvey Kane <code@ragepank.com>
 * Copyright 2007 Michael Holt <code@gardyneholt.co.nz>
 * Copyright 2007 Melanie Schulz <mel@gardyneholt.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Harvey Kane <code@ragepank.com>
 * @author  Michael Cochrane <code@gardyneholt.co.nz>
 * @author  Melanie Schulz <mel@gardyneholt.co.nz>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 */

class JOJO_Plugin_Jojo_promo extends JOJO_Plugin
{

    public static function getItems()
    {
        $promos = Jojo::selectQuery("SELECT * FROM {promo} WHERE `active`=1 ORDER BY `displayorder`");
        $promos_num = Jojo::getOption('promos_num', 3);
		if (Jojo::getOption('promos_random', 'yes')=='yes') { shuffle($promos); }
        $promos = array_slice($promos, 0, $promos_num);
        foreach ($promos as $i => &$s){
            $s['title'] = htmlspecialchars($s['title'], ENT_COMPAT, 'UTF-8', false);
            $s['linktext'] = htmlspecialchars($s['linktext'], ENT_COMPAT, 'UTF-8', false);
            $s['description'] = $s['description_code'];
            $s['image'] = 'promos/' . $s['image'];
        }

        return $promos;
    }



}