<?php
if( is_mobile() ) {
	header( 'Location: mobile/' . ( $_SERVER['QUERY_STRING'] ? '?'. $_SERVER['QUERY_STRING'] : '' ) );
	exit();
}
?>
