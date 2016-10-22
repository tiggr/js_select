<?php

// Temporary TCA
$tempColumns = array(
    'tx_jsselect_javascripts' => array(
        'exclude' => 1,
        'label'   => 'LLL:EXT:js_select/locallang_db.php:pages.tx_jsselect_javascripts',
        'config'  => array(
            'type'          => 'select',
            'items'         => array(),
            'itemsProcFunc' => 'tx_jsselect_handleJavascripts->main',
            'size'          => 10,
            'maxitems'      => 10,
        )
    ),
    'tx_jsselect_inheritance' => array(
        'exclude' => 1,
        'label'   => 'LLL:EXT:js_select/locallang_db.php:pages.tx_jsselect_inheritance',
        'config'  => array(
            'type'          => 'select',
            'items'         => array(
                array(
                    'LLL:EXT:js_select/locallang_db.php:pages.tx_jsselect_inheritance.I.0',
                    0
                ),
                array(
                    'LLL:EXT:js_select/locallang_db.php:pages.tx_jsselect_inheritance.I.1',
                    1
                ),
                array(
                    'LLL:EXT:js_select/locallang_db.php:pages.tx_jsselect_inheritance.I.2',
                    2
                )
            ),
            'size'          => 1,
            'maxitems'      => 1
        )
    )
);

// Adds the fields to the 'pages' TCA
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns( 'pages', $tempColumns);

// Adds the fields to all types of the 'pages' table
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes( 'pages', 'tx_jsselect_javascripts;;;;1-1-1, tx_jsselect_inheritance' );
