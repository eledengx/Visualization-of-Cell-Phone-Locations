<?php
/*--------------------------------------------------*/
/* FILE GENERATED BY INVISION POWER BOARD 3         */
/* CACHE FILE: Skin set id: 2               */
/* CACHE FILE: Generated: Sun, 06 Sep 2009 01:36:56 GMT */
/* DO NOT EDIT DIRECTLY - THE CHANGES WILL NOT BE   */
/* WRITTEN TO THE DATABASE AUTOMATICALLY            */
/*--------------------------------------------------*/

class skin_global_2 {

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
	/* -- defaultHeader --*/
function defaultHeader() {
$IPBHTML = "";
$IPBHTML .= "";
return $IPBHTML;
}

/* -- forum_jump --*/
function forum_jump($html) {
$IPBHTML = "";
$IPBHTML .= "";
return $IPBHTML;
}

/* -- globalTemplate --*/
function globalTemplate($html, $documentHeadItems, $css, $jsModules, $metaTags, $header_items=array(), $items=array(), $footer_items=array(), $stats=array()) {
$IPBHTML = "";
$IPBHTML .= "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<ipb>
$html
</ipb>";
return $IPBHTML;
}

/* -- include_highlighter --*/
function include_highlighter() {
$IPBHTML = "";
$IPBHTML .= "";
return $IPBHTML;
}

/* -- include_lightbox --*/
function include_lightbox() {
$IPBHTML = "";

$this->settings['do_include_lightbox_real']	= 1;
$IPBHTML .= "";
return $IPBHTML;
}

/* -- include_lightbox_real --*/
function include_lightbox_real() {
$IPBHTML = "";
$IPBHTML .= "<script type='text/javascript' src='{$this->settings['public_dir']}js/3rd_party/lightbox.js'></script>
<script type='text/javascript'>
//<![CDATA[
	// Lightbox Configuration
	LightboxOptions = Object.extend({
	    fileLoadingImage:        '{$this->settings['img_url']}/lightbox/loading.gif',     
	    fileBottomNavCloseImage: '{$this->settings['img_url']}/lightbox/closelabel.gif',
	    overlayOpacity: 0.8,   // controls transparency of shadow overlay
	    animate: true,         // toggles resizing animations
	    resizeSpeed: 7,        // controls the speed of the image resizing animations (1=slowest and 10=fastest)
	    borderSize: 10,         //if you adjust the padding in the CSS, you will need to update this variable
		// When grouping images this is used to write: Image # of #.
		// Change it for non-english localization
		labelImage: \"{$this->lang->words['lightbox_label']}\",
		labelOf: \"{$this->lang->words['lightbox_of']}\"
	}, window.LightboxOptions || {});
//]]>
</script>";
return $IPBHTML;
}

/* -- includeCSS --*/
function includeCSS($css) {
$IPBHTML = "";

$this->minify = array();
$IPBHTML .= "" . ((is_array( $css['import'] )) ? ("" . (($this->settings['use_minify']) ? ("") : ("")) . "
	".$this->__f__56844f36ef3919db5dafedb97dd6c5eb($css)."	" . (($this->settings['use_minify'] AND count($this->minify)) ? ("
		<link rel=\"stylesheet\" type=\"text/css\" media='screen' href=\"{$this->settings['public_dir']}min/index.php?f=" . str_replace( $this->settings['public_dir'], 'public/', implode( ',', $this->minify ) ) . "\" />
	") : ("")) . "") : ("")) . "
" . ((is_array( $css['inline'] ) AND count( $css['inline'] )) ? ("
	".$this->__f__3ff698b48b4ecdfe062586057241865a($css)."") : ("")) . "
<!--[if lte IE 7]>
	<link rel=\"stylesheet\" type=\"text/css\" title='Main' media=\"screen\" href=\"{$this->settings['public_dir']}style_css/{$this->registry->output->skin['_csscacheid']}/ipb_ie.css\" />
<![endif]-->";
return $IPBHTML;
}


function __f__56844f36ef3919db5dafedb97dd6c5eb($css)
{
	$_ips___x_retval = '';
	foreach( $css['import'] as $data )
	{
		
if( $this->settings['use_minify'] AND ( ! $data['attributes'] OR stripos( $data['attributes'], 'screen' ) !== false ) )
			{
				$this->minify[] = "{$data['content']}";
			}

		$_ips___x_retval .= "
				" . ((!$this->settings['use_minify'] OR ( $data['attributes'] AND stripos( $data['attributes'], 'screen' ) === false )) ? ("
			<link rel=\"stylesheet\" type=\"text/css\" {$data['attributes']} href=\"{$data['content']}\" />
		") : ("")) . "
	
";
	}
	$_ips___x_retval .= '';
	return $_ips___x_retval;
}

function __f__3ff698b48b4ecdfe062586057241865a($css)
{
	$_ips___x_retval = '';
	foreach( $css['inline'] as $data )
	{
		
		$_ips___x_retval .= "
	<style type=\"text/css\" {$data['attributes']}>
		/* Inline CSS */
		{$data['content']}
	</style>
	
";
	}
	$_ips___x_retval .= '';
	return $_ips___x_retval;
}

/* -- includeFeeds --*/
function includeFeeds($documentHeadItems) {
$IPBHTML = "";
$IPBHTML .= "" . ((count($documentHeadItems)) ? ("
	".$this->__f__8942b2e2c492f41ceba6110f60d52481($documentHeadItems)."") : ("")) . "";
return $IPBHTML;
}


function __f__cfebe5efcd5347c101c1c81986c4ca98($documentHeadItems,$type='',$idx='')
{
	$_ips___x_retval = '';
	foreach( $documentHeadItems[ $type ] as $idx => $data )
	{
		
		$_ips___x_retval .= "
			" . (($type == 'javascript') ? ("
				<script type=\"text/javascript\" src=\"{$data}\" charset=\"<% CHARSET %>\"></script>
			") : ("")) . "
			" . (($type == 'rss') ? ("
				<link rel=\"alternate feed\" type=\"application/rss+xml\" title=\"{$data['title']}\" href=\"{$data['url']}\" />
			") : ("")) . "
			" . (($type == 'rsd') ? ("
				<link rel=\"EditURI\" type=\"application/rsd+xml\" title=\"{$data['title']}\" href=\"{$data['url']}\" />
			") : ("")) . "
			" . (($type == 'raw') ? ("
				{$data}
			") : ("")) . "
		
";
	}
	$_ips___x_retval .= '';
	return $_ips___x_retval;
}

function __f__8942b2e2c492f41ceba6110f60d52481($documentHeadItems)
{
	$_ips___x_retval = '';
	foreach( $documentHeadItems as $type => $idx )
	{
		
		$_ips___x_retval .= "
		".$this->__f__cfebe5efcd5347c101c1c81986c4ca98($documentHeadItems,$type,$idx)."	
";
	}
	$_ips___x_retval .= '';
	return $_ips___x_retval;
}

/* -- includeJS --*/
function includeJS($jsModules) {
$IPBHTML = "";
$IPBHTML .= "" . (($this->settings['use_minify']) ? ("" . (($this->settings['remote_load_js']) ? ("<script type='text/javascript' src='" . (($this->registry->output->isHTTPS) ? ("https") : ("http")) . "://ajax.googleapis.com/ajax/libs/prototype/1.6/prototype.js'></script>
		<script type='text/javascript' src='" . (($this->registry->output->isHTTPS) ? ("https") : ("http")) . "://ajax.googleapis.com/ajax/libs/scriptaculous/1.8/scriptaculous.js?load=effects,dragdrop,builder'></script>") : ("
		<script type='text/javascript' src='{$this->settings['public_dir']}min/index.php?g=js'></script>
	")) . "
	<script type='text/javascript' src='{$this->settings['public_dir']}min/index.php?charset={$this->settings['gb_char_set']}&amp;f=public/js/ipb.js,public/js/ips.quickpm.js" . ((count($jsModules)) ? (",public/js/ips." . implode('.js,public/js/ips.', array_unique( array_keys( $jsModules ) ) ) . ".js") : ("")) . ",cache/lang_cache/{$this->lang->lang_id}/ipb.lang.js' charset='{$this->settings['gb_char_set']}'></script>") : ("" . (($this->settings['remote_load_js']) ? ("<script type='text/javascript' src='" . (($this->registry->output->isHTTPS) ? ("https") : ("http")) . "://ajax.googleapis.com/ajax/libs/prototype/1.6/prototype.js'></script>") : ("
		<script type='text/javascript' src='{$this->settings['public_dir']}js/3rd_party/prototype.js'></script>
	")) . "
	<script type='text/javascript' src='{$this->settings['public_dir']}js/ipb.js?load=quickpm," . implode(',', array_unique( array_keys( $jsModules ) ) ) . "'></script>
	" . (($this->settings['remote_load_js']) ? ("<script type='text/javascript' src='" . (($this->registry->output->isHTTPS) ? ("https") : ("http")) . "://ajax.googleapis.com/ajax/libs/scriptaculous/1.8/scriptaculous.js?load=effects,dragdrop,builder'></script>") : ("
		<script type='text/javascript' src='{$this->settings['public_dir']}js/3rd_party/scriptaculous/scriptaculous-cache.js'></script>
	")) . "
	<script type=\"text/javascript\" src='{$this->settings['cache_dir']}lang_cache/{$this->lang->lang_id}/ipb.lang.js' charset='{$this->settings['gb_char_set']}'></script>")) . "";
return $IPBHTML;
}

/* -- includeMeta --*/
function includeMeta($metaTags) {
$IPBHTML = "";
$IPBHTML .= "" . ((is_array( $metaTags ) AND count( $metaTags )) ? ("
	".$this->__f__fa20f3b44a77680ff4a140b32b54b43c($metaTags)."") : ("")) . "";
return $IPBHTML;
}


function __f__fa20f3b44a77680ff4a140b32b54b43c($metaTags)
{
	$_ips___x_retval = '';
	foreach( $metaTags as $tag => $content )
	{
		
		$_ips___x_retval .= "
	<meta name=\"$tag\" content=\"$content\" />
	
";
	}
	$_ips___x_retval .= '';
	return $_ips___x_retval;
}

/* -- includeRTL --*/
function includeRTL() {
$IPBHTML = "";

$this->isRtlLang	= false;
$IPBHTML .= "".$this->__f__a2bd5246caad747b8c989ede1132d468()."<script type='text/javascript'>
	var isRTL	= false;
	var rtlIe	= '';
	var rtlFull	= '';
</script>
" . (($this->isRtlLang AND file_exists( DOC_IPS_ROOT_PATH . '/' . PUBLIC_DIRECTORY . '/style_css/' . $this->registry->output->skin['_csscacheid'] . '/ipb_rtl.css' )) ? ("
	<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{$this->settings['public_dir']}style_css/{$this->registry->output->skin['_csscacheid']}/ipb_rtl.css\" />
	<script type='text/javascript'>
		var rtlFull	= \"{$this->settings['public_dir']}style_css/{$this->registry->output->skin['_csscacheid']}/ipb_rtl.css\";
		var isRTL	= true;
	</script>
") : ("" . (($this->isRtlLang AND file_exists( DOC_IPS_ROOT_PATH . '/' . PUBLIC_DIRECTORY . '/style_css/ipb_rtl.css' )) ? ("
		<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{$this->settings['public_dir']}style_css/ipb_rtl.css\" />
		<script type='text/javascript'>
			var rtlFull	= \"{$this->settings['public_dir']}style_css/ipb_rtl.css\";
			var isRTL	= true;
		</script>
	") : ("")) . "")) . "
" . (($this->isRtlLang AND file_exists( DOC_IPS_ROOT_PATH . '/' . PUBLIC_DIRECTORY . '/style_css/' . $this->registry->output->skin['_csscacheid'] . '/ipb_rtl_ie.css' )) ? ("
	<!--[if lte IE 7]>
	<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{$this->settings['public_dir']}style_css/{$this->registry->output->skin['_csscacheid']}/ipb_rtl_ie.css\" />
	<![endif]-->
	<script type='text/javascript'>
		var rtlIe	= \"{$this->settings['public_dir']}style_css/{$this->registry->output->skin['_csscacheid']}/ipb_rtl_ie.css\";
	</script>
") : ("" . (($this->isRtlLang AND file_exists( DOC_IPS_ROOT_PATH . '/' . PUBLIC_DIRECTORY . '/style_css/ipb_rtl_ie.css' )) ? ("
		<!--[if lte IE 7]>
		<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{$this->settings['public_dir']}style_css/ipb_rtl_ie.css\" />
		<![endif]-->
		<script type='text/javascript'>
			var rtlIe	= \"{$this->settings['public_dir']}style_css/ipb_rtl_ie.css\";
		</script>
	") : ("")) . "")) . "";
return $IPBHTML;
}


function __f__a2bd5246caad747b8c989ede1132d468()
{
	$_ips___x_retval = '';
	foreach( $this->cache->getCache('lang_data') as $data )
	{
		
		$_ips___x_retval .= "
	" . ((intval($this->member->language_id) == intval($data['lang_id'])) ? ("" . (($data['lang_isrtl']) ? ("" . (($this->isRtlLang = true) ? ("") : ("")) . "") : ("")) . "") : ("")) . "

";
	}
	$_ips___x_retval .= '';
	return $_ips___x_retval;
}

/* -- includeVars --*/
function includeVars() {
$IPBHTML = "";
$IPBHTML .= "<script type='text/javascript'>
	//<![CDATA[
		/* ---- URLs ---- */
		ipb.vars['base_url'] 			= '" . (($this->registry->output->isHTTPS) ? ("" . str_replace( 'http://', 'https://', "" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "", 'public','' ), "", "" ) . "" ) . "") : ("" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "", 'public','' ), "", "" ) . "")) . "';
		ipb.vars['board_url']			= '{$this->settings['board_url']}';
		ipb.vars['loading_img'] 		= '{$this->settings['img_url']}/loading.gif';
		ipb.vars['active_app']			= '{$this->registry->getCurrentApplication()}';
		ipb.vars['upload_url']			= '{$this->settings['upload_url']}';
		/* ---- Member ---- */
		ipb.vars['member_id']			= parseInt( {$this->memberData['member_id']} ),
		ipb.vars['is_supmod']			= parseInt( " . intval($this->memberData['g_is_supmod']) . " ),
		ipb.vars['is_admin']			= parseInt( {$this->memberData['g_access_cp']} ),
		ipb.vars['secure_hash'] 		= '{$this->member->form_hash}';
		ipb.vars['session_id']			= '{$this->member->session_id}';
		ipb.vars['can_befriend']		= " . (($this->settings['friends_enabled'] AND $this->memberData['g_can_add_friends']) ? ("true") : ("false")) . ";
		/* ---- cookies ----- */
		ipb.vars['cookie_id'] 			= '{$this->settings['cookie_id']}';
		ipb.vars['cookie_domain'] 		= '{$this->settings['cookie_domain']}';
		ipb.vars['cookie_path']			= '{$this->settings['cookie_path']}';
		/* ---- Rate imgs ---- */
		ipb.vars['rate_img_on']			= '{$this->settings['img_url']}/bullet_star.png';
		ipb.vars['rate_img_off']		= '{$this->settings['img_url']}/bullet_star_off.png';
		ipb.vars['rate_img_rated']		= '{$this->settings['img_url']}/bullet_star_rated.png';
		/* ---- Uploads ---- */
		ipb.vars['swfupload_swf']		= '" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "js/3rd_party/swfupload/swfupload.swf", 'public_dir','' ), "", "" ) . "';
		ipb.vars['swfupload_enabled']	= " . (($this->settings['uploadFormType']) ? ("true") : ("false")) . ";
		ipb.vars['use_swf_upload']		= ( '{$this->memberData['member_uploader']}' == 'flash' ) ? true : false;
		ipb.vars['swfupload_debug']		= false; /* SKINNOTE: Turn off for production */
		/* ---- other ---- */
		ipb.vars['use_live_search'] 	= 0;
		ipb.vars['live_search_limit'] 	= 4;
		ipb.vars['highlight_color']		= \"#ade57a\";
		ipb.vars['charset']				= \"{$this->settings['gb_char_set']}\";
		ipb.vars['use_rte']				= 1;
		ipb.vars['image_resize']		= " . (($this->settings['resize_linked_img']) ? ("{$this->settings['resize_img_percent']}") : ("0")) . ";
		ipb.vars['seo_enabled']			= " . intval($this->settings['use_friendly_urls']) . ";
		" . (($this->settings['use_friendly_urls']) ? ("
		ipb.vars['seo_params']			= " . json_encode($this->registry->getClass('output')->seoTemplates['__data__']) . ";
		") : ("")) . "
		/* Templates/Language */
		ipb.templates['ajax_loading'] 	= \"<div id='ajax_loading'>\" + ipb.lang['loading'] + \"</div>\";
		ipb.templates['close_popup']	= \"<img src='{$this->settings['img_url']}/close_popup.png' alt='x' />\";
		ipb.templates['rss_shell']		= new Template(\"<ul id='rss_menu'>#{items}</ul>\");
		ipb.templates['rss_item']		= new Template(\"<li><a href='#{url}' title='#{title}'>#{title}</a></li>\");
		ipb.templates['resized_img']	= new Template(\"<span>{$this->lang->words['resized_image']}</span>\");
		ipb.templates['m_add_friend']	= new Template(\"<a href='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=members&amp;module=profile&amp;section=friends&amp;do=add&amp;member_id=#{id}", 'public','' ), "", "" ) . "' title='{$this->lang->words['add_friend']}'>" . $this->registry->getClass('output')->getReplacement("add_friend") . "</a>\");
		ipb.templates['m_rem_friend']	= new Template(\"<a href='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=members&amp;module=profile&amp;section=friends&amp;do=remove&amp;member_id=#{id}", 'public','' ), "", "" ) . "' title='{$this->lang->words['remove_friend']}'>" . $this->registry->getClass('output')->getReplacement("remove_friend") . "</a>\");
		ipb.templates['autocomplete_wrap'] = new Template(\"<ul id='#{id}' class='ipb_autocomplete' style='width: 250px;'></ul>\");
		ipb.templates['autocomplete_item'] = new Template(\"<li id='#{id}'><img src='#{img}' alt='' width='#{img_w}' height='#{img_h}' />&nbsp;&nbsp;#{itemvalue}</li>\");
		ipb.templates['page_jump']		= new Template(\"<div id='#{id}_wrap' class='ipbmenu_content'><h3 class='bar'>{$this->lang->words['global_page_jump']}</h3><input type='text' class='input_text' id='#{id}_input' size='8' /> <input type='submit' value='{$this->lang->words['jmp_go']}' class='input_submit add_folder' id='#{id}_submit' /></div>\");
	//]]>
	</script>";
return $IPBHTML;
}

/* -- paginationTemplate --*/
function paginationTemplate($work, $data) {
$IPBHTML = "";
$IPBHTML .= "" . (($work['pages'] > 1) ? ("<pagination>
		<total>{$work['pages']}</total>
		<current>{$work['current_page']}</current>
		<pages>
	".$this->__f__942c6f89e9a88e52f419f7b7f9378832($work,$data)."		" . (($work['current_page'] < $work['pages']) ? ("
			<page>
				<title>{$this->lang->words['tpl_next']}</title>
				<url>" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "{$data['baseUrl']}&amp;{$data['startValueKey']}=" . intval( $data['currentStartValue'] + $data['itemsPerPage'] ) . "", 'public','' ), "{$data['seoTitle']}", "{$data['seoTemplate']}" ) . "</url>
			</page>
		") : ("")) . "" . ((isset( $work['_showEndDots'] ) && $work['_showEndDots']) ? ("
			<page>
				<title>{$this->lang->words['tpl_gotolast']}</title>
				<url>" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "{$data['baseUrl']}&amp;{$data['startValueKey']}=" . intval( ( $work['pages'] - 1 ) * $data['itemsPerPage'] ) . "", 'public','' ), "{$data['seoTitle']}", "{$data['seoTemplate']}" ) . "</url>
			</page>			
		") : ("")) . "
		</pages>
	</pagination>") : ("")) . "";
return $IPBHTML;
}


function __f__942c6f89e9a88e52f419f7b7f9378832($work, $data)
{
	$_ips___x_retval = '';
	foreach( $work['_pageNumbers'] as $_real => $_page )
	{
		
		$_ips___x_retval .= "
			<page>
				<title>{$_page}</title>
				<url>" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "{$data['baseUrl']}&amp;{$data['startValueKey']}={$_real}", 'public','' ), "{$data['seoTitle']}", "{$data['seoTemplate']}" ) . "</url>
			</page>
	
";
	}
	$_ips___x_retval .= '';
	return $_ips___x_retval;
}

/* -- signature_separator --*/
function signature_separator($sig="") {
$IPBHTML = "";
$IPBHTML .= "$sig";
return $IPBHTML;
}

/* -- user_popup --*/
function user_popup($memberid=0, $seoName='') {
$IPBHTML = "";
$IPBHTML .= "";
return $IPBHTML;
}

/* -- userInfoPane --*/
function userInfoPane($author, $contentid, $options) {
$IPBHTML = "";
$IPBHTML .= "<details>	
		" . (($author['member_id'] AND $author['avatar']) ? ("
			<avatar>{$author['avatar']}</avatar>
		") : ("
			<avatar>{$author['avatar']}</avatar>
		")) . "" . (($author['title']) ? ("
			<title>{$author['title']}</title>
		") : ("")) . "" . (($author['member_rank_img']) ? ("
			<rank>{$author['member_rank_img']}</rank>
		") : ("")) . "" . (($author['has_blog']) ? ("
			<blog>" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=blog&amp;module=display&amp;section=blog&amp;mid={$author['member_id']}", 'public','' ), "", "" ) . "</blog>
		") : ("")) . "" . (($author['has_gallery']) ? ("
			<gallery>" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=gallery&amp;module=user&amp;section=user&amp;user={$author['member_id']}", 'public','' ), "", "" ) . "</gallery>
		") : ("")) . "	
			<group>{$author['_group_formatted']}</group>
			<posts>" . $this->registry->getClass('class_localization')->formatNumber( intval( $author['posts'] ) ) . "</posts>
			<joined>" . $this->registry->getClass('class_localization')->getDate($author['joined'],"joined", 0) . "</joined>
		" . (($author['custom_fields']['profile_info'] != "") ? ("
			<customfields>
			".$this->__f__908862d1fa859306b857dda79e3ddeb3($author,$contentid,$options)."			</customfields>
		") : ("")) . "
		</details>";
return $IPBHTML;
}


function __f__908862d1fa859306b857dda79e3ddeb3($author, $contentid, $options)
{
	$_ips___x_retval = '';
	foreach( $author['custom_fields']['profile_info'] as $field )
	{
		
		$_ips___x_retval .= "
				<field>{$field}</field>
			
";
	}
	$_ips___x_retval .= '';
	return $_ips___x_retval;
}



}

/*--------------------------------------------------*/
/* END OF FILE                                      */
/*--------------------------------------------------*/

?>