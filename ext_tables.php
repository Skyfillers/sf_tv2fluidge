<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'TemplaVoila Toolbox');

if (TYPO3_MODE === 'BE') {

	/**
	 * Registers a Backend Module
	 */
	Tx_Extbase_Utility_Extension::registerModule(
		$_EXTKEY,
		'web', // Make module a submodule of 'web'
		'sf_tv2fluidge', // Submodule key
		'', // Position
		array(
			'Tv2fluidge' => 'index,indexDeleteUnreferencedElements,deleteUnreferencedElements,indexConvertReferenceElements,convertReferenceElements,indexMigrateFce,migrateFce,indexMigrateContent,migrateContent,indexConvertMultilangContent,convertMultilangContent,indexFixSorting,fixSorting',
		),
		array(
			'access' => 'user,group',
			'icon'   => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xml',
		)
	);

}

?>