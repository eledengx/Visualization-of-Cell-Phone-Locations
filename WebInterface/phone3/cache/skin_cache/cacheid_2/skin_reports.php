<?php
/*--------------------------------------------------*/
/* FILE GENERATED BY INVISION POWER BOARD 3         */
/* CACHE FILE: Skin set id: 2               */
/* CACHE FILE: Generated: Sun, 06 Sep 2009 01:36:56 GMT */
/* DO NOT EDIT DIRECTLY - THE CHANGES WILL NOT BE   */
/* WRITTEN TO THE DATABASE AUTOMATICALLY            */
/*--------------------------------------------------*/

class skin_reports_2 {

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
	/* -- basicReportForm --*/
function basicReportForm($name="", $url="", $extra_data="") {
$IPBHTML = "";
$IPBHTML .= "";
return $IPBHTML;
}

/* -- config_notif --*/
function config_notif($data="") {
$IPBHTML = "";
$IPBHTML .= "";
return $IPBHTML;
}

/* -- greenAlertImage --*/
function greenAlertImage() {
$IPBHTML = "";
$IPBHTML .= "";
return $IPBHTML;
}

/* -- redAlertImage --*/
function redAlertImage() {
$IPBHTML = "";
$IPBHTML .= "";
return $IPBHTML;
}

/* -- reportsIndex --*/
function reportsIndex($reports=array(), $acts="", $pages="", $active=array()) {
$IPBHTML = "";
$IPBHTML .= "";
return $IPBHTML;
}

/* -- statusIcon --*/
function statusIcon($img, $width, $height) {
$IPBHTML = "";
$IPBHTML .= "<img src='{$this->settings['public_dir']}{$img}' alt='{$this->lang->words['status']}' />";
return $IPBHTML;
}

/* -- viewReport --*/
function viewReport($options=array(), $reports=array(), $comments=array()) {
$IPBHTML = "";
$IPBHTML .= "";
return $IPBHTML;
}



}

/*--------------------------------------------------*/
/* END OF FILE                                      */
/*--------------------------------------------------*/

?>