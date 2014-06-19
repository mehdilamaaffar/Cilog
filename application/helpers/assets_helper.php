<?php

function css_url($url)
{
	return base_url() . 'assets/css/' . $url . '.css';
}

function js_url($url)
{
	return base_url() . 'assets/js/' . $url . '.js';
}

function img_url($url)
{
	return base_url() . 'assets/img/' . $url;
}

?>