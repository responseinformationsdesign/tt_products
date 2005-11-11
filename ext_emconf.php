<?php

########################################################################
# Extension Manager/Repository config file for ext: "tt_products"
# 
# Auto generated 11-11-2005 12:32
# 
# Manual updates:
# Only the data in the array - anything else is removed by next write
########################################################################

$EM_CONF[$_EXTKEY] = Array (
	'title' => 'Shop System',
	'description' => 'Shop system with articles, order tracking, bill creation, creditpoint and voucher system, gift certificates, confirmation emails and search facility. Install the \'Table Library\' table v0.0.5 and the fh_library v0.0.1 extensions before you make an update!',
	'category' => 'plugin',
	'shy' => 0,
	'dependencies' => 'cms,table,fh_library',
	'conflicts' => 'zk_products,mkl_products,ast_rteproducts,onet_ttproducts_rte,shopsort',
	'priority' => '',
	'loadOrder' => '',
	'TYPO3_version' => '3.7.1-3.8.1',
	'PHP_version' => '4.2.3-5.0.5',
	'module' => '',
	'state' => 'stable',
	'internal' => 0,
	'uploadfolder' => 0,
	'createDirs' => 'uploads/tx_ttproducts/datasheet',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author' => 'Franz Holzinger',
	'author_email' => 'franz@fholzinger.com',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'private' => 0,
	'download_password' => '',
	'version' => '2.3.6',	// Don't modify this! Managed automatically during upload to repository.
	'_md5_values_when_last_written' => 'a:82:{s:9:"ChangeLog";s:4:"d1ce";s:31:"class.tx_ttproducts_wizicon.php";s:4:"8694";s:12:"ext_icon.gif";s:4:"eb61";s:17:"ext_localconf.php";s:4:"b71e";s:14:"ext_tables.php";s:4:"f927";s:14:"ext_tables.sql";s:4:"b0ea";s:28:"ext_typoscript_constants.txt";s:4:"f739";s:24:"ext_typoscript_setup.txt";s:4:"9b1b";s:19:"flexform_ds_pi1.xml";s:4:"619c";s:13:"locallang.php";s:4:"9de7";s:24:"locallang_csh_ttprod.php";s:4:"24a3";s:25:"locallang_csh_ttproda.php";s:4:"4847";s:25:"locallang_csh_ttprodc.php";s:4:"4d89";s:25:"locallang_csh_ttprode.php";s:4:"b948";s:17:"locallang_tca.php";s:4:"2c63";s:7:"tca.php";s:4:"fb9c";s:31:"res/icons/table/tt_products.gif";s:4:"1ebd";s:40:"res/icons/table/tt_products_articles.gif";s:4:"1ebd";s:35:"res/icons/table/tt_products_cat.gif";s:4:"f852";s:44:"res/icons/table/tt_products_cat_language.gif";s:4:"d4fe";s:38:"res/icons/table/tt_products_emails.gif";s:4:"1ebd";s:40:"res/icons/table/tt_products_language.gif";s:4:"9d4e";s:23:"res/icons/be/ce_wiz.gif";s:4:"a6c1";s:28:"res/icons/be/productlist.gif";s:4:"a6c1";s:35:"res/icons/fe/ttproducts_help_en.png";s:4:"5326";s:14:"doc/manual.sxw";s:4:"f34d";s:38:"template/example_template_bill_de.tmpl";s:4:"c87d";s:35:"template/payment_DIBS_template.tmpl";s:4:"4684";s:38:"template/payment_DIBS_template_uk.tmpl";s:4:"96f9";s:27:"template/products_help.tmpl";s:4:"351f";s:31:"template/products_template.tmpl";s:4:"5e86";s:34:"template/products_template_dk.tmpl";s:4:"0d73";s:40:"template/products_template_htmlmail.tmpl";s:4:"aa8a";s:34:"template/products_template_se.tmpl";s:4:"bbf6";s:39:"template/meerwijn/detail_cadeaubon.tmpl";s:4:"c263";s:40:"template/meerwijn/detail_geschenken.tmpl";s:4:"b695";s:40:"template/meerwijn/detail_kurkenshop.tmpl";s:4:"0fad";s:38:"template/meerwijn/detail_shopabox.tmpl";s:4:"21a3";s:36:"template/meerwijn/detail_wijnen.tmpl";s:4:"63be";s:37:"template/meerwijn/product_detail.tmpl";s:4:"7b3c";s:45:"template/meerwijn/product_proefpakketten.tmpl";s:4:"c6c8";s:32:"template/meerwijn/producten.tmpl";s:4:"e2cb";s:33:"template/meerwijn/shop-a-box.tmpl";s:4:"81c3";s:40:"template/meerwijn/totaal_geschenken.tmpl";s:4:"41ec";s:40:"template/meerwijn/totaal_kurkenshop.tmpl";s:4:"5c51";s:38:"template/meerwijn/totaal_shopabox.tmpl";s:4:"8945";s:36:"template/meerwijn/totaal_wijnen.tmpl";s:4:"7625";s:34:"template/meerwijn/winkelwagen.tmpl";s:4:"72b6";s:39:"lib/class.tx_ttproducts_article_div.php";s:4:"3644";s:37:"lib/class.tx_ttproducts_attribute.php";s:4:"0701";s:34:"lib/class.tx_ttproducts_basket.php";s:4:"0b95";s:44:"lib/class.tx_ttproducts_billdelivery_div.php";s:4:"bb0f";s:36:"lib/class.tx_ttproducts_category.php";s:4:"d9e7";s:35:"lib/class.tx_ttproducts_content.php";s:4:"d2d6";s:44:"lib/class.tx_ttproducts_creditpoints_div.php";s:4:"0ad1";s:31:"lib/class.tx_ttproducts_csv.php";s:4:"7837";s:40:"lib/class.tx_ttproducts_currency_div.php";s:4:"4609";s:30:"lib/class.tx_ttproducts_db.php";s:4:"446a";s:31:"lib/class.tx_ttproducts_div.php";s:4:"c4a0";s:33:"lib/class.tx_ttproducts_email.php";s:4:"f61f";s:37:"lib/class.tx_ttproducts_email_div.php";s:4:"ea29";s:40:"lib/class.tx_ttproducts_finalize_div.php";s:4:"78d9";s:37:"lib/class.tx_ttproducts_gifts_div.php";s:4:"f012";s:37:"lib/class.tx_ttproducts_list_view.php";s:4:"ecd5";s:36:"lib/class.tx_ttproducts_memo_div.php";s:4:"897d";s:33:"lib/class.tx_ttproducts_order.php";s:4:"dec6";s:32:"lib/class.tx_ttproducts_page.php";s:4:"43d0";s:43:"lib/class.tx_ttproducts_paymentshipping.php";s:4:"6029";s:33:"lib/class.tx_ttproducts_price.php";s:4:"52fa";s:41:"lib/class.tx_ttproducts_pricecalc_div.php";s:4:"cfab";s:35:"lib/class.tx_ttproducts_product.php";s:4:"9ae1";s:39:"lib/class.tx_ttproducts_single_view.php";s:4:"0715";s:40:"lib/class.tx_ttproducts_tracking_div.php";s:4:"3c4e";s:36:"lib/class.tx_ttproducts_view_div.php";s:4:"ca0a";s:36:"pi1/class.tx_ttproducts_htmlmail.php";s:4:"e28b";s:31:"pi1/class.tx_ttproducts_pi1.php";s:4:"9706";s:13:"pi1/clear.gif";s:4:"cc11";s:17:"pi1/locallang.php";s:4:"965d";s:20:"pi1/payment_DIBS.php";s:4:"cde8";s:32:"pi1/products_comp_calcScript.inc";s:4:"3f75";s:24:"pi1/static/editorcfg.txt";s:4:"4dd7";s:20:"pi1/static/setup.txt";s:4:"045b";}',
);

?>