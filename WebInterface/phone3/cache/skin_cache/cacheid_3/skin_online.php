<?php
/*--------------------------------------------------*/
/* FILE GENERATED BY INVISION POWER BOARD 3         */
/* CACHE FILE: Skin set id: 3               */
/* CACHE FILE: Generated: Sun, 06 Sep 2009 04:32:25 GMT */
/* DO NOT EDIT DIRECTLY - THE CHANGES WILL NOT BE   */
/* WRITTEN TO THE DATABASE AUTOMATICALLY            */
/*--------------------------------------------------*/

class skin_online_3 {

/**
* Construct
*/
function __construct( ipsRegistry $registry )
{
	/* Make object */
	$this->registry   =  $registry;
	$this->DB         =  $this->registry->DB();
	$this->settings   =& $this->registry->fetchSettings();
	$this->request    =& $this->registry->fetchRequest();
	$this->lang       =  $this->registry->getClass('class_localization');
	$this->member     =  $this->registry->member();
	$this->memberData =& $this->registry->member()->fetchMemberData();
	$this->cache      =  $this->registry->cache();
	$this->caches     =& $this->registry->cache()->fetchCaches();
}
	/* -- showOnlineList --*/
function showOnlineList($rows, $links="", $defaults=array(), $our_mgroups=array()) {
$IPBHTML = "";
$IPBHTML .= "";
return $IPBHTML;
}



}

/*--------------------------------------------------*/
/* END OF FILE                                      */
/*--------------------------------------------------*/

?>