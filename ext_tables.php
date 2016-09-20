<?php

// Checks the TYPO3 context
if( !defined( 'TYPO3_MODE' ) ) {

    // TYPO3 context cannot be guessed
    die( 'Access denied.' );
}

// Adds the static TS template
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'static/', 'Page JavaScript Selector' );
