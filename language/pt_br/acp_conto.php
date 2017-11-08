<?php
/**
 *
 * Countdown Disable Board. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016, Galandas, http://phpbb3world.altervista.org
 * @license GNU General Public License, version 2 (GPL-2.0)
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.0.3] (https://github.com/phpBBTraducoes)
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'CNT_ROV_TEXT'                     => 'Configuração da cor da imagem do texto',
    'CNT_ROV_HOURS'                    => 'Horas',
    'CNT_ROV_ALLOW'                    => 'Ativar/Desativar',
    'CNT_DAYS_ALLOW'                   => 'Ativar Dias',
    'CNT_HOURS_ALLOW'                  => 'Ativar Horas',
    'CNT_MINS_ALLOW'                   => 'Ativar Minutos',
    'CNT_SECS_ALLOW'                   => 'Ativar Segundos',	
    'CNT_ROV_ALLOW_EXPLAIN'            => 'Aqui você pode decidir se ativar ou desativar o Countdown Disable Board.<strong>Aviso: se (Desativar o forum)</strong> estiver ativado, você também verá o <strong>(Countdown Disable Board)</strong> se estiver ativado, se desativado, você só verá o padrão do PhpBB.',
	'CNT_ROV_VERSION'		           => 'Versão',	
    'ACP_ROV_SETTINGS'                 => 'Configuração',
    'ACP_ROV_TITLE'                    => 'Countdown Disable Board',
    'CTN_ROV_CREDITS'                  => 'Extensão Countdown Disable Board por <a href="http://phpbb3world.altervista.org"><strong>Galandas</strong></a>',
	'CNT_ROV_SETTING_SAVED'            => 'Configurações atualizadas com sucesso!',
	'CTN_ROV_DONATE'			       => '<a href="https://www.paypal.me/Galandas"><strong>Doar</strong></a>',
	'CTN_ROV_DONATE_EXPLAIN'	       => 'Se você gosta desta extensão considere uma oferta de doação para uma pizza',	
    'CNT_ROV_DAY'                      => 'Digite o número de dias',
    'CNT_ROV_DAY_EXPLAIN'              => 'Aqui você deve inserir o número de dias, exemplo 06.',	
    'CNT_ROV_MONTH'                    => 'Digite o mês',
    'CNT_ROV_MONTH_EXPLAIN'            => 'Aqui você deve inserir o mês, exemplo 06.',	
    'CNT_ROV_YEAR'                     => 'Digite o ano',
    'CNT_ROV_YEAR_EXPLAIN'             => 'Aqui você deve inserir o ano, exemplo 2020.',	
    'CNT_ROV_HOUR'                     => 'Digite o número de horas',
    'CNT_ROV_HOUR_EXPLAIN'             => 'Aqui você deve inserir as horas, exemplo 06, você também pode colocar 00.',	
    'CNT_ROV_MIN'                      => 'Digite o número de minutos',
    'CNT_ROV_MIN_EXPLAIN'              => 'Aqui você deve inserir os minutos, exemplo 08, você também pode colocar 00.',	
    'CNT_ROV_SEC'                      => 'Digite o número de segundos',
    'CNT_ROV_SEC_EXPLAIN'              => 'Aqui você deve inserir os segundos, exemplo 03, você também pode colocar 00.',
    'CNT_ANIMATION'                    => 'Animação',
    'CNT_ANIMATION_EXPLAIN'            => 'Escolha o tipo de círculo Animação',
    'CNT_SMOOTH'                       => 'Suave',
    'CTN_TICKS'                        => 'Carrapatos',
    'CTN_ROV_DATES'                    => 'Configurações',	
	'CNT_ROV_START'                    => 'Texto exibido',
	'CNT_ROV_START_EXPLAIN'            => 'Digite o texto que deseja mostrar aos usuários quando o dorum estiver desabilitado. O HTML permite um máximo de (255 caracteres permitidos).',	
	'CNT_ROV_COLOR'                    => 'Cor de fundo',
	'CNT_ROV_COLOR_EXPLAIN'            => 'Aqui você pode inserir uma cor de fundo personalizada usando Color Picker integrado.<br />Usa um exemplo hexadecimal de código de cores:<span style = "color: # E58688"><strong>E58688</strong></span>',	
	'CNT_ROV_IMAGE'                    => 'Informação da imagem',	
	'CNT_ROV_IMAGE_EXPLAIN'            => 'Aqui você pode selecionar uma imagem das 3 disponíveis, abaixo do nome.<br /><samp>info1.png</samp> - <samp>info2.png</samp> - <samp>info3.png</samp >',
	// Text index	
	'CONTO_GIO'		    => 'Dias',
	'CONTO_ORE'	        => 'Horas',
	'CONTO_MIN'	        => 'Minutos',
	'CONTO_SEC'	        => 'Segundos',
));
