<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
function scrapeUrl($url)
{

    $urlData = new stdClass();
    include_once APPPATH."libraries/simple_html_dom.php";
    $html = file_get_html($url);
    $ogtags = array();
    foreach($html->find('meta') as $meta) {
        if (isset($meta->property) && isset($meta->content)) {
            if(strpos($meta->property, 'og') !==false) {
                $ogtags[$meta->property] = $meta->content;
            }
        }
    }
    if (!key_exists("og:title", $ogtags)) {
        $title = $html->find('title');
        $title = $title[0];
        $ogtags["og:title"] = $title->plaintext;
    }
    $urlData->title = html_entity_decode($ogtags['og:title']);
    $urlData->image_url = html_entity_decode($ogtags['og:image']);
    return $urlData;

}
?>
