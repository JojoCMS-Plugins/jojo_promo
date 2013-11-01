<?php
/**
 *                    Jojo CMS
 *                ================
 *
 * Copyright 2007-2008 Harvey Kane <code@ragepank.com>
 * Copyright 2007-2008 Michael Holt <code@gardyneholt.co.nz>
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

$table = 'promo';
$o = 1;

$default_td[$table]['td_displayfield']  = 'title';
$default_td[$table]['td_rolloverfield'] = '';
$default_td[$table]['td_orderbyfields'] = 'displayorder';
$default_td[$table]['td_topsubmit']     = 'yes';
$default_td[$table]['td_deleteoption']  = 'yes';
$default_td[$table]['td_menutype']      = 'list';
$default_td[$table]['td_categoryfield'] = '';
$default_td[$table]['td_categorytable'] = '';
$default_td[$table]['td_help']          = '';

/* Event ID */
$field = 'promoid';
$default_fd[$table][$field]['fd_order'] = $o++;
$default_fd[$table][$field]['fd_type']  = 'readonly';
$default_fd[$table][$field]['fd_help']  = 'A unique ID, automatically assigned by the system';

/* Title */
$field = 'title';
$default_fd[$table][$field]['fd_order']    = $o++;
$default_fd[$table][$field]['fd_type']     = 'text';
$default_fd[$table][$field]['fd_required'] = 'yes';
$default_fd[$table][$field]['fd_size']     = '50';
$default_fd[$table][$field]['fd_help']     = 'The sponsor name';


// Image Field
$default_fd['promo']['image'] = array(
        'fd_name' => "Image",
        'fd_type' => "fileupload",
        'fd_help' => "An image for the promo",
        'fd_order' => $o++,
        'fd_mode' => "standard"
    );

// Content Field
$default_fd['promo']['description'] = array(
        'fd_name' => "Content",
        'fd_type' => "texteditor",
        'fd_options' => "description_code",
        'fd_rows' => "10",
        'fd_cols' => "50",
        'fd_help' => "The full text for the promo.",
        'fd_order' => $o++
    );


// Code Field
$default_fd['promo']['description_code'] = array(
        'fd_name' => "Body",
        'fd_type' => "hidden",
        'fd_order' => $o++
    );

/* URL */
$field = 'link';
$default_fd[$table][$field]['fd_order']    = $o++;
$default_fd[$table][$field]['fd_type']     = 'internalurl';
$default_fd[$table][$field]['fd_name']     = 'More info link';
$default_fd[$table][$field]['fd_required'] = 'no';
$default_fd[$table][$field]['fd_size']     = '30';
$default_fd[$table][$field]['fd_help']     = 'Web link';

/* Link Title */
$field = 'linktext';
$default_fd[$table][$field]['fd_order']    = $o++;
$default_fd[$table][$field]['fd_type']     = 'text';
$default_fd[$table][$field]['fd_required'] = 'no';
$default_fd[$table][$field]['fd_size']     = '80';
$default_fd[$table][$field]['fd_help']     = 'Text to use for the link button';

//Order
$field = 'displayorder';
$default_fd[$table][$field]['fd_order'] = $o++;
$default_fd[$table][$field]['fd_name'] = 'Display Order';
$default_fd[$table][$field]['fd_type'] = 'integer';
$default_fd[$table][$field]['fd_help'] = 'optional - only applied if random order option disabled';
$default_fd[$table][$field]['fd_mode'] = 'standard';
$default_fd[$table][$field]['fd_required'] = 'no';

// Active
$default_fd['promo']['active'] = array(
        'fd_name' => "Active",
        'fd_type' => "yesno",
        'fd_required' => "no",
        'fd_default' => "1",
        'fd_order' => $o++
    );


