<?php
 // print_r();
 require("../config.php");

 $template = 
     str_replace(array(
			'{%forum%}',
            '{%nameproject%}',
            '{%isclass%}'
		),
		array(
			$config['forum'],
            $config['_name_project_'],
            ' class="home"'
		),
		file_get_contents('../../templates/header.tpl')) .
     str_replace(
		array(
			'{%group%}',
			'{%ip%}',
			'{%port%}',
            '{%nameproject%}'
		),
		array(
			$config['vk'],
			$config['_ip_'],
			$config['_port_'],
            $config['_name_project_']
		),
		file_get_contents('../../templates/main.tpl')) . 
        str_replace(array(
			'{%forum%}',
            '{%group%}',
            '{%nameproject%}',
			'{%ip%}',
			'{%port%}',
            '{%youtube%}'
		),
		array(
			$config['forum'],
            $config['vk'],
            $config['_name_project_'],
            $config['_ip_'],
			$config['_port_'],
            $config['youtube']
		),
		file_get_contents('../../templates/footer.tpl'));

	/* Выходим, показав сам шаблон */
	exit($template);
?>