<?php


namespace Maexware\NettoPriceModule\Core;

use OxidEsales\Eshop\Core\Registry;


class ViewConfig extends  ViewConfig_parent {
    

    public function UserHasRights() {
        	

 	

    	$oUser = Registry::getUtils()->getUser();
        $aGroupFromSettings = Registry::getConfig()->getShopConfVar('beUsergroup');
         foreach ($aGroupFromSettings as $group) {
         if ($oUser->inGroup($group) === true) {
         return true;
           }
           }
          return false;
  

	 }


}

    



