<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');



$TCA['tt_products'] = Array (
	'ctrl' => Array (
		'title' => 'LLL:EXT:tt_products/locallang_tca.php:tt_products',
		'label' => 'title',
		'label_alt' => 'subtitle',
		'default_sortby' => 'ORDER BY title',
		'tstamp' => 'tstamp',
		'prependAtCopy' => 'LLL:EXT:lang/locallang_general.php:LGL.prependAtCopy',
		'delete' => 'deleted',
		'enablecolumns' => Array (
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
			'fe_group' => 'fe_group',
		),
		'thumbnail' => 'image',
		'useColumnsForDefaultValues' => 'category',
		'mainpalette' => 1,
		'iconfile' => PATH_ttproducts_icon_table_rel.'tt_products.gif',
		'dynamicConfigFile' => PATH_BE_ttproducts.'tca.php'
	)
);
$TCA['tt_products_cat'] = Array (
	'ctrl' => Array (
		'title' => 'LLL:EXT:tt_products/locallang_tca.php:tt_products_cat',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'delete' => 'deleted',
		'prependAtCopy' => 'LLL:EXT:lang/locallang_general.php:LGL.prependAtCopy',
		'crdate' => 'crdate',
		'title' => 'LLL:EXT:tt_products/locallang_tca.php:tt_products_cat',
		'iconfile' => PATH_ttproducts_icon_table_rel.'tt_products_cat.gif',
		'dynamicConfigFile' => PATH_BE_ttproducts.'tca.php'
	)
);

$TCA['tt_products_language'] = Array (
	'ctrl' => Array (
		'title' => 'LLL:EXT:tt_products/locallang_tca.php:tt_products_language',
		'label' => 'title',
		'default_sortby' => 'ORDER BY title',
		'tstamp' => 'tstamp',
		'delete' => 'deleted',
		'prependAtCopy' => 'LLL:EXT:lang/locallang_general.php:LGL.prependAtCopy',
		'crdate' => 'crdate',
		'title' => 'LLL:EXT:tt_products/locallang_tca.php:tt_products_language',
		'iconfile' => PATH_ttproducts_icon_table_rel.'tt_products_language.gif',
		'dynamicConfigFile' => PATH_BE_ttproducts.'tca.php',
	)
);

$TCA['tt_products_cat_language'] = Array (
	'ctrl' => Array (
		'title' => 'LLL:EXT:tt_products/locallang_tca.php:tt_products_cat_language',
		'label' => 'title',
		'default_sortby' => 'ORDER BY title',
		'tstamp' => 'tstamp',
		'delete' => 'deleted',
		'prependAtCopy' => 'LLL:EXT:lang/locallang_general.php:LGL.prependAtCopy',
		'crdate' => 'crdate',
		'title' => 'LLL:EXT:tt_products/locallang_tca.php:tt_products_cat_language',
		'iconfile' => PATH_ttproducts_icon_table_rel.'tt_products_cat_language.gif',
		'dynamicConfigFile' => PATH_BE_ttproducts.'tca.php',
	),
	'feInterface' => Array (
		'fe_admin_fieldList' => 'hidden,cat_uid, sys_language_uid,title',
	)
);

$TCA['tt_products_articles'] = Array (
	'ctrl' => Array (
		'title' => 'LLL:EXT:tt_products/locallang_tca.php:tt_products_articles',
		'label' => 'title',
		'default_sortby' => 'ORDER BY title',
		'tstamp' => 'tstamp',
		'delete' => 'deleted',
		'prependAtCopy' => 'LLL:EXT:lang/locallang_general.php:LGL.prependAtCopy',
		'crdate' => 'crdate',
		'title' => 'LLL:EXT:tt_products/locallang_tca.php:tt_products_articles',
		'iconfile' => PATH_ttproducts_icon_table_rel.'tt_products_articles.gif',
		'dynamicConfigFile' => PATH_BE_ttproducts.'tca.php',
	),
	'feInterface' => Array (
		'fe_admin_fieldList' => 'hidden,cat_uid, sys_language_uid,title',
	)
);

if ($TYPO3_CONF_VARS['EXTCONF'][TT_PRODUCTS_EXTkey]['useFlexforms']==1) { 
	t3lib_div::loadTCA('tt_content');
	$TCA['tt_content']['types']['list']['subtypes_excludelist']['5']='layout,select_key';
	$TCA['tt_content']['types']['list']['subtypes_addlist']['5']='pi_flexform';
	t3lib_extMgm::addPiFlexFormValue('5', 'FILE:EXT:'.$_EXTKEY.'/flexform_ds_pi.xml');
}
else if ($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['tt_products']['pageAsCategory'] == 1) {
	$tempStr = 'LLL:EXT:tt_products/locallang_tca.php:tt_content.tt_products_code.I.';
	$tempColumns = Array (
		'tt_products_code' => Array (
			'exclude' => 0,
			'label' => 'LLL:EXT:tt_products/locallang_tca.php:tt_content.tt_products_code',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array($tempStr.'0',  'LIST'),
					Array($tempStr.'1',  'LISTOFFERS'),
	                Array($tempStr.'2',  'LISTHIGHLIGHTS'),
	                Array($tempStr.'3',  'LISTNEWITEMS'),
	                Array($tempStr.'4',  'SINGLE'),
	                Array($tempStr.'5',  'SEARCH'),
	                Array($tempStr.'6',  'MEMO'),
	                Array($tempStr.'7',  'BASKET'),
	                Array($tempStr.'8',  'INFO'),
	                Array($tempStr.'9',  'PAYMENT'),
	                Array($tempStr.'10', 'FINALIZE'),
					Array($tempStr.'11', 'OVERVIEW'),
					Array($tempStr.'12', 'TRACKING'),
					Array($tempStr.'13', 'BILL'),
					Array($tempStr.'14', 'DELIVERY'),
					Array($tempStr.'15', 'HELP'),
					Array($tempStr.'16', 'CURRENCY'),
					Array($tempStr.'17', 'ORDERS'),
					Array($tempStr.'18', 'LISTGIFTS'),
				),
			)
		)
	);

	t3lib_div::loadTCA('tt_content');
	t3lib_extMgm::addTCAcolumns('tt_content',$tempColumns,1);
	$TCA['tt_content']['types']['list']['subtypes_excludelist']['5']='layout,select_key';
	$TCA['tt_content']['types']['list']['subtypes_addlist']['5']='tt_products_code;;;;1-1-1';
}

t3lib_extMgm::addPlugin(Array('LLL:EXT:'.$_EXTKEY.'/locallang_tca.php:tt_content.list_type_pi1','5'),'list_type');
t3lib_extMgm::addPlugin(Array('LLL:EXT:'.$_EXTKEY.'/locallang_tca.php:tt_products', '5'));

t3lib_extMgm::allowTableOnStandardPages('tt_products');

t3lib_extMgm::allowTableOnStandardPages('tt_products_language');
t3lib_extMgm::allowTableOnStandardPages('tt_products_cat');
t3lib_extMgm::allowTableOnStandardPages('tt_products_cat_language');
t3lib_extMgm::allowTableOnStandardPages('tt_products_articles');

//t3lib_extMgm::addToInsertRecords('tt_products');

if (TYPO3_MODE=='BE')	$TBE_MODULES_EXT['xMOD_db_new_content_el']['addElClasses']['tx_ttproducts_wizicon'] = PATH_BE_ttproducts.'class.tx_ttproducts_wizicon.php';


t3lib_extMgm::addLLrefForTCAdescr('tt_products','EXT:tt_products/locallang_csh_ttprod.php');
t3lib_extMgm::addLLrefForTCAdescr('tt_products_cat','EXT:tt_products/locallang_csh_ttprodc.php');
t3lib_extMgm::addLLrefForTCAdescr('tt_products_articles','EXT:tt_products/locallang_csh_ttproda.php');

$tempColumns = Array (
	'tt_products_memoItems' => Array (
		'exclude' => 1,
		'label' => 'LLL:EXT:tt_products/locallang_tca.php:fe_users.tt_products_memoItems',
		'config' => Array (
			'type' => 'input',
			'size' => '10',
			'max' => '256'
		)
	),
	'tt_products_discount' => Array (
		'exclude' => 1,
		'label' => 'LLL:EXT:tt_products/locallang_tca.php:fe_users.tt_products_discount',
		'config' => Array (
			'type' => 'input',
			'size' => '4',
			'max' => '4',
			'eval' => 'int',
			'checkbox' => '0',
			'range' => Array (
				'upper' => '1000',
				'lower' => '10'
			),
			'default' => 0
		)
	),
);
t3lib_div::loadTCA('fe_users');

t3lib_extMgm::addTCAcolumns('fe_users',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('fe_users', 'tt_products_memoItems;;;;1-1-1,tt_products_discount;;;;1-1-1');





?>
