<?php 
if (!defined('MODX_BASE_PATH')) {
    die('What are you doing? Get out of here!');
}

if (empty($_SESSION['mgrInternalKey'])) {
    return;
}
$_lang = array();
$plugin_path = MODX_BASE_PATH . "assets/plugins/dashboard_widgets/EvoCommunity/";

include($plugin_path . 'lang/english.php');
if(file_exists($plugin_path . 'lang/' . $modx->config['manager_language'] . '.php')){
	include($plugin_path . 'lang/' . $modx->config['manager_language'] . '.php');
}
$e = &$modx->Event;
switch($e->name){
	case 'OnManagerWelcomeHome':
		$widgets['evo-news'] = array(
			'menuindex' => $params['menuindex'],
			'id' => 'evo-news',
			'cols' => 'col-sm-12',
			'icon' => 'far fa-comment',
			'title' => $_lang['title'],
			'body' => '<div class="card-body">
				<ul class="evo-news-list">
					<li class="evo-news-yt">
						<a target="_blank" href="https://www.youtube.com/channel/UCS7ZUn62Qln_OhHSVaFTTig"><i class="fab fa-youtube  "></i>' . $_lang['yt'] .'</a>
					</li>
					<li class="evo-news-telegram1">
						
						<a target="_blank" href="https://t.me/evo_cms"><i class="fab fa-telegram  "></i>' . $_lang['telegram1'] .'</a>
					</li>
					<li class="evo-news-vk">
						<a target="_blank" href="https://vk.com/evolutioncms"><i class="fab fa-vk  "></i>' . $_lang['vk'] .'</a>
					</li>
					<li class="evo-news-evoim">
						<a target="_blank" href="https://evocms.ru/"><i class="far fa-copyright  "></i>' . $_lang['evoim'] .'</a>
					</li>
					<li class="evo-news-docs">
						<a target="_blank" href="https://github.com/evocms-community/docs"><i class="far fa-file-code  "></i>' . $_lang['docs'] .'</a>
					</li>
				</ul>
			</div>

			<link rel="stylesheet" type="text/css" href="/assets/plugins/dashboard_widgets/EvoCommunity/css/main.css">
			'
		);
		$modx->event->output(serialize($widgets));
		break;
}
