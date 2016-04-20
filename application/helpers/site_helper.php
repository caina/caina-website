<?php
/**
 * Function Name
 *
 * Function description
 *
 * @access	public
 * @param	type	name
 * @return	type	
 */
 
if (! function_exists('dump'))
{
	function dump($param = '',$die=true)
	{
		echo "<pre>";
		print_r($param);
		echo "</pre>";
		if($die){
			die;
		}
	}
}

/**
 * VAI NOS GERAR UMA DAS 'TILES' DO BLOG
 *
 * 
 * Function description
 *
 * @access	public
 * @param	object Passar um objeto que venha do Blog_model e que tenha passado pelo prepare_data
 * @param   int o estilo dela: Se for 1 ou 2 vão ser os do bloco quadrado da home, 3,4 e 5 são os demais, se passar false, traz um aleatorio não sendo 1 ou 2
 * @return	type	
 */
if (! function_exists('load_blog_article'))
{
	function load_blog_article($type=false,$blog_data)
	{
		if(empty($blog_data)){
			return false;
		}
		
		$ci =&get_instance();
		if(!$type){
			// a diferenca da divisao do id por tres nos das 3 retornos, 0,1 ou 2, que somamos com o 3 pra retornar o template
			// entao uma postagem sempre tem o mesmo template
			$type = ($blog_data->id %3) + 3;
		}

		


		return $ci->load->view("caina/pages/blog/template/{$type}", array("blog"=>$blog_data), TRUE);
	}
}

if ( ! function_exists('image_url'))
{
	function image_url($uri = '',$w=false, $h=false,$crop=false)
	{
		$CI =& get_instance();

		if($CI->config->item("development")){
			if (!file_exists(getcwd()."/assets/upload/{$uri}")) {
				copy("http://www.douglascaina.com.br/assets/upload/{$uri}", getcwd()."/assets/upload/{$uri}");
			}
		}
		if(!$w){
			return base_url("assets/upload/{$uri}");
		}
		$crop = $crop?"yes":"no";

		return site_url("images/{$uri}?height={$h}&width={$w}&crop={$crop}");
	}
}

if (! function_exists('url_to_id'))
{
	function url_to_id($url)
	{
		$id = explode("-", $url);
		return end($id);
	}
}

if (! function_exists('strtourl'))
{
	function strtourl($str)
	{
		return url_title(convert_accented_characters(strtolower($str)));
	}
}

if ( ! function_exists('send_email_helper'))
{
	function send_email_helper($email_to,$subject,$message_)
	{


		$ci =& get_instance();
		extract($_POST);

		

		$ip = get_client_ip_env();
		// $details = (file_get_contents("http://ipinfo.io/{$ip}/json"));
		$details = array();
		// print_r($details);die;
		$url = 'http://pando.apanda.com.br/index.php/api/send_email';
		$fields = array(
			'company_id' => urlencode($ci->config->item("company_code")),
			'name' => urlencode(@$nome),
			'email' => urlencode($email),
			'email_to' => $email_to,
			'subject'=>urlencode($subject),
			'message' => urlencode($message_),
			'details' => ''
		);

		// dump($fields);die;

		$fields_string = "";
		//url-ify the data for the POST
		foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
		rtrim($fields_string, '&');

		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL, $url);
		curl_setopt($ch,CURLOPT_POST, count($fields));
		curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
		curl_exec($ch);
		curl_close($ch);
		// echo $result; die;
	}
}

function get_client_ip_env() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';

    return $ipaddress;
}


?>