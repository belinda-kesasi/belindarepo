<?php



namespace Maexware\NettoPriceModule\Model;
use OxidEsales\Eshop\Core\Registry;

/**
 * NettoPrice oxArticle class
 *
 * @mixin \OxidEsales\Eshop\Application\Model\Article
 */
class Article extends Article_parent{
	  
       public function getFormatedNettoPrice(){

           
       	return \OxidEsales\Eshop\Core\Registry::getLang()->formatCurrency($this->getPrice()->getNettoPrice());
       }
}

