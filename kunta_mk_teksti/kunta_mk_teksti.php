<?php
/**
 * Municipalities and Provinces, from Stat.fi to where you need them.
 *
 * Get the kunta_mk_teksti.txt and place it to same folder as this file.
 * Open this file in your browser (needs to be on server that runs php)
 * and see list of Provinces and Municipalities listed alphabetically.
 *
 * @see https://www.stat.fi/meta/luokitukset/kunta/001-2017/luokitusavaimet.html Kunnat 2017 / Maakunta 2017
 * @see https://www.stat.fi/meta/luokitukset/kunta/001-2017/kunta_mk_teksti.txt
 * @var array
 */
$list = file('./kunta_mk_teksti.txt');
$template = "%s/%s"; // 1st %s is province, 2nd %s is municipality
$final = [];

foreach ($list as $row) {
    list($mCode, $muni, $pCode, $province) = explode("\t", $row);

    if (!is_numeric($mCode)) {
    	continue; // Skip headers and empty lines
    }

    $province = str_replace(' - Åland', '', $province);

    $final[] = sprintf($template, trim($province), trim($muni));
}

asort($final);

echo '<pre>';
foreach ($final as $line) {
    echo $line . "\n";
}
