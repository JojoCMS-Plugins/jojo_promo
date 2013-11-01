<?php
/**
 *
 * Copyright 2007 Michael Cochrane <code@gardyneholt.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Michael Cochrane <code@gardyneholt.co.nz>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 */

$_options[] = array(
    'id' => 'promos_num',
    'category' => 'Promos',
    'label' => 'Number of promos',
    'description' => 'The maximum number of promos to supply. Use -1 for all.',
    'type' => 'integer',
    'default' => 3,
    'options' => '',
    'plugin' => 'jojo_promo'
);

$_options[] = array(
    'id' => 'promos_random',
    'category' => 'Promos',
    'label' => 'Shuffle promos',
    'description' => 'If yes, the promos will be shuffled before being displayed. otherwise they will be display according to displayorder.',
    'type' => 'radio',
    'default' => 'yes',
    'options' => 'yes,no',
    'plugin' => 'jojo_promo'
);
