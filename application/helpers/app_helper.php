<?php
function create_slug($string)
{
   $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
   return strtolower($slug);
}

function calc_square_ft($width,$height) {
	$retval = roundUp(ceil($width) * ceil($height)/144, 2);
	return $retval;
}

function get_left_category($category_data, $header_name)
{
  $array_data = array();
  $header = $header_name; //'Mirror' ;
  foreach($category_data as $cat)
  {
      if($cat->isHeader=='x')
      {
          $header = $cat->CatTitle;
      }
      $array_data[$header][] = array($cat->id,$cat->CatTitle);
  }
  return $array_data;
}

function get_timeago($ptime)
{
    $estimate_time = time() - $ptime;
    if( $estimate_time < 1 )
    {
        return 'less than 1 second ago';
    }
    $condition = array(
                12 * 30 * 24 * 60 * 60  =>  'year',
                30 * 24 * 60 * 60       =>  'month',
                24 * 60 * 60            =>  'day',
                60 * 60                 =>  'hour',
                60                      =>  'minute',
                1                       =>  'second'
    );
    foreach( $condition as $secs => $str )
    {
        $d = $estimate_time / $secs;
        if( $d >= 1 )
        {
            $r = round( $d );
            //return 'about ' . $r . ' ' . $str . ( $r > 1 ? 's' : '' ) . ' ago';
			return  $r . ' ' . $str . ( $r > 1 ? 's' : '' ) . ' ago';
        }
    }
}

function get_date_with_time($date)
{
	return date('d-m-Y h:i:A',strtotime($date));
}

function encode_url($str)
{
	return $str; //urlencode(base64_encode($str));
}

function decode_url($str)
{
	return $str; //urldecode(base64_decode($str));
}

function get_cat_id($str)
{
	$create_array = explode('_',$str);
	return $create_array[1];
}

function create_image_unique($file_name)
{
	$array = explode('.',$file_name);
	$file_extension = end($array);
	$new_file = substr(str_shuffle('12345678910'),0,1).str_shuffle(time()).substr(str_shuffle('12345678910'),0,1).'.'.$file_extension;
	return $new_file;
}

function image_extension($file_name)
{
	$array = explode('.',$file_name);
	$file_extension = end($array);
	return $file_extension;
}

function check_profile_pic($dir,$file)
{
	if(is_file($dir.$file))
	{
		return base_url($dir).$file;
	}
	else
	{
		return base_url("assets/front/images/")."default-avatar.png";
	}
}

function delete_file($dir,$file)
{
	if(is_file($dir.$file))
	{
		return unlink($dir.$file);
	}
}

function admin_caregory_breadcrumbs($data)
{
	if($data=='Root')
	{
		echo '<strong>Root</strong>';
	}
	else
	{
		echo $data;
	}
}

function home_slider_class($no)
{
	if($no%2==0)
	{
		return 'slide_style_left';
	}
	else
	{
		return 'slide_style_right';
	}
	//slide_style_center
}


function roundUp( $value, $precision=0 ) {
    if ( $precision == 0 ) {
        $precisionFactor = 1;
    } else {
        $precisionFactor = pow( 10, $precision );
    }
    return ceil( $value * $precisionFactor )/$precisionFactor;
}


function format_fractions($number){
	$parts = explode(".",$number);
	if(count($parts) == 1){
		return $number;
	}
	if ($parts[1] == 0) {
		return $parts[0];
	}
	$dec = $parts[1];
	if($dec == "125" || $dec == "1250"){
		$frac = "1 8";
	}elseif($dec == "167" || $dec == "1670"){
		$frac = "1 6";
	}elseif($dec == "25" || $dec == "2500"){
		$frac = "1 4";
	}elseif($dec == "333" || $dec == "3330"){
		$frac = "1 3";
	}elseif($dec == "375" || $dec == "3750"){
		$frac = "3 8";
	}elseif($dec == "5" || $dec == "5000"){
		$frac = "1 2";
	}elseif($dec == "625" || $dec == "6250"){
		$frac = "5 8";
	}elseif($dec == "667" || $dec == "6670"){
		$frac = "2 3";
	}elseif($dec == "75" || $dec == "7500"){
		$frac = "3 4";
	}elseif($dec == "8335" || $dec == "8335"){
		$frac = "5 6";
	}elseif($dec == "875" || $dec == "8750"){
		$frac = "7 8";
	}
	if($frac == ""){
		return $number;
	}
	$fparts = explode(" ",$frac);
	$frac = "<sup>".$fparts[0]."</sup>&frasl;<sub>".$fparts[1]."</sub>";
	return $parts[0]." ".$frac;
}

?>
