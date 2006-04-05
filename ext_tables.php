<?php
if (!defined ('TYPO3_MODE'))	die ('Access denied.');

t3lib_extMgm::addStaticFile(TT_PRODUCTS_EXTkey, 'pi1/static/old_style/', 'Shop System Old Style');
$typoVersion = t3lib_div::int_from_ver($GLOBALS['TYPO_VERSION']); 
		
$TCA['tt_products'] = Array (
	'ctrl' => Array (
		'title' =>'LLL:EXT:'.TT_PRODUCTS_EXTkey.'/locallang_db.xml:tt_products',
		'label' => 'title',
		'label_alt' => 'subtitle',
		'default_sortby' => 'ORDER BY title',
		'tstamp' => 'tstamp',
		'prependAtCopy' => 'LLL:EXT:lang/locallang_general.php:LGL.prependAtCopy',
		'crdate' => 'crdate',
//		'sortby' => 'sorting',
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
		'dynamicConfigFile' => PATH_BE_ttproducts.'tca.php',
		'iconfile' => PATH_ttproducts_icon_table_rel.'tt_products.gif',
		'dividers2tabs' => '1',
	),
	'feInterface' => Array (
		'fe_admin_fieldList' => 'hidden,title,subtitle,itemnumber,price,price2,note,category,inStock,tax,weight,bulkily,offer,highlight,directcost,color,size,description,gradings,unit,unit_factor,www,datasheet,special_preparation,image,hidden,starttime,endtime',
	)
);

$TCA['tt_products_cat'] = Array (
	'ctrl' => Array (
		'title' => 'LLL:EXT:'.TT_PRODUCTS_EXTkey.'/locallang_db.xml:tt_products_cat',
		'label' => 'title',
		'label_alt' => 'subtitle',
		'default_sortby' => 'ORDER BY title',
		'tstamp' => 'tstamp',
		'delete' => 'deleted',
		'prependAtCopy' => 'LLL:EXT:lang/locallang_general.php:LGL.prependAtCopy',
		'crdate' => 'crdate',
//		'sortby' => 'sorting',
		'iconfile' => PATH_ttproducts_icon_table_rel.'tt_products_cat.gif',
		'dynamicConfigFile' => PATH_BE_ttproducts.'tca.php'
	),
	'feInterface' => Array (
		'fe_admin_fieldList' => 'hidden,title,note,image,email',
	)
);


$TCA['tt_products_language'] = Array (
	'ctrl' => Array (
		'title' => 'LLL:EXT:'.TT_PRODUCTS_EXTkey.'/locallang_db.xml:tt_products_language',
		'label' => 'title',
		'default_sortby' => 'ORDER BY title',
		'tstamp' => 'tstamp',
		'delete' => 'deleted',
		'prependAtCopy' => 'LLL:EXT:lang/locallang_general.php:LGL.prependAtCopy',
		'crdate' => 'crdate',
//		'sortby' => 'sorting',
		'iconfile' => PATH_ttproducts_icon_table_rel.'tt_products_language.gif',
		'dynamicConfigFile' => PATH_BE_ttproducts.'tca.php',
	),
	'feInterface' => Array (
		'fe_admin_fieldList' => 'title,subtitle,prod_uid,note,unit,www,datasheet,hidden,starttime,endtime',
	)
);


$TCA['tt_products_cat_language'] = Array (
	'ctrl' => Array (
		'title' => 'LLL:EXT:'.TT_PRODUCTS_EXTkey.'/locallang_db.xml:tt_products_cat_language',
		'label' => 'title',
		'default_sortby' => 'ORDER BY title',
		'tstamp' => 'tstamp',
		'delete' => 'deleted',
		'prependAtCopy' => 'LLL:EXT:lang/locallang_general.php:LGL.prependAtCopy',
		'crdate' => 'crdate',
//		'sortby' => 'sorting',
		'iconfile' => PATH_ttproducts_icon_table_rel.'tt_products_cat_language.gif',
		'dynamicConfigFile' => PATH_BE_ttproducts.'tca.php',
	),
	'feInterface' => Array (
		'fe_admin_fieldList' => 'hidden,cat_uid, sys_language_uid,title',
	)
);

$TCA['tt_products_articles'] = Array (
	'ctrl' => Array (
		'title' => 'LLL:EXT:'.TT_PRODUCTS_EXTkey.'/locallang_db.xml:tt_products_articles',
		'label' => 'title',
		'default_sortby' => 'ORDER BY title',
		'tstamp' => 'tstamp',
		'delete' => 'deleted',
		'prependAtCopy' => 'LLL:EXT:lang/locallang_general.php:LGL.prependAtCopy',
		'crdate' => 'crdate',
//		'sortby' => 'sorting',
		'iconfile' => PATH_ttproducts_icon_table_rel.'tt_products_articles.gif',
		'dynamicConfigFile' => PATH_BE_ttproducts.'tca.php',
	),
	'feInterface' => Array (
		'fe_admin_fieldList' => 'hidden,cat_uid, sys_language_uid,title',
	)
);


$TCA['tt_products_emails'] = Array (
	'ctrl' => Array (
		'title' => 'LLL:EXT:'.TT_PRODUCTS_EXTkey.'/locallang_db.xml:tt_products_emails',
		'label' => 'name',
		'default_sortby' => 'ORDER BY name',
		'tstamp' => 'tstamp',
		'delete' => 'deleted',
		'prependAtCopy' => 'LLL:EXT:lang/locallang_general.php:LGL.prependAtCopy',
		'crdate' => 'crdate',
//		'sortby' => 'sorting',
		'mainpalette' => 1,
		'iconfile' => PATH_ttproducts_icon_table_rel.'tt_products_emails.gif',
		'dynamicConfigFile' => PATH_BE_ttproducts.'tca.php',
	),
	'feInterface' => Array (
		'fe_admin_fieldList' => 'hidden',
	)
);

$TCA['sys_products_orders'] = Array (
	'ctrl' => Array (
		'title' => 'LLL:EXT:'.TT_PRODUCTS_EXTkey.'/locallang_db.xml:sys_products_orders',
		'label' => 'name',
		'default_sortby' => 'ORDER BY name',
		'tstamp' => 'tstamp',
		'delete' => 'deleted',
		'prependAtCopy' => 'LLL:EXT:lang/locallang_general.php:LGL.prependAtCopy',
		'crdate' => 'crdate',
		'mainpalette' => 1,
		'iconfile' => PATH_ttproducts_icon_table_rel.'sys_products_orders.gif',
		'dynamicConfigFile' => PATH_BE_ttproducts.'tca.php',
	),
	'feInterface' => Array (
		'fe_admin_fieldList' => 'hidden',
	)
);



t3lib_div::loadTCA('tt_content');

if ($TYPO3_CONF_VARS['EXTCONF'][TT_PRODUCTS_EXTkey]['useFlexforms']==1)	{
	$TCA['tt_content']['types']['list']['subtypes_excludelist']['5']='layout,select_key';
	$TCA['tt_content']['types']['list']['subtypes_addlist']['5']='pi_flexform';
	t3lib_extMgm::addPiFlexFormValue('5', 'FILE:EXT:'.TT_PRODUCTS_EXTkey.'/flexform_ds_pi1.xml');
} else if ($GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][TT_PRODUCTS_EXTkey]['pageAsCategory'] == 1) {
	//$tempStr = 'LLL:EXT:tt_products/locallang_db.php:tt_content.tt_products_code.I.';
	$tempColumns = Array (
		'tt_products_code' => Array (
			'exclude' => 0,
			'label' => 'LLL:EXT:'.TT_PRODUCTS_EXTkey.'/locallang_db.xml:tt_content.tt_products_code',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('LIST'.			'0',  'LIST'),
					Array('LISTOFFERS'.		'1',  'LISTOFFERS'),
					Array('LISTHIGHLIGHTS'. '2',  'LISTHIGHLIGHTS'),
					Array('LISTNEWITEMS'.	'3',  'LISTNEWITEMS'),
					Array('SINGLE'.			'4',  'SINGLE'),
					Array('SEARCH'.			'5',  'SEARCH'),
					Array('MEMO'.			'6',  'MEMO'),
					Array('BASKET'.			'7',  'BASKET'),
					Array('INFO'.			'8',  'INFO'),
					Array('PAYMENT'.		'9',  'PAYMENT'),
					Array('FINALIZE'.		'10', 'FINALIZE'),
					Array('OVERVIEW'.		'11', 'OVERVIEW'),
					Array('TRACKING'.		'12', 'TRACKING'),
					Array('BILL'.			'13', 'BILL'),
					Array('DELIVERY'.		'14', 'DELIVERY'),
					Array('HELP'.			'15', 'HELP'),
					Array('CURRENCY'.		'16', 'CURRENCY'),
					Array('ORDERS'.			'17', 'ORDERS'),
					Array('LISTGIFTS'.		'18', 'LISTGIFTS'),
					Array('LISTCAT'.		'19', 'LISTCAT'),
					Array('LISTARTICLES'.	'20', 'LISTARTICLES'),
				),
			)
		)
	);

	if ($typoVersion < 3008000)	{
		$tempColumns['tt_products_code']['label'] = 'LLL:EXT:tt_products/locallang_tca.php:tt_content.tt_products_code';
	}
	t3lib_extMgm::addTCAcolumns('tt_content',$tempColumns,1);
	$TCA['tt_content']['types']['list']['subtypes_excludelist']['5']='layout,select_key';
	$TCA['tt_content']['types']['list']['subtypes_addlist']['5']='tt_products_code;;;;1-1-1';
}

if ($typoVersion < 3008000)	{
	
	// overwrite the values for former language files
	$TCA['tt_products']['ctrl']['title'] = 'LLL:EXT:tt_products/locallang_tca.php:tt_products';
	$TCA['tt_products_cat']['ctrl']['title'] = 'LLL:EXT:tt_products/locallang_tca.php:tt_products_cat';
	$TCA['tt_products_language']['ctrl']['title'] = 'LLL:EXT:tt_products/locallang_tca.php:tt_products_language';
	$TCA['tt_products_cat_language']['ctrl']['title'] = 'LLL:EXT:tt_products/locallang_tca.php:tt_products_cat_language';
	$TCA['tt_products_articles']['ctrl']['title'] =  'LLL:EXT:tt_products/locallang_tca.php:tt_products_articles';
	$TCA['tt_products_emails']['ctrl']['title'] =  'LLL:EXT:tt_products/locallang_tca.php:tt_products_emails';
	$TCA['sys_products_orders']['ctrl']['title'] = 'LLL:EXT:tt_products/locallang_tca.php:sys_products_orders';
	t3lib_extMgm::addPlugin(Array('LLL:EXT:'.TT_PRODUCTS_EXTkey.'/locallang_tca.php:tt_content.list_type_pi1','5'),'list_type');
} else {
	t3lib_extMgm::addPlugin(Array('LLL:EXT:'.TT_PRODUCTS_EXTkey.'/locallang_db.xml:tt_content.list_type_pi1','5'),'list_type');
}

t3lib_extMgm::allowTableOnStandardPages('tt_products');
t3lib_extMgm::allowTableOnStandardPages('tt_products_language');
t3lib_extMgm::allowTableOnStandardPages('tt_products_cat');
t3lib_extMgm::allowTableOnStandardPages('tt_products_cat_language');
t3lib_extMgm::allowTableOnStandardPages('tt_products_articles');
t3lib_extMgm::allowTableOnStandardPages('tt_products_emails');
t3lib_extMgm::allowTableOnStandardPages('sys_products_orders');


//t3lib_extMgm::addToInsertRecords('tt_products');

if (TYPO3_MODE=='BE')  
	$TBE_MODULES_EXT['xMOD_db_new_content_el']['addElClasses']['tx_ttproducts_wizicon'] = PATH_BE_ttproducts.'class.tx_ttproducts_wizicon.php';

t3lib_extMgm::addLLrefForTCAdescr('tt_products','EXT:'.TT_PRODUCTS_EXTkey.'//locallang_csh_ttprod.php');
t3lib_extMgm::addLLrefForTCAdescr('tt_products_cat','EXT:'.TT_PRODUCTS_EXTkey.'//locallang_csh_ttprodc.php');
t3lib_extMgm::addLLrefForTCAdescr('tt_products_articles','EXT:'.TT_PRODUCTS_EXTkey.'//locallang_csh_ttproda.php');
t3lib_extMgm::addLLrefForTCAdescr('tt_products_emails','EXT:'.TT_PRODUCTS_EXTkey.'//locallang_csh_ttprode.php');
t3lib_extMgm::addLLrefForTCAdescr('sys_products_orders','EXT:'.TT_PRODUCTS_EXTkey.'//locallang_csh_ttprodo.php');


$tempColumns = Array (
	'tt_products_memoItems' => Array (
		'exclude' => 1,
		'label' => 'LLL:EXT:'.TT_PRODUCTS_EXTkey.'/locallang_db.xml:fe_users.tt_products_memoItems',
		'config' => Array (
			'type' => 'input',
			'size' => '10',
			'max' => '256'
		)
	),
	'tt_products_discount' => Array (
		'exclude' => 1,
		'label' => 'LLL:EXT:'.TT_PRODUCTS_EXTkey.'/locallang_db.xml:fe_users.tt_products_discount',
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
	'tt_products_creditpoints' => Array (
		'exclude' => 1,
		'label' => 'LLL:EXT:'.TT_PRODUCTS_EXTkey.'/locallang_db.xml:fe_users.tt_products_creditpoints',
		'config' => Array (
			'type' => 'input',
			'size' => '5',
			'max' => '20'
		)
	),
	'tt_products_vouchercode' => Array (
		'exclude' => 1,
		'label' => 'LLL:EXT:'.TT_PRODUCTS_EXTkey.'/locallang_db.xml:fe_users.tt_products_vouchercode',
		'config' => Array (
			'type' => 'input',
			'size' => '20',
			'max' => '256'
		)
	),
);

if ($typoVersion < 3008000)	{
	$tempColumns['tt_products_memoItems']['label'] = 'LLL:EXT:'.TT_PRODUCTS_EXTkey.'/locallang_tca.php:fe_users.tt_products_memoItems';
	$tempColumns['tt_products_discount']['label'] = 'LLL:EXT:'.TT_PRODUCTS_EXTkey.'/locallang_tca.php:fe_users.tt_products_discount';
	$tempColumns['tt_products_creditpoints']['label'] = 'LLL:EXT:'.TT_PRODUCTS_EXTkey.'/locallang_tca.php:fe_users.tt_products_creditpoints';
	$tempColumns['tt_products_vouchercode']['label'] =  'LLL:EXT:'.TT_PRODUCTS_EXTkey.'/locallang_tca.php:fe_users.tt_products_vouchercode';
}

t3lib_div::loadTCA('fe_users');

t3lib_extMgm::addTCAcolumns('fe_users',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('fe_users','tt_products_creditpoints;;;;1-1-1,tt_products_vouchercode;;;;1-1-1,tt_products_memoItems;;;;1-1-1,tt_products_discount;;;;1-1-1');

?>
