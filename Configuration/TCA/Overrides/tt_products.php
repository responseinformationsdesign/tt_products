<?php

if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$table = 'tt_products';
$bSelectTaxMode = FALSE;

if (
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded(STATIC_INFO_TABLES_TAXES_EXT)
) {
	$eInfo = tx_div2007_alpha5::getExtensionInfo_fh003(STATIC_INFO_TABLES_TAXES_EXT);

	if (is_array($eInfo)) {
		$sittVersion = $eInfo['version'];
		if (version_compare($sittVersion, '0.3.0', '>=')) {
			$bSelectTaxMode = TRUE;
		}
	}
}


if ($bSelectTaxMode) {
	$whereTaxCategory = \TYPO3\CMS\Backend\Utility\BackendUtility::BEenableFields('static_tax_categories');

	$temporaryColumns = array (
		'tax_id' => array (
			'exclude' => 0,
			'label' => 'LLL:EXT:' . STATIC_INFO_TABLES_TAXES_EXT . '/locallang_db.xml:static_taxes.tx_rate_id',
			'config' => array (
				'type' => 'select',
				'renderType' => 'selectSingle',
				'items' => array (
					array('LLL:EXT:' . STATIC_INFO_TABLES_TAXES_EXT . '/locallang_db.xml:static_taxes.tx_rate_id.I.0', '0'),
					array('LLL:EXT:' . STATIC_INFO_TABLES_TAXES_EXT . '/locallang_db.xml:static_taxes.tx_rate_id.I.1', '1'),
					array('LLL:EXT:' . STATIC_INFO_TABLES_TAXES_EXT . '/locallang_db.xml:static_taxes.tx_rate_id.I.2', '2'),
					array('LLL:EXT:' . STATIC_INFO_TABLES_TAXES_EXT . '/locallang_db.xml:static_taxes.tx_rate_id.I.3', '3'),
					array('LLL:EXT:' . STATIC_INFO_TABLES_TAXES_EXT . '/locallang_db.xml:static_taxes.tx_rate_id.I.4', '4'),
					array('LLL:EXT:' . STATIC_INFO_TABLES_TAXES_EXT . '/locallang_db.xml:static_taxes.tx_rate_id.I.5', '5'),
				),
			)
		),
	);


	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
		$table,
		$temporaryColumns
	);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
		$table,
		'tax_id,',
		'',
		'after:price,'
	);

	$GLOBALS['TCA'][$table]['interface']['showRecordFieldList'] = str_replace(',tax_id,', ',tax_id,', $GLOBALS['TCA'][$table]['interface']['showRecordFieldList']);
} else {
	$GLOBALS['TCA'][$table]['interface']['showRecordFieldList'] = str_replace(',tax_id,', ',tax,', $GLOBALS['TCA'][$table]['interface']['showRecordFieldList']);
	unset($GLOBALS['TCA'][$table]['columns']['tax_id']);
	$GLOBALS['TCA'][$table]['columns']['tax'] =
		array (
			'exclude' => 1,
			'label' => 'LLL:EXT:' . TT_PRODUCTS_EXT . '/locallang_db.xml:tt_products.tax',
			'config' => array (
				'type' => 'input',
				'size' => '12',
				'max' => '19',
				'eval' => 'trim,double2'
			)
		);

	$GLOBALS['TCA'][$table]['types']['0']['showitem'] = str_replace(',tax_id,', ',tax,', $GLOBALS['TCA'][$table]['types']['0']['showitem']);
}



$excludeArray = $GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][TT_PRODUCTS_EXT]['exclude.'];

if (
	isset($excludeArray) &&
	is_array($excludeArray) &&
	isset($excludeArray[$table])
) {
	\JambageCom\Div2007\Utility\TcaUtility::removeField(
		$GLOBALS['TCA'][$table],
		$excludeArray[$table]
	);
}

