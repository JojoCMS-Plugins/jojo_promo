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

$_options[] = array(
    'id' => 'promos_titles',
    'category' => 'Promos',
    'label' => 'Show Titles',
    'description' => 'Display titles before the image, after it, or not at all',
    'type' => 'radio',
    'default' => 'before',
    'options' => 'before,after,none',
    'plugin' => 'jojo_promo'
);

$_options[] = array(
    'id' => 'promos_images',
    'category' => 'Promos',
    'label' => 'Image Size',
    'description' => 'This will control the size of the image in the promo. The letter dictates the shape, "s" for square, "w" for overall width, "h" for overall height. The number is the number of pixels for the give shape.',
    'type' => 'text',
    'default' => 's200',
    'plugin' => 'jojo_promo'
);

$_options[] = array(
    'id' => 'promos_links',
    'category' => 'Promos',
    'label' => 'Link format',
    'description' => 'If open, promo links will need to be full urls (to allow external linking). Links without http are assumed to be internal. Run setup to enable after setting this option',
    'type' => 'radio',
    'default' => 'internal',
    'options' => 'internal,open',
    'plugin' => 'jojo_promo'
);

$_options[] = array(
    'id'          => 'promos_linktext',
    'category'    => 'Promos',
    'label'       => 'Link Text',
    'description' => 'Text to display on the read More link. Set to -1 to disable.',
    'type'        => 'text',
    'default'     => 'Read More',
    'options'     => '',
    'plugin'      => 'jojo_promo'
);

