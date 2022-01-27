<?php 

function page()
{
	$page = isset($_GET['page']) ? $_GET['page'] : null;

	if (!is_null($page))
	{
		return $page;
	} else {
		return false;
	}
}

function base_url($url = null)
{
	if (is_null($url)) {
		return 'http://localhost/admin-riantopup/';
	} else {
		return 'http://localhost/admin-riantopup/' . $url;
	}
}


function url($url = null)
{
	if (!is_null($url)) {
		return base_url() . $url;
	} else {
		echo "Error function \"goto\" : Please enter the url!";
	}
}
