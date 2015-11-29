<?php 
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
?>