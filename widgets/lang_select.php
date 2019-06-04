<?php

$language = array(
	'lang_es',
        'lang_de',
        'lang_dk',
        'lang_en',
        'lang_fr'
);

foreach ($language as $lang) {
if (isset($_GET['langSelect-'.$lang.''])) {
        header('Location: /');
        shell_exec("sudo /usr/local/bin/swizzin/panel/lang/langSelect-$lang");
}}

?>
