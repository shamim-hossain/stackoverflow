<?php if(!defined('SHAMIM')) die('No direct script access allowed');

	$urlSplit = explode('/',$_SERVER['REQUEST_URI']);
	$url_len = count($urlSplit);
	if(@$urlSplit[$url_len-1]=='') $url_len--;
	
	$url_cng = 0; $curReqPage = '';

	if($url_len>(2-$url_cng) && @$urlSplit[2-$url_cng]!='index.php'){
		$curReqPage = strtolower($urlSplit[2-$url_cng]);
	}
	
	// Current page filtering	
	if($curReqPage=='question'){
		$getQT = strtolower($urlSplit[2-$url_cng]);
		if(@$urlSplit[3-$url_cng]<>'') $getQID = filter_var($urlSplit[3-$url_cng],FILTER_SANITIZE_NUMBER_INT);
		if(@$urlSplit[4-$url_cng]=='page'){
			if($urlSplit[5-$url_cng]<>'') $curPage = $urlSplit[5-$url_cng];
			else $curPage = 1;
		}
	}
	elseif($curReqPage=='details'){
		$getDT = strtolower($urlSplit[3-$url_cng]);
		$getDI = strtolower($urlSplit[4-$url_cng]);
		$getDI = filter_var($getDI,FILTER_SANITIZE_NUMBER_INT);
	}
?>