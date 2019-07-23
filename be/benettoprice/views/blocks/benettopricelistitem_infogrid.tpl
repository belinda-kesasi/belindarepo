[{$smarty.block.parent}] 
 
                       
 [{if  $oxcmp_user}]
    [{ foreach from=$oxcmp_user->getUserGroups() item=oGroup}]
    [{/foreach}]

    [{if $oViewConf->UserHasRights()}]
                      
    <h3> [{assign var="this" value=$product->getPrice()}]
         [{$product->getFormatedNettoPrice()}][{$currency->sign}]</h3>
         

                     	 
                     	 
 [{else}]
                           
 [{/if}] 
 [{/if}]

	
