<?php
/*--------------------------------------------------*/
/* FILE GENERATED BY INVISION POWER BOARD 3         */
/* CACHE FILE: Skin set id: 2               */
/* CACHE FILE: Generated: Sun, 06 Sep 2009 01:36:56 GMT */
/* DO NOT EDIT DIRECTLY - THE CHANGES WILL NOT BE   */
/* WRITTEN TO THE DATABASE AUTOMATICALLY            */
/*--------------------------------------------------*/

class skin_editors_2 {

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
	/* -- ajaxEditBox --*/
function ajaxEditBox($post="", $pid=0, $error_msg="", $extraData) {
$IPBHTML = "";
$IPBHTML .= "";
return $IPBHTML;
}

/* -- editorJS --*/
function editorJS($emoticons='') {
$IPBHTML = "";
$IPBHTML .= "";
return $IPBHTML;
}

/* -- editorShell --*/
function editorShell($editor_id, $field='Post', $content='', $lite=0) {
$IPBHTML = "";
$IPBHTML .= "";
return $IPBHTML;
}

/* -- ips_editor --*/
function ips_editor($form_field="",$initial_content="",$images_path="",$rte_mode=0,$editor_id='ed-0',$smilies='', $bbcode='', $can_use_emos=1, $IPS_DOC_CHAR_SET=1) {
$IPBHTML = "";
$IPBHTML .= "";
return $IPBHTML;
}



}

/*--------------------------------------------------*/
/* END OF FILE                                      */
/*--------------------------------------------------*/

?>