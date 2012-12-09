<?php
/*--------------------------------------------------*/
/* FILE GENERATED BY INVISION POWER BOARD 3         */
/* CACHE FILE: Skin set id: 3               */
/* CACHE FILE: Generated: Sun, 06 Sep 2009 04:32:25 GMT */
/* DO NOT EDIT DIRECTLY - THE CHANGES WILL NOT BE   */
/* WRITTEN TO THE DATABASE AUTOMATICALLY            */
/*--------------------------------------------------*/

class skin_global_3 {

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
$IPBHTML .= "<a href='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "act=idx", 'public','' ), "", "" ) . "' title='{$this->lang->words['go_home']}' rel=\"home\" accesskey='1'><img src='" . $this->registry->getClass('output')->getReplacement("logo_img") . "' alt='{$this->lang->words['logo']}' /></a>";
return $IPBHTML;
}

/* -- forum_jump --*/
function forum_jump($html) {
$IPBHTML = "";
$IPBHTML .= "<form id='forum_jump' action='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "", 'public','' ), "", "" ) . "' method='post'>
		<fieldset>
			<select name='showforum' class='input_select'>
				<optgroup label=\"{$this->lang->words['forum_jump']}\">
					{$html}
				</optgroup>
			</select>
			" . (($this->member->session_type != 'cookie') ? ("<input type='hidden' name='s' value='{$this->member->session_id}' />") : ("")) . "
			<input type='submit' value='{$this->lang->words['jmp_go']}' class='input_submit alt' />
		</fieldset>
	</form>";
return $IPBHTML;
}

/* -- globalTemplate --*/
function globalTemplate($html, $documentHeadItems, $css, $jsModules, $metaTags, $header_items=array(), $items=array(), $footer_items=array(), $stats=array()) {
$IPBHTML = "";

$this->memberData['members_editor_choice'] = 'std';

$this->templateVars['forumActive'] = "";
$this->__default__templateVars['forumActive'] = "";
if ( IPS_APP_COMPONENT == 'forums' )
{
	$this->templateVars['forumActive'] = "active";
}
else {$this->templateVars['forumActive'] = $this->__default__templateVars['forumActive']; }

$this->templateVars['membersActive'] = "";
$this->__default__templateVars['membersActive'] = "";
if ( IPS_APP_COMPONENT == 'members' )
{
	$this->templateVars['membersActive'] = "active";
}
else {$this->templateVars['membersActive'] = $this->__default__templateVars['membersActive']; }

$this->templateVars['helpActive'] = "";
$this->__default__templateVars['helpActive'] = "";
if ( IPS_APP_COMPONENT == 'core' AND $this->request['module'] == 'help' )
{
	$this->templateVars['helpActive'] = "active";
}
else {$this->templateVars['helpActive'] = $this->__default__templateVars['helpActive']; }

$this->did_first = 0;
$IPBHTML .= "	<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
	<html xml:lang=\"en\" lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\"" . ((IPSLib::fbc_enabled() === TRUE) ? (" xmlns:fb=\"http://www.facebook.com/2008/fbml\"") : ("")) . ">
	<head>
		<meta http-equiv=\"content-type\" content=\"text/html; charset={$this->settings['gb_char_set']}\" />
		<title>{$header_items['title']}" . (($header_items['page']) ? (" {$this->lang->words['page_title_page']} {$header_items['page']}") : ("")) . "</title>
		<link rel=\"shortcut icon\" href='" . (($this->registry->output->isHTTPS) ? ("{$this->settings['board_url_https']}") : ("{$this->settings['board_url']}")) . "/favicon.ico' />
		" . $this->registry->getClass('output')->getTemplate('global')->includeCSS($css) . "
		<!--<meta http-equiv=\"X-UA-Compatible\" content=\"IE=7\" />-->
		" . $this->registry->getClass('output')->getTemplate('global')->includeMeta($metaTags) . "" . $this->registry->getClass('output')->getTemplate('global')->includeFeeds($documentHeadItems) . "" . $this->registry->getClass('output')->getTemplate('global')->includeRTL() . "		
	</head>
	<body id='ipboard_body'>
		<div id='ipbwrapper'>
			<p id='content_jump'><a id='top'></a><a href='#j_content' title='{$this->lang->words['jump_to_content']}' accesskey='m'>{$this->lang->words['jump_to_content']}</a></p>
			<div id='header'>
				<div id='branding'>
					<h1><a href='{$this->settings['board_url']}' title='{$this->settings['board_name']}'>{$this->settings['board_name']}</a>: {$header_items['title']}</h1>
				</div>
						
				" . (($this->memberData['member_id']) ? ("<div id='user_navigation' class='logged_in'>
						<div id='user_info'>
							<p>
								<span class='hide'>{$this->lang->words['logged_in_as']} </span>
								<a id='user_link' class='ipbmenu' href=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "showuser={$this->memberData['member_id']}", 'public','' ), "{$this->memberData['members_seo_name']}", "showuser" ) . "\"  title='{$this->lang->words['your_profile']}'>{$this->memberData['members_display_name']}</a>
							</p>
							<ul id='user_link_menucontent'>
								<li id='user_profile'><a href='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "showuser={$this->memberData['member_id']}", 'public','' ), "{$this->memberData['members_seo_name']}", "showuser" ) . "' title='{$this->lang->words['your_profile']}'>{$this->lang->words['my_profile']}</a></li>
								<li id='user_ucp'><a href=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=core&amp;module=usercp", 'public','' ), "", "" ) . "\" title=\"{$this->lang->words['cp_tool_tip']}\">{$this->lang->words['your_cp']}</a></li>
								" . (($this->memberData['has_blog'] AND IPSLib::appIsInstalled( 'blog' )) ? ("
									<li id='user_blog'><a href='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=blog&amp;module=display&amp;section=blog&amp;mid={$this->memberData['member_id']}", 'public','' ), "", "" ) . "' title=\"{$this->lang->words['go_to_my_blog']}\">{$this->lang->words['my_blog']}</a></li>
								") : ("")) . "
								" . (($this->memberData['has_gallery'] AND IPSLib::appIsInstalled( 'gallery' )) ? ("
									<li id='user_gallery'><a href='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=gallery&amp;module=user&amp;section=user&amp;user={$this->memberData['member_id']}", 'public','' ), "", "" ) . "' title=\"{$this->lang->words['go_to_my_gallery']}\">{$this->lang->words['my_gallery']}</a></li>
								") : ("")) . "
							</ul>
							<ul id='user_other'>
								<li><a href=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=core&amp;module=global&amp;section=login&amp;do=logout&amp;k={$this->member->form_hash}", 'public','' ), "", "" ) . "\">{$this->lang->words['log_out']}</a></li>
								" . (($this->memberData['member_group_id'] == $this->settings['auth_group']) ? ("
									<li><strong><a href=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=core&amp;module=global&amp;section=register&amp;do=reval", 'public','' ), "", "" ) . "\" title='{$this->lang->words['resend_val']}'>{$this->lang->words['resend_val']}</a></strong></li>
								") : ("")) . "
							</ul>
						</div>
					</div>") : ("
					<div id='user_navigation' class='not_logged_in'>
						<a href='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=core&amp;module=global&amp;section=login", 'public','' ), "", "" ) . "' title='{$this->lang->words['sign_in']}'>" . $this->registry->getClass('output')->getReplacement("signin_icon") . " {$this->lang->words['sign_in']}</a>
						<a href=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=core&amp;module=global&amp;section=register", 'public','' ), "", "" ) . "\" title='{$this->lang->words['register']}'>" . $this->registry->getClass('output')->getReplacement("register_icon") . " {$this->lang->words['register']}</a>
					</div>
				
				")) . "
				
				<div id='primary_nav'>
					<ul>
						" . (($this->settings['home_url']) ? ("
							<li id='nav_home' class='left'><a href='{$this->settings['home_url']}' title='{$this->lang->words['homepage_title']}' rel=\"home\">{$this->settings['home_name']}</a></li>
						") : ("")) . "
																								<li id='nav_discussion' class='left " . $this->templateVars["forumActive"] . "'><a href='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "act=idx", 'public','' ), "false", "" ) . "' title='{$this->lang->words['go_to_discussion']}'>{$this->lang->words['discussion']}</a></li>
						<li id='nav_members' class='left " . $this->templateVars["membersActive"] . "'><a href='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=members&amp;section=view&amp;module=list", 'public','' ), "", "" ) . "' title='{$this->lang->words['go_to_memberlist']}'>{$this->lang->words['tb_mlist']}</a></li>
						" . ((is_array($header_items['applications']) AND count($header_items['applications'])) ? ("
							".$this->__f__d0004aa108d971bd0446e860e5970bb4($html,$documentHeadItems,$css,$jsModules,$metaTags,$header_items,$items,$footer_items,$stats)."						") : ("")) . "
					</ul>
				</div>
			
				<div id='secondary_nav'>
					<ul id='breadcrumb' class='left'>
												" . ((!$this->settings['remove_forums_nav'] OR ipsRegistry::$current_application == 'forums') ? ("<li class='first'><a href='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "act=idx", 'public','' ), "false", "" ) . "'>{$this->settings['board_name']}</a></li>
							" . (($this->did_first=1) ? ("") : ("")) . "") : ("")) . "
						".$this->__f__6539d3f75039d4ef4002e1c7ad34f59c($html,$documentHeadItems,$css,$jsModules,$metaTags,$header_items,$items,$footer_items,$stats)."					</ul>
				</div>
			</div>
			<div id='content'>
				<a id='j_content'></a>
				" . (($html) ? ("{$html}") : ("")) . "
				<br class='clear' />
			</div>
			<div id='footer_utilities' class='clearfix clear rounded'>
				<h2 class='hide'>{$this->lang->words['skin_and_lang']}</h2>
				" . (($this->settings['allow_skins']) ? ("" . (($this->memberData['userAgentLocked'] AND ! $this->memberData['userAgentBypass']) ? ("
						<p id='useragent_msg'>
							{$this->lang->words['skin_browser_set']} <a href='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "{$this->settings['query_string_formatted']}&amp;unlockUserAgent=1", 'public','' ), "", "" ) . "'>{$this->lang->words['override_browser_theme']}</a>
						</p>
					") : ("" . (($footer_items['skin_chooser']) ? ("
							<form action=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "{$this->settings['query_string_formatted']}", 'public','' ), "", "" ) . "\" method=\"post\" class='left'>
								<fieldset>
									<input type='hidden' name='k' value='{$this->member->form_hash}' />
									<label for='newSkin' class='hide'>{$this->lang->words['theme_prefix']}</label>
									<select name=\"settingNewSkin\" id='newSkin'>
										{$footer_items['skin_chooser']}
									</select>
									<input type='submit' value='{$this->lang->words['jmp_go']}' class='input_submit alt' id='newSkinSubmit' />
								</fieldset>
							</form>
						") : ("")) . "")) . "") : ("")) . "
				<form action=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "{$this->settings['query_string_formatted']}", 'public','' ), "", "" ) . "\" method=\"post\" class='left'>
					<fieldset>
						<input type='hidden' name='k' value='{$this->member->form_hash}' />
						<input type='hidden' name='setlanguage' value='1' />
						<input type=\"hidden\" name=\"langurlbits\" value=\"{$this->settings['query_string_safe']}&amp;cal_id={$this->request['cal_id']}\" />
						<label for='newLang' class='hide'>{$this->lang->words['language_prefix']}</label>
						<select name=\"langid\" id='newLang'>
								{$footer_items['lang_chooser']}
						</select>
						<input type='submit' class='input_submit alt' value='{$this->lang->words['jmp_go']}' id='newLangSubmit' />
					</fieldset>
				</form>
			</div>
			<!-- __FOOTER__ -->
			<!-- /__FOOTER__ -->
			<!--DEBUG_STATS-->
			<div id='board_footer'>
				<ul id='utility_links' class='left'>
					<li><a href='#top' title='{$this->lang->words['go_to_top']}'>{$this->lang->words['back_to_top']}</a></li>
					<li><a href='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "", 'public','' ), "", "" ) . "' title='{$this->lang->words['sj_home']}'>{$this->lang->words['sj_home']}</a></li>
					<li><a href=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=core&amp;module=global&amp;section=login&amp;do=deleteCookies&amp;k={$this->member->form_hash}", 'public','' ), "", "" ) . "\" title='{$this->lang->words['delete_all_cookies_title']}'>{$this->lang->words['delete_my_cookies']}</a></li>
					<li><a href=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=forums&amp;module=forums&amp;section=markasread&amp;marktype=all&amp;k={$this->member->form_hash}", 'public','' ), "", "" ) . "\" title='{$this->lang->words['mark_all_as_read']}'>{$this->lang->words['mark_board_as_read']}</a></li>
				</ul>
				{$footer_items['copyright']}
			</div>
			{$stats['task']}
		</div>
	</body>
</html>";
return $IPBHTML;
}


function __f__d0004aa108d971bd0446e860e5970bb4($html, $documentHeadItems, $css, $jsModules, $metaTags, $header_items=array(), $items=array(), $footer_items=array(), $stats=array())
{
	$_ips___x_retval = '';
	foreach( $header_items['applications'] as $data )
	{
		
$this->templateVars['appActive'] = "";
$this->__default__templateVars['appActive'] = "";
if ( $data['app_active'] )
{
	$this->templateVars['appActive'] = "active";
}
else {$this->templateVars['appActive'] = $this->__default__templateVars['appActive']; }

		$_ips___x_retval .= "
								" . (($data['app_show']) ? ("
																		<li id='nav_app_{$data['app_dir']}' class=\"left " . $this->templateVars["appActive"] . "\"><a href='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app={$data['app_dir']}", 'public','' ), "false", "" ) . "' title='{$this->lang->words['go_to_prefix']}" . IPSLib::getAppTitle( $data['app_dir'] ) . "'>" . IPSLib::getAppTitle( $data['app_dir'] ) . "</a></li>
								") : ("")) . "
							
";
	}
	$_ips___x_retval .= '';
	return $_ips___x_retval;
}

function __f__6539d3f75039d4ef4002e1c7ad34f59c($html, $documentHeadItems, $css, $jsModules, $metaTags, $header_items=array(), $items=array(), $footer_items=array(), $stats=array())
{
	$_ips___x_retval = '';
	foreach( $items['navigation'] as $idx => $data )
	{
		
		$_ips___x_retval .= "
							<li" . ((!$this->did_first) ? (" class='first'") : ("")) . ">" . (($this->did_first) ? ("<span class='nav_sep'>&gt;</span>") : ("")) . " " . (($data[1]) ? ("<a href='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "{$data[1]}", 'public','' ), "$data[2]", "$data[3]" ) . "' title='{$this->lang->words['nav_return_to']}{$data[0]}'>") : ("")) . "{$data[0]}" . (($data[1]) ? ("</a>") : ("")) . "</li>
							" . (($this->did_first=1) ? ("") : ("")) . "
						
";
	}
	$_ips___x_retval .= '';
	return $_ips___x_retval;
}

/* -- include_highlighter --*/
function include_highlighter($load_when_needed=0) {
$IPBHTML = "";
$IPBHTML .= "<!-- none -->";
return $IPBHTML;
}

/* -- include_lightbox --*/
function include_lightbox() {
$IPBHTML = "";
$IPBHTML .= "<!-- none -->";
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
	".$this->__f__742ece56b5e550f4b112852e54841fea($css)."	" . (($this->settings['use_minify'] AND count($this->minify)) ? ("
		<link rel=\"stylesheet\" type=\"text/css\" media='screen' href=\"{$this->settings['public_dir']}min/index.php?f=" . str_replace( $this->settings['public_dir'], 'public/', implode( ',', $this->minify ) ) . "\" />
	") : ("")) . "") : ("")) . "
" . ((is_array( $css['inline'] ) AND count( $css['inline'] )) ? ("
	".$this->__f__db580d8680a05bf930fd11b775ccf613($css)."") : ("")) . "
<!--[if lte IE 7]>
	<link rel=\"stylesheet\" type=\"text/css\" title='Main' media=\"screen\" href=\"{$this->settings['public_dir']}style_css/{$this->registry->output->skin['_csscacheid']}/ipb_ie.css\" />
<![endif]-->";
return $IPBHTML;
}


function __f__742ece56b5e550f4b112852e54841fea($css)
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

function __f__db580d8680a05bf930fd11b775ccf613($css)
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
	".$this->__f__b79591e5f9b4070dcd3139d00370f84c($documentHeadItems)."") : ("")) . "";
return $IPBHTML;
}


function __f__58075bbc376d67860beaeaac654b502f($documentHeadItems,$type='',$idx='')
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

function __f__b79591e5f9b4070dcd3139d00370f84c($documentHeadItems)
{
	$_ips___x_retval = '';
	foreach( $documentHeadItems as $type => $idx )
	{
		
		$_ips___x_retval .= "
		".$this->__f__58075bbc376d67860beaeaac654b502f($documentHeadItems,$type,$idx)."	
";
	}
	$_ips___x_retval .= '';
	return $_ips___x_retval;
}

/* -- includeJS --*/
function includeJS($jsModules) {
$IPBHTML = "";
$IPBHTML .= "";
return $IPBHTML;
}

/* -- includeMeta --*/
function includeMeta($metaTags) {
$IPBHTML = "";
$IPBHTML .= "" . ((is_array( $metaTags ) AND count( $metaTags )) ? ("
	".$this->__f__418cca66b8e0b868b3138adf38f54296($metaTags)."") : ("")) . "";
return $IPBHTML;
}


function __f__418cca66b8e0b868b3138adf38f54296($metaTags)
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
$IPBHTML .= "".$this->__f__9c6782cdaa555fb88a2fdf6a15871c9b()."<script type='text/javascript'>
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


function __f__9c6782cdaa555fb88a2fdf6a15871c9b()
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
$IPBHTML .= "";
return $IPBHTML;
}

/* -- paginationTemplate --*/
function paginationTemplate($work, $data) {
$IPBHTML = "";
$IPBHTML .= "" . (($work['pages'] > 1) ? ("<ul class='pagination left'>
		<li class='total'>({$work['pages']} {$this->lang->words['tpl_pages']})</li>
		<li class='pagejump clickable pj{$data['uniqid']}'>
			" . $this->registry->getClass('output')->getReplacement("dropdown") . "
		</li>
		" . ((1 < ($work['current_page'] - $data['dotsSkip'])) ? ("
			<li class='first'><a href='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "{$data['baseUrl']}&amp;{$data['startValueKey']}=0", 'public','' ), "{$data['seoTitle']}", "{$data['seoTemplate']}" ) . "' title='{$this->lang->words['tpl_gotofirst']}' rel='start'>&laquo; {$this->lang->words['ps_first']}</a></li>
		") : ("")) . "
		" . (($work['current_page'] > 1) ? ("
			<li class='prev'><a href=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "{$data['baseUrl']}&amp;{$data['startValueKey']}=" . intval( $data['currentStartValue'] - $data['itemsPerPage'] ) . "", 'public','' ), "{$data['seoTitle']}", "{$data['seoTemplate']}" ) . "\" title=\"{$this->lang->words['tpl_prev']}\" rel='prev'>&larr;</a></li>
		") : ("")) . "
		" . ((is_array( $work['_pageNumbers'] ) && count( $work['_pageNumbers'] )) ? ("
			".$this->__f__d300512bd1e9695c57f10c32940c5e47($work,$data)."		") : ("")) . "
		" . (($work['current_page'] < $work['pages']) ? ("
			<li class='next'><a href=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "{$data['baseUrl']}&amp;{$data['startValueKey']}=" . intval( $data['currentStartValue'] + $data['itemsPerPage'] ) . "", 'public','' ), "{$data['seoTitle']}", "{$data['seoTemplate']}" ) . "\" title=\"{$this->lang->words['tpl_next']}\" rel='next'>&rarr;</a></li>
		") : ("")) . "
		" . ((isset( $work['_showEndDots'] ) && $work['_showEndDots']) ? ("
			<li class='last'><a href=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "{$data['baseUrl']}&amp;{$data['startValueKey']}=" . intval( ( $work['pages'] - 1 ) * $data['itemsPerPage'] ) . "", 'public','' ), "{$data['seoTitle']}", "{$data['seoTemplate']}" ) . "\" title=\"{$this->lang->words['tpl_gotolast']}\" rel='last'>{$this->lang->words['ps_last']} &raquo;</a></li>
		") : ("")) . "
	</ul>") : ("
	<span class='pagination no_pages left'>{$this->lang->words['page_1_of_1']}</span>
")) . "";
return $IPBHTML;
}


function __f__d300512bd1e9695c57f10c32940c5e47($work, $data)
{
	$_ips___x_retval = '';
	foreach( $work['_pageNumbers'] as $_real => $_page )
	{
		
		$_ips___x_retval .= "
				" . (($_real == $data['currentStartValue']) ? ("
					<li class='active'>{$_page}</li>
				") : ("
					<li><a href=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "{$data['baseUrl']}&amp;{$data['startValueKey']}={$_real}", 'public','' ), "{$data['seoTitle']}", "{$data['seoTemplate']}" ) . "\" title=\"$_page\">{$_page}</a></li>
				")) . "
			
";
	}
	$_ips___x_retval .= '';
	return $_ips___x_retval;
}

/* -- signature_separator --*/
function signature_separator($sig="") {
$IPBHTML = "";
$IPBHTML .= "";
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
$IPBHTML .= "";
return $IPBHTML;
}



}

/*--------------------------------------------------*/
/* END OF FILE                                      */
/*--------------------------------------------------*/

?>