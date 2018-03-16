<?php

if ( ! function_exists('set_session_message')) {
	function set_session_message($status, $message)
	{
		$_ci =& get_instance();
		
		$session_data = [
			'status'  => $status,
			'message' => $message
		];

		$_ci->session->set_flashdata($session_data);
	}
}

if ( ! function_exists('format_to_indo')) {
	function format_to_indo($date, $showDay = false)
	{

		$hari  = array ( 1 => 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu');
		$bulan = array ( 1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus','September', 'Oktober', 'November', 'Desember');
		
		$split 	  = explode('-', $date);
		$tgl_indo = (int) $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
		
		if ($showDay) {
			$num = date('N', strtotime($date));
			return $hari[$num] . ', ' . $tgl_indo;
		}

		return $tgl_indo;
	}
}

/**
 * @param $date string yyyy-MM-dd (2018-02-25)
 * @return string dd/MM/yyyy
 */
if ( ! function_exists('format_to_indo_pattern')) {
	function format_to_indo_pattern($date)
	{
		$ex  = explode('-', $date);
		$day   = (int)$ex[2] < 10 ? '0'.(int)$ex[2] : $ex[2];
		$month = (int)$ex[1] < 10 ? '0'.(int)$ex[1] : $ex[1];

		return $day.'/'.$month.'/'.$ex[0].' 00.00';
	}
}

/**
 * @param  $datetime string yyyy-MM-dd HH:mm:ss
 * @return string 
 */
if ( ! function_exists('get_time')) {
	function get_time($datetime)
	{
		return substr(explode(' ', $datetime)[1], 0, 5);
	}
}

if ( ! function_exists('set_active')) {
	function set_active($menu)
	{
		$_ci =& get_instance();

		$controller = $_ci->uri->segment(1);
		$menu = explode(',', $menu);
		if (in_array($controller, $menu)) {
			echo 'active';
		}
	}
}

if ( ! function_exists('set_selected')) {
	function set_selected($value, $resource)
	{
		$_ci =& get_instance();

		if (is_array($resource)) {
			if (in_array($value, $resource)) {
				echo 'selected="selected"';
			}
		} else {
			if ($value == $resource) {
				echo 'selected="selected"';
			}
		}
	}
}

if ( ! function_exists('get_current_url')) {
	function get_current_url()
	{
	    $_ci =& get_instance();

	    $url = $_ci->config->site_url($_ci->uri->uri_string());
	    return $_SERVER['QUERY_STRING'] ? $url.'?'.$_SERVER['QUERY_STRING'] : $url;
	}
}

if ( ! function_exists('redirect_or_back')) {
	function redirect_or_back($url)
	{
	    $_ci =& get_instance();
	    if (!empty($_ci->input->get('back_url'))) {
	    	redirect($_ci->input->get('back_url'));
	    }
	    redirect($url);
	}
}

if ( ! function_exists('in_array_field')) {
	function in_array_field($needle, $needle_field, $haystack, $strict = false) { 
	    if ($strict) { 
	        foreach ($haystack as $item) 
	            if (isset($item->$needle_field) && $item->$needle_field === $needle) 
	                return true; 
	    } 
	    else { 
	        foreach ($haystack as $item) 
	            if (isset($item->$needle_field) && $item->$needle_field == $needle) 
	                return true; 
	    } 
	    return false; 
	} 
}

if ( ! function_exists('array_if_null')) {
	function array_if_null($data) { 
		if (empty($data)) {
			return array();
		}
		return $data;
	} 
}

if ( ! function_exists('get_date_diff')) {
	function get_date_diff($date1, $date2) { 
		$date_1 = date_create($date1);
		$date_2 = date_create($date2);

		return date_diff($date_1, $date_2);
	} 
}