<?php
/***************************************************************
*  Copyright notice
*
*  (c) 1999-2006 Kasper Sk�rh�j (kasperYYYY@typo3.com)
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*  A copy is found in the textfile GPL.txt and important notices to the license
*  from the author is found in LICENSE.txt distributed with these scripts.
*
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * $Id$
 *
 * @author	Kasper Sk�rh�j <kasperYYYY@typo3.com>
 * @author	Franz Holzinger <kontakt@fholzinger.com>
 * @package TYPO3
 * @subpackage tt_products
 */

class tx_ttproducts_wizicon {
	function proc($wizardItems)	{
		global $LANG;

		$LL = $this->includeLocalLang();

		if ($TYPO3_CONF_VARS['EXTCONF']['tt_products']['pageAsCategory'] == 0)	{
			$params = '&defVals[tt_content][CType]=list&defVals[tt_content][list_type]=5&defVals[tt_content][select_key]=HELP';
		} else {
			$params = '&defVals[tt_content][CType]=list&defVals[tt_content][list_type]=5&defVals[tt_content][tt_products_code]=HELP';
		}

		$wizardItems['plugins_tx_ttproducts_pi1'] = array(
			'icon'=>PATH_BE_ttproducts_rel.'res/icons/be/ce_wiz.gif',
			'title'=>$LANG->getLLL('plugins_title',$LL),
			'description'=>$LANG->getLLL('plugins_description',$LL),
			'params'=> $params);

		return $wizardItems;
	}

	/**
	 * Includes the locallang.xml and returns the $LOCAL_LANG array found in that file.
	 */
	function includeLocalLang()	{
		$typoVersion = t3lib_div::int_from_ver($GLOBALS['TYPO_VERSION']); 
		
		if ($typoVersion >= 3008000)	{
			$LOCAL_LANG = $GLOBALS['LANG']->includeLLFile(PATH_BE_ttproducts.'locallang.xml',FALSE);
		} else {
			include(PATH_BE_ttproducts.'locallang.php');
		}
		return $LOCAL_LANG;
	}
	
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/tt_products/class.tx_ttproducts_wizicon.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/tt_products/class.tx_ttproducts_wizicon.php']);
}

?>