<?php
if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}

global $ttl;
$ttl = 1193855614;

global $saved_cache;

$saved_cache = array(
  'config' => array(
    'sentinel' => array(
      'admin_contact' => 'webmaster@yoursite.com',
      'block_perpage' => '50',
      'block_sort_column' => 'date',
      'block_sort_direction' => 'desc',
      'crypt_salt' => 'N$',
      'display_link' => '3',
      'display_reason' => '3',
      'force_nukeurl' => '0',
      'help_switch' => '1',
      'htaccess_path' => '',
      'http_auth' => '0',
      'lookup_link' => 'http://www.DNSstuff.com/tools/whois.ch?ip=',
      'page_delay' => '5',
      'prevent_dos' => '1',
      'proxy_reason' => 'admin_proxy_reason.tpl',
      'proxy_switch' => '0',
      'santy_protection' => '1',
      'self_expire' => '0',
      'site_reason' => 'admin_site_reason.tpl',
      'site_switch' => '0',
      'staccess_path' => '',
      'track_active' => '1',
      'track_max' => '604800',
      'track_perpage' => '50',
      'track_sort_column' => '6',
      'track_sort_direction' => 'desc',
      'ip_reason' => 'admin_ip_reason.tpl',
      'ip_switch' => '0',
      'ftaccess_path' => '',
      'flood_delay' => '2',
      'disable_switch' => '0',
      'track_clear' => '0',
      'blocked_clear' => '0',
      'version_check' => '$checktime',
      'version_newest' => '2.5.08',
      'version_number' => '2.5.08',
    ),
    'main_module' => 'News',
    'news' => array(
      'columns' => '0',
      'readmore' => '0',
      'texttype' => '0',
      'notifyauth' => '0',
      'homenumber' => '0',
      'hometopic' => '0',
      'version_number' => '1.1.6',
    ),
    'metatags' => array(
      0 => array(
        'meta_name' => 'resource-type',
        'meta_content' => 'document',
      ),
      1 => array(
        'meta_name' => 'distribution',
        'meta_content' => 'global',
      ),
      2 => array(
        'meta_name' => 'author',
        'meta_content' => 'Nuke-Evolution',
      ),
      3 => array(
        'meta_name' => 'copyright',
        'meta_content' => 'Copyright (c) by Nuke-Evolution',
      ),
      4 => array(
        'meta_name' => 'keywords',
        'meta_content' => 'Nuke-Evolution, evo, pne, evolution, nuke, php-nuke, software, downloads, community, forums, bulletin, boards, cms, nuke-evo, phpnuke',
      ),
      5 => array(
        'meta_name' => 'description',
        'meta_content' => 'Nuke-Evolution',
      ),
      6 => array(
        'meta_name' => 'robots',
        'meta_content' => 'index, follow',
      ),
      7 => array(
        'meta_name' => 'revisit-after',
        'meta_content' => '1 days',
      ),
      8 => array(
        'meta_name' => 'rating',
        'meta_content' => 'general',
      ),
    ),
    'favicon' => 'favicon.ico',
    'custom_head' => array(
      0 => 'custom_head',
    ),
    'module_cats' => array(
      0 => array(
        0 => '1',
        'cid' => '1',
        1 => 'Fõ Oldal',
        'name' => 'Fõ Oldal',
        2 => 'icon_home.gif',
        'image' => 'icon_home.gif',
        3 => '0',
        'pos' => '0',
        4 => '2',
        'link_type' => '2',
        5 => 'index.php',
        'link' => 'index.php',
      ),
      1 => array(
        0 => '2',
        'cid' => '2',
        1 => 'Tagoknak',
        'name' => 'Tagoknak',
        2 => 'icon_members.gif',
        'image' => 'icon_members.gif',
        3 => '1',
        'pos' => '1',
        4 => '0',
        'link_type' => '0',
        5 => '',
        'link' => '',
      ),
      2 => array(
        0 => '3',
        'cid' => '3',
        1 => 'Közösség',
        'name' => 'Közösség',
        2 => 'icon_community.gif',
        'image' => 'icon_community.gif',
        3 => '2',
        'pos' => '2',
        4 => '0',
        'link_type' => '0',
        5 => '',
        'link' => '',
      ),
      3 => array(
        0 => '4',
        'cid' => '4',
        1 => 'Statisztika',
        'name' => 'Statisztika',
        2 => 'icon_poll.gif',
        'image' => 'icon_poll.gif',
        3 => '3',
        'pos' => '3',
        4 => '0',
        'link_type' => '0',
        5 => '',
        'link' => '',
      ),
      4 => array(
        0 => '5',
        'cid' => '5',
        1 => 'Letöltés & Link',
        'name' => 'Letöltés & Link',
        2 => 'icon_web.gif',
        'image' => 'icon_web.gif',
        3 => '4',
        'pos' => '4',
        4 => '0',
        'link_type' => '0',
        5 => '',
        'link' => '',
      ),
      5 => array(
        0 => '6',
        'cid' => '6',
        1 => 'Hírek',
        'name' => 'Hírek',
        2 => 'icon_pencil.gif',
        'image' => 'icon_pencil.gif',
        3 => '5',
        'pos' => '5',
        4 => '0',
        'link_type' => '0',
        5 => '',
        'link' => '',
      ),
      6 => array(
        0 => '7',
        'cid' => '7',
        1 => 'Általános',
        'name' => 'Általános',
        2 => 'icon_general.gif',
        'image' => 'icon_general.gif',
        3 => '6',
        'pos' => '6',
        4 => '0',
        'link_type' => '0',
        5 => '',
        'link' => '',
      ),
    ),
    'smilies' => array(
      0 => array(
        0 => '43',
        'smilies_id' => '43',
        1 => ':neutral:',
        'code' => ':neutral:',
        2 => 'icon_neutral.gif',
        'smile_url' => 'icon_neutral.gif',
        3 => 'Neutral',
        'emoticon' => 'Neutral',
        4 => '0',
        'smile_stat' => '0',
      ),
      1 => array(
        0 => '32',
        'smilies_id' => '32',
        1 => ':twisted:',
        'code' => ':twisted:',
        2 => 'icon_twisted.gif',
        'smile_url' => 'icon_twisted.gif',
        3 => 'Twisted Evil',
        'emoticon' => 'Twisted Evil',
        4 => '0',
        'smile_stat' => '0',
      ),
      2 => array(
        0 => '44',
        'smilies_id' => '44',
        1 => ':mrgreen:',
        'code' => ':mrgreen:',
        2 => 'icon_mrgreen.gif',
        'smile_url' => 'icon_mrgreen.gif',
        3 => 'Mr. Green',
        'emoticon' => 'Mr. Green',
        4 => '0',
        'smile_stat' => '0',
      ),
      3 => array(
        0 => '15',
        'smilies_id' => '15',
        1 => ':shock:',
        'code' => ':shock:',
        2 => 'icon_eek.gif',
        'smile_url' => 'icon_eek.gif',
        3 => 'Sokkolt',
        'emoticon' => 'Sokkolt',
        4 => '0',
        'smile_stat' => '0',
      ),
      4 => array(
        0 => '6',
        'smilies_id' => '6',
        1 => ':smile:',
        'code' => ':smile:',
        2 => 'icon_smile.gif',
        'smile_url' => 'icon_smile.gif',
        3 => 'Mosoly',
        'emoticon' => 'Mosoly',
        4 => '0',
        'smile_stat' => '0',
      ),
      5 => array(
        0 => '40',
        'smilies_id' => '40',
        1 => ':arrow:',
        'code' => ':arrow:',
        2 => 'icon_arrow.gif',
        'smile_url' => 'icon_arrow.gif',
        3 => 'Arrow',
        'emoticon' => 'Arrow',
        4 => '0',
        'smile_stat' => '0',
      ),
      6 => array(
        0 => '21',
        'smilies_id' => '21',
        1 => ':cool:',
        'code' => ':cool:',
        2 => 'icon_cool.gif',
        'smile_url' => 'icon_cool.gif',
        3 => 'Laza',
        'emoticon' => 'Laza',
        4 => '0',
        'smile_stat' => '0',
      ),
      7 => array(
        0 => '29',
        'smilies_id' => '29',
        1 => ':oops:',
        'code' => ':oops:',
        2 => 'icon_redface.gif',
        'smile_url' => 'icon_redface.gif',
        3 => 'Zavarban levo',
        'emoticon' => 'Zavarban levo',
        4 => '0',
        'smile_stat' => '0',
      ),
      8 => array(
        0 => '28',
        'smilies_id' => '28',
        1 => ':razz:',
        'code' => ':razz:',
        2 => 'icon_razz.gif',
        'smile_url' => 'icon_razz.gif',
        3 => 'Vicces',
        'emoticon' => 'Vicces',
        4 => '0',
        'smile_stat' => '0',
      ),
      9 => array(
        0 => '31',
        'smilies_id' => '31',
        1 => ':evil:',
        'code' => ':evil:',
        2 => 'icon_evil.gif',
        'smile_url' => 'icon_evil.gif',
        3 => 'Evil or Very Mad',
        'emoticon' => 'Evil or Very Mad',
        4 => '0',
        'smile_stat' => '0',
      ),
      10 => array(
        0 => '33',
        'smilies_id' => '33',
        1 => ':roll:',
        'code' => ':roll:',
        2 => 'icon_rolleyes.gif',
        'smile_url' => 'icon_rolleyes.gif',
        3 => 'Rolling Eyes',
        'emoticon' => 'Rolling Eyes',
        4 => '0',
        'smile_stat' => '0',
      ),
      11 => array(
        0 => '3',
        'smilies_id' => '3',
        1 => ':grin:',
        'code' => ':grin:',
        2 => 'icon_biggrin.gif',
        'smile_url' => 'icon_biggrin.gif',
        3 => 'Nagyon boldog',
        'emoticon' => 'Nagyon boldog',
        4 => '0',
        'smile_stat' => '0',
      ),
      12 => array(
        0 => '39',
        'smilies_id' => '39',
        1 => ':idea:',
        'code' => ':idea:',
        2 => 'icon_idea.gif',
        'smile_url' => 'icon_idea.gif',
        3 => 'Idea',
        'emoticon' => 'Idea',
        4 => '0',
        'smile_stat' => '0',
      ),
      13 => array(
        0 => '34',
        'smilies_id' => '34',
        1 => ':wink:',
        'code' => ':wink:',
        2 => 'icon_wink.gif',
        'smile_url' => 'icon_wink.gif',
        3 => 'Wink',
        'emoticon' => 'Wink',
        4 => '0',
        'smile_stat' => '0',
      ),
      14 => array(
        0 => '18',
        'smilies_id' => '18',
        1 => ':???:',
        'code' => ':???:',
        2 => 'icon_confused.gif',
        'smile_url' => 'icon_confused.gif',
        3 => 'Zavart',
        'emoticon' => 'Zavart',
        4 => '0',
        'smile_stat' => '0',
      ),
      15 => array(
        0 => '25',
        'smilies_id' => '25',
        1 => ':mad:',
        'code' => ':mad:',
        2 => 'icon_mad.gif',
        'smile_url' => 'icon_mad.gif',
        3 => 'Orült',
        'emoticon' => 'Orült',
        4 => '0',
        'smile_stat' => '0',
      ),
      16 => array(
        0 => '30',
        'smilies_id' => '30',
        1 => ':cry:',
        'code' => ':cry:',
        2 => 'icon_cry.gif',
        'smile_url' => 'icon_cry.gif',
        3 => 'Síró vagy nagyon szomorú',
        'emoticon' => 'Síró vagy nagyon szomorú',
        4 => '0',
        'smile_stat' => '0',
      ),
      17 => array(
        0 => '22',
        'smilies_id' => '22',
        1 => ':lol:',
        'code' => ':lol:',
        2 => 'icon_lol.gif',
        'smile_url' => 'icon_lol.gif',
        3 => 'Neveto',
        'emoticon' => 'Neveto',
        4 => '0',
        'smile_stat' => '0',
      ),
      18 => array(
        0 => '12',
        'smilies_id' => '12',
        1 => ':eek:',
        'code' => ':eek:',
        2 => 'icon_surprised.gif',
        'smile_url' => 'icon_surprised.gif',
        3 => 'Csodálkozó',
        'emoticon' => 'Csodálkozó',
        4 => '0',
        'smile_stat' => '0',
      ),
      19 => array(
        0 => '9',
        'smilies_id' => '9',
        1 => ':sad:',
        'code' => ':sad:',
        2 => 'icon_sad.gif',
        'smile_url' => 'icon_sad.gif',
        3 => 'Szomorú',
        'emoticon' => 'Szomorú',
        4 => '0',
        'smile_stat' => '0',
      ),
      20 => array(
        0 => '36',
        'smilies_id' => '36',
        1 => ';-)',
        'code' => ';-)',
        2 => 'icon_wink.gif',
        'smile_url' => 'icon_wink.gif',
        3 => 'Wink',
        'emoticon' => 'Wink',
        4 => '0',
        'smile_stat' => '0',
      ),
      21 => array(
        0 => '8',
        'smilies_id' => '8',
        1 => ':-(',
        'code' => ':-(',
        2 => 'icon_sad.gif',
        'smile_url' => 'icon_sad.gif',
        3 => 'Szomorú',
        'emoticon' => 'Szomorú',
        4 => '0',
        'smile_stat' => '0',
      ),
      22 => array(
        0 => '37',
        'smilies_id' => '37',
        1 => ':!:',
        'code' => ':!:',
        2 => 'icon_exclaim.gif',
        'smile_url' => 'icon_exclaim.gif',
        3 => 'Exclamation',
        'emoticon' => 'Exclamation',
        4 => '0',
        'smile_stat' => '0',
      ),
      23 => array(
        0 => '38',
        'smilies_id' => '38',
        1 => ':?:',
        'code' => ':?:',
        2 => 'icon_question.gif',
        'smile_url' => 'icon_question.gif',
        3 => 'Question',
        'emoticon' => 'Question',
        4 => '0',
        'smile_stat' => '0',
      ),
      24 => array(
        0 => '2',
        'smilies_id' => '2',
        1 => ':-D',
        'code' => ':-D',
        2 => 'icon_biggrin.gif',
        'smile_url' => 'icon_biggrin.gif',
        3 => 'Nagyon boldog',
        'emoticon' => 'Nagyon boldog',
        4 => '0',
        'smile_stat' => '0',
      ),
      25 => array(
        0 => '42',
        'smilies_id' => '42',
        1 => ':-|',
        'code' => ':-|',
        2 => 'icon_neutral.gif',
        'smile_url' => 'icon_neutral.gif',
        3 => 'Neutral',
        'emoticon' => 'Neutral',
        4 => '0',
        'smile_stat' => '0',
      ),
      26 => array(
        0 => '5',
        'smilies_id' => '5',
        1 => ':-)',
        'code' => ':-)',
        2 => 'icon_smile.gif',
        'smile_url' => 'icon_smile.gif',
        3 => 'Mosoly',
        'emoticon' => 'Mosoly',
        4 => '0',
        'smile_stat' => '0',
      ),
      27 => array(
        0 => '11',
        'smilies_id' => '11',
        1 => ':-o',
        'code' => ':-o',
        2 => 'icon_surprised.gif',
        'smile_url' => 'icon_surprised.gif',
        3 => 'Csodálkozó',
        'emoticon' => 'Csodálkozó',
        4 => '0',
        'smile_stat' => '0',
      ),
      28 => array(
        0 => '24',
        'smilies_id' => '24',
        1 => ':-x',
        'code' => ':-x',
        2 => 'icon_mad.gif',
        'smile_url' => 'icon_mad.gif',
        3 => 'Orült',
        'emoticon' => 'Orült',
        4 => '0',
        'smile_stat' => '0',
      ),
      29 => array(
        0 => '17',
        'smilies_id' => '17',
        1 => ':-?',
        'code' => ':-?',
        2 => 'icon_confused.gif',
        'smile_url' => 'icon_confused.gif',
        3 => 'Zavart',
        'emoticon' => 'Zavart',
        4 => '0',
        'smile_stat' => '0',
      ),
      30 => array(
        0 => '27',
        'smilies_id' => '27',
        1 => ':-P',
        'code' => ':-P',
        2 => 'icon_razz.gif',
        'smile_url' => 'icon_razz.gif',
        3 => 'Vicces',
        'emoticon' => 'Vicces',
        4 => '0',
        'smile_stat' => '0',
      ),
      31 => array(
        0 => '14',
        'smilies_id' => '14',
        1 => '8-O',
        'code' => '8-O',
        2 => 'icon_eek.gif',
        'smile_url' => 'icon_eek.gif',
        3 => 'Sokkolt',
        'emoticon' => 'Sokkolt',
        4 => '0',
        'smile_stat' => '0',
      ),
      32 => array(
        0 => '20',
        'smilies_id' => '20',
        1 => '8-)',
        'code' => '8-)',
        2 => 'icon_cool.gif',
        'smile_url' => 'icon_cool.gif',
        3 => 'Laza',
        'emoticon' => 'Laza',
        4 => '0',
        'smile_stat' => '0',
      ),
      33 => array(
        0 => '7',
        'smilies_id' => '7',
        1 => ':(',
        'code' => ':(',
        2 => 'icon_sad.gif',
        'smile_url' => 'icon_sad.gif',
        3 => 'Szomorú',
        'emoticon' => 'Szomorú',
        4 => '0',
        'smile_stat' => '0',
      ),
      34 => array(
        0 => '1',
        'smilies_id' => '1',
        1 => ':D',
        'code' => ':D',
        2 => 'icon_biggrin.gif',
        'smile_url' => 'icon_biggrin.gif',
        3 => 'Nagyon boldog',
        'emoticon' => 'Nagyon boldog',
        4 => '0',
        'smile_stat' => '0',
      ),
      35 => array(
        0 => '41',
        'smilies_id' => '41',
        1 => ':|',
        'code' => ':|',
        2 => 'icon_neutral.gif',
        'smile_url' => 'icon_neutral.gif',
        3 => 'Neutral',
        'emoticon' => 'Neutral',
        4 => '0',
        'smile_stat' => '0',
      ),
      36 => array(
        0 => '4',
        'smilies_id' => '4',
        1 => ':)',
        'code' => ':)',
        2 => 'icon_smile.gif',
        'smile_url' => 'icon_smile.gif',
        3 => 'Mosoly',
        'emoticon' => 'Mosoly',
        4 => '0',
        'smile_stat' => '0',
      ),
      37 => array(
        0 => '16',
        'smilies_id' => '16',
        1 => ':?',
        'code' => ':?',
        2 => 'icon_confused.gif',
        'smile_url' => 'icon_confused.gif',
        3 => 'Zavart',
        'emoticon' => 'Zavart',
        4 => '0',
        'smile_stat' => '0',
      ),
      38 => array(
        0 => '10',
        'smilies_id' => '10',
        1 => ':o',
        'code' => ':o',
        2 => 'icon_surprised.gif',
        'smile_url' => 'icon_surprised.gif',
        3 => 'Csodálkozó',
        'emoticon' => 'Csodálkozó',
        4 => '0',
        'smile_stat' => '0',
      ),
      39 => array(
        0 => '19',
        'smilies_id' => '19',
        1 => '8)',
        'code' => '8)',
        2 => 'icon_cool.gif',
        'smile_url' => 'icon_cool.gif',
        3 => 'Laza',
        'emoticon' => 'Laza',
        4 => '0',
        'smile_stat' => '0',
      ),
      40 => array(
        0 => '26',
        'smilies_id' => '26',
        1 => ':P',
        'code' => ':P',
        2 => 'icon_razz.gif',
        'smile_url' => 'icon_razz.gif',
        3 => 'Vicces',
        'emoticon' => 'Vicces',
        4 => '0',
        'smile_stat' => '0',
      ),
      41 => array(
        0 => '35',
        'smilies_id' => '35',
        1 => ';)',
        'code' => ';)',
        2 => 'icon_wink.gif',
        'smile_url' => 'icon_wink.gif',
        3 => 'Wink',
        'emoticon' => 'Wink',
        4 => '0',
        'smile_stat' => '0',
      ),
      42 => array(
        0 => '13',
        'smilies_id' => '13',
        1 => '8O',
        'code' => '8O',
        2 => 'icon_eek.gif',
        'smile_url' => 'icon_eek.gif',
        3 => 'Sokkolt',
        'emoticon' => 'Sokkolt',
        4 => '0',
        'smile_stat' => '0',
      ),
      43 => array(
        0 => '23',
        'smilies_id' => '23',
        1 => ':x',
        'code' => ':x',
        2 => 'icon_mad.gif',
        'smile_url' => 'icon_mad.gif',
        3 => 'Orült',
        'emoticon' => 'Orült',
        4 => '0',
        'smile_stat' => '0',
      ),
    ),
    'active_modules' => array(
      'Content' => 1,
      'Docs' => 1,
      'Downloads' => 1,
      'FAQ' => 1,
      'Feedback' => 1,
      'Forums' => 1,
      'Groups' => 1,
      'Members_List' => 1,
      'News' => 1,
      'Private_Messages' => 1,
      'Profile' => 1,
      'Recommend_Us' => 1,
      'Search' => 1,
      'Spambot_Killer' => 1,
      'Statistics' => 1,
      'Stories_Archive' => 1,
      'Submit_News' => 1,
      'Supporters' => 1,
      'Surveys' => 1,
      'Top' => 1,
      'Topics' => 1,
      'Web_Links' => 1,
      'Your_Account' => 1,
      'Site_Map' => 1,
      'Donations' => 1,
    ),
    'ya_config' => array(
      'sendaddmail' => '0',
      'senddeletemail' => '0',
      'allowuserdelete' => '0',
      'allowusertheme' => '0',
      'allowuserreg' => '0',
      'allowmailchange' => '1',
      'emailvalidate' => '0',
      'requireadmin' => '0',
      'servermail' => '0',
      'useactivate' => '1',
      'autosuspend' => '0',
      'perpage' => '100',
      'expiring' => '86400',
      'nick_min' => '4',
      'nick_max' => '20',
      'pass_min' => '4',
      'pass_max' => '20',
      'bad_mail' => 'yoursite.com
mysite.com',
      'bad_nick' => 'adm
admin
anonimo
anonymous
annimo
god
linux
nobody
operator
root
staff
webmaster',
      'coppa' => '0',
      'tos' => '0',
      'tosall' => '1',
      'cookiecheck' => '1',
      'cookiecleaner' => '1',
      'cookietimelife' => '2592000',
      'cookiepath' => '',
      'cookieinactivity' => '-',
      'autosuspendmain' => '0',
      'doublecheckemail' => '0',
      'version' => '4.4.2',
      'tos_text' => 'This is your default TOS. You may edit this through the Your Account Admin Panel.',
    ),
    'last_optimize' => 1193250902,
    'UserColors' => array(
      'admin belépés' => 'admin belépés',
      'admin' => 'admin',
      'shadow' => '<span style="color: #FFA34F"><strong>Shadow</strong></span>',
      'vendég' => 'Vendég',
      '\\1' => '\\1',
    ),
    'GroupColors' => array(
      'Administrators' => 'FFA34F',
      'Moderators' => '006600',
    ),
    'evoconfig' => array(
      'sub' => 'basic',
      'ver_check' => '1193250901',
      'ver_previous' => '2.0.5',
      'lock_modules' => '0',
      'queries_count' => '1',
      'adminssl' => '0',
      'poll_random' => '0',
      'poll_days' => '30',
      'censor_words' => 'ass asshole arse bitch bullshit c0ck clit cock crap cum cunt fag faggot fuck fucker fucking fuk fuking motherfucker pussy shit tits twat',
      'censor' => '0',
      'usrclearcache' => '0',
      'cache_last_cleared' => '1193250813',
      'textarea' => 'none',
      'use_colors' => '1',
      'usegfxcheck' => '0',
      'codesize' => '7',
      'codefont' => 'verdana',
      'useimage' => '1',
      'lazy_tap' => '0',
      'img_resize' => '1',
      'img_width' => '300',
      'img_height' => '300',
      'capfile' => '',
      'module_collapse' => '1',
      'collapse' => '1',
      'evouserinfo_ec' => '1',
      'collapsetype' => '0',
    ),
    'downloads' => array(
      'admperpage' => '50',
      'blockunregmodify' => '0',
      'dateformat' => 'D M j G:i:s T Y',
      'mostpopular' => '25',
      'mostpopulartrig' => '0',
      'perpage' => '10',
      'popular' => '500',
      'results' => '10',
      'show_download' => '0',
      'show_links_num' => '0',
      'usegfxcheck' => '0',
    ),
    'nukeconfig' => array(
      0 => 'Evo-Hungary',
      'sitename' => 'Evo-Hungary',
      1 => 'http://www.evo-hungary.hu',
      'nukeurl' => 'http://www.evo-hungary.hu',
      2 => 'logo.gif',
      'site_logo' => 'logo.gif',
      3 => 'Evolution-Revolution',
      'slogan' => 'Evolution-Revolution',
      4 => 'Oktober 2007',
      'startdate' => 'Oktober 2007',
      5 => 'admin@teoldalad.hu',
      'adminmail' => 'admin@teoldalad.hu',
      6 => '0',
      'anonpost' => '0',
      7 => 'MG-gs101',
      'default_Theme' => 'MG-gs101',
      8 => '<a href="modules.php?name=Spambot_Killer" target="_blank">Kéretlen Levélszüro</a><br /><a href="modules.php?name=Site_Map" target="_blank"><strong>Oldal Térkép</strong></a><br />',
      'foot1' => '<a href="modules.php?name=Spambot_Killer" target="_blank">Kéretlen Levélszüro</a><br /><a href="modules.php?name=Site_Map" target="_blank"><strong>Oldal Térkép</strong></a><br />',
      9 => '<a href="rss.php?feed=news" target="_blank"><img border="0" src="images/powered/feed_20_news.png" width="94" height="15" alt="[News Feed]" title="News Feed" /></a> <a href="rss.php?feed=forums" target="_blank"><img border="0" src="images/powered/feed_20_forums.png" width="94" height="15" alt="[Forums Feed]" title="Forums Feed" /></a> <a href="rss.php?feed=downloads" target="_blank" /><img border="0" src="images/powered/feed_20_down.png" width="94" height="15" alt="[Downloads Feed]" title="Downloads Feed" /></a> <a href="rss.php?feed=weblinks" target="_blank"><img border="0" src="images/powered/feed_20_links.png" width="94" height="15" alt="[Web Links Feed]" title="Web Links Feed" /></a> <a href="http://tool.motoricerca.info/robots-checker.phtml?checkreferer=1" target="_blank"><img border="0" src="images/powered/valid-robots.png" width="80" height="15" alt="[Validate robots.txt]" title="Validate robots.txt" /></a><br />',
      'foot2' => '<a href="rss.php?feed=news" target="_blank"><img border="0" src="images/powered/feed_20_news.png" width="94" height="15" alt="[News Feed]" title="News Feed" /></a> <a href="rss.php?feed=forums" target="_blank"><img border="0" src="images/powered/feed_20_forums.png" width="94" height="15" alt="[Forums Feed]" title="Forums Feed" /></a> <a href="rss.php?feed=downloads" target="_blank" /><img border="0" src="images/powered/feed_20_down.png" width="94" height="15" alt="[Downloads Feed]" title="Downloads Feed" /></a> <a href="rss.php?feed=weblinks" target="_blank"><img border="0" src="images/powered/feed_20_links.png" width="94" height="15" alt="[Web Links Feed]" title="Web Links Feed" /></a> <a href="http://tool.motoricerca.info/robots-checker.phtml?checkreferer=1" target="_blank"><img border="0" src="images/powered/valid-robots.png" width="80" height="15" alt="[Validate robots.txt]" title="Validate robots.txt" /></a><br />',
      10 => '',
      'foot3' => '',
      11 => '4096',
      'commentlimit' => '4096',
      12 => 'Visitor',
      'anonymous' => 'Visitor',
      13 => '5',
      'minpass' => '5',
      14 => '0',
      'pollcomm' => '0',
      15 => '0',
      'articlecomm' => '0',
      16 => '1',
      'broadcast_msg' => '1',
      17 => '1',
      'my_headlines' => '1',
      18 => '10',
      'top' => '10',
      19 => '10',
      'storyhome' => '10',
      20 => '1',
      'user_news' => '1',
      21 => '30',
      'oldnum' => '30',
      22 => '1',
      'ultramode' => '1',
      23 => '1',
      'banners' => '1',
      24 => 'Revolution',
      'backend_title' => 'Revolution',
      25 => 'hu-hu',
      'backend_language' => 'hu-hu',
      26 => 'english',
      'language' => 'english',
      27 => 'hu_HU',
      'locale' => 'hu_HU',
      28 => '1',
      'multilingual' => '1',
      29 => '1',
      'useflags' => '1',
      30 => '0',
      'notify' => '0',
      31 => 'admin@teoldalad.hu',
      'notify_email' => 'admin@teoldalad.hu',
      32 => 'Hírek az oldaladról',
      'notify_subject' => 'Hírek az oldaladról',
      33 => 'Helo! Hírek érkezett az oldaladra.',
      'notify_message' => 'Helo! Hírek érkezett az oldaladra.',
      34 => 'webmester',
      'notify_from' => 'webmester',
      35 => '0',
      'moderate' => '0',
      36 => '1',
      'admingraphic' => '1',
      37 => '1',
      'httpref' => '1',
      38 => '1000',
      'httprefmax' => '1000',
      39 => '3',
      'CensorMode' => '3',
      40 => '*****',
      'CensorReplace' => '*****',
      41 => 'PHP-Nuke Copyright &copy; 2007 by Francisco Burzi.<br />Powered by <a href="http://www.nuke-evolution.com" target="_blank"><b>Nuke-Evolution</b></a>.<br /><br>Ez a weboldal a Nuke-Evolution támogatásával jött létre. &copy; 2007<br />Magyar nyelvü támogatás &copy; 2007 <a href="http://www.evo-hungary.hu" target="_blank"><b>Nuke-Evolution Hungary</b></a>.<br /><br>
<a href="http://www.reality.info.hu/" target="_blank"><img border="0" src="images/evo/EvoHungary.png" width="94" height="15" alt="[Evo Hungary]" title="Evo Hungary"></a>&nbsp;
<a href="modules.php?name=Supporters" target="_blank"><img border="0" src="images/evo/EvoSupporter.png" width="94" height="15" alt="[Supporter]" title="Supporter"></a>&nbsp;<a href="modules.php?name=Club" target="_blank"><img border="0" src="images/evo/EvoClubZone.png" width="94" height="15" alt="[Evo Hungary Club]" title="Evo Hungary Club"></a>
&nbsp;<a href="http://www.evo-hungary.hu/Topsites/" target="_blank"><img border="0" src="images/evo/EvoTopsites.png" width="94" height="15" alt="[Evo Topsites]" title="Evo Topsites"></a>&nbsp;
<a href="http://www.linuxmedia.hu/" target="_blank"><img border="0" src="images/evo/Linuxmedia.png" width="94" height="15" alt="[Linuxmedia]" title="Linuxmedia"></a>
&nbsp;
<a href="http://cmsaward.hu/" target="_blank"><img border="0" src="images/evo/cms_80.gif" width="80" height="15" alt="[Cmsaward]" title="Cmsaward"></a>',
      'copyright' => 'PHP-Nuke Copyright &copy; 2007 by Francisco Burzi.<br />Powered by <a href="http://www.nuke-evolution.com" target="_blank"><b>Nuke-Evolution</b></a>.<br /><br>Ez a weboldal a Nuke-Evolution támogatásával jött létre. &copy; 2007<br />Magyar nyelvü támogatás &copy; 2007 <a href="http://www.evo-hungary.hu" target="_blank"><b>Nuke-Evolution Hungary</b></a>.<br /><br>
<a href="http://www.reality.info.hu/" target="_blank"><img border="0" src="images/evo/EvoHungary.png" width="94" height="15" alt="[Evo Hungary]" title="Evo Hungary"></a>&nbsp;
<a href="modules.php?name=Supporters" target="_blank"><img border="0" src="images/evo/EvoSupporter.png" width="94" height="15" alt="[Supporter]" title="Supporter"></a>&nbsp;<a href="modules.php?name=Club" target="_blank"><img border="0" src="images/evo/EvoClubZone.png" width="94" height="15" alt="[Evo Hungary Club]" title="Evo Hungary Club"></a>
&nbsp;<a href="http://www.evo-hungary.hu/Topsites/" target="_blank"><img border="0" src="images/evo/EvoTopsites.png" width="94" height="15" alt="[Evo Topsites]" title="Evo Topsites"></a>&nbsp;
<a href="http://www.linuxmedia.hu/" target="_blank"><img border="0" src="images/evo/Linuxmedia.png" width="94" height="15" alt="[Linuxmedia]" title="Linuxmedia"></a>
&nbsp;
<a href="http://cmsaward.hu/" target="_blank"><img border="0" src="images/evo/cms_80.gif" width="80" height="15" alt="[Cmsaward]" title="Cmsaward"></a>',
      42 => '7.6.0',
      'Version_Num' => '7.6.0',
      43 => '1',
      'admin_pos' => '1',
      44 => '0',
      'admin_log_lines' => '0',
      45 => '0',
      'error_log_lines' => '0',
      46 => '$saved_cache = array();',
      'cache_data' => '$saved_cache = array();',
    ),
    'blocks' => array(
      'l' => array(
        0 => array(
          0 => '1',
          'bid' => '1',
          1 => '',
          'bkey' => '',
          2 => 'Navigáció',
          'title' => 'Navigáció',
          3 => '',
          'content' => '',
          4 => '',
          'url' => '',
          5 => 'l',
          'bposition' => 'l',
          6 => '0',
          'weight' => '0',
          7 => '1',
          'active' => '1',
          8 => '0',
          'refresh' => '0',
          9 => '',
          'time' => '',
          10 => '',
          'blanguage' => '',
          11 => 'block-Modules.php',
          'blockfile' => 'block-Modules.php',
          12 => '0',
          'view' => '0',
        ),
        1 => array(
          0 => '2',
          'bid' => '2',
          1 => '',
          'bkey' => '',
          2 => 'Adminisztráció',
          'title' => 'Adminisztráció',
          3 => '',
          'content' => '',
          4 => '',
          'url' => '',
          5 => 'l',
          'bposition' => 'l',
          6 => '1',
          'weight' => '1',
          7 => '1',
          'active' => '1',
          8 => '0',
          'refresh' => '0',
          9 => '',
          'time' => '',
          10 => '',
          'blanguage' => '',
          11 => 'block-Administration.php',
          'blockfile' => 'block-Administration.php',
          12 => '4',
          'view' => '4',
        ),
        2 => array(
          0 => '12',
          'bid' => '12',
          1 => '',
          'bkey' => '',
          2 => 'Értesítések',
          'title' => 'Értesítések',
          3 => '',
          'content' => '',
          4 => '',
          'url' => '',
          5 => 'l',
          'bposition' => 'l',
          6 => '2',
          'weight' => '2',
          7 => '1',
          'active' => '1',
          8 => '0',
          'refresh' => '0',
          9 => '',
          'time' => '',
          10 => '',
          'blanguage' => '',
          11 => 'block-Submissions.php',
          'blockfile' => 'block-Submissions.php',
          12 => '4',
          'view' => '4',
        ),
        3 => array(
          0 => '13',
          'bid' => '13',
          1 => '',
          'bkey' => '',
          2 => 'Ajánjl Minket',
          'title' => 'Ajánjl Minket',
          3 => '',
          'content' => '',
          4 => '',
          'url' => '',
          5 => 'l',
          'bposition' => 'l',
          6 => '3',
          'weight' => '3',
          7 => '1',
          'active' => '1',
          8 => '3600',
          'refresh' => '3600',
          9 => '',
          'time' => '',
          10 => '',
          'blanguage' => '',
          11 => 'block-Link_to_us.php',
          'blockfile' => 'block-Link_to_us.php',
          12 => '0',
          'view' => '0',
        ),
        4 => array(
          0 => '8',
          'bid' => '8',
          1 => '',
          'bkey' => '',
          2 => 'Támadások Õre',
          'title' => 'Támadások Õre',
          3 => '',
          'content' => '',
          4 => '',
          'url' => '',
          5 => 'l',
          'bposition' => 'l',
          6 => '4',
          'weight' => '4',
          7 => '1',
          'active' => '1',
          8 => '3600',
          'refresh' => '3600',
          9 => '',
          'time' => '',
          10 => '',
          'blanguage' => '',
          11 => 'block-Hacker_Beware2.php',
          'blockfile' => 'block-Hacker_Beware2.php',
          12 => '0',
          'view' => '0',
        ),
      ),
      'c' => array(
        0 => array(
          0 => '7',
          'bid' => '7',
          1 => '',
          'bkey' => '',
          2 => 'Nuke-Evolution',
          'title' => 'Nuke-Evolution',
          3 => '',
          'content' => '',
          4 => '',
          'url' => '',
          5 => 'c',
          'bposition' => 'c',
          6 => '0',
          'weight' => '0',
          7 => '1',
          'active' => '1',
          8 => '0',
          'refresh' => '0',
          9 => '',
          'time' => '',
          10 => '',
          'blanguage' => '',
          11 => 'block-Nuke-Evolution.php',
          'blockfile' => 'block-Nuke-Evolution.php',
          12 => '0',
          'view' => '0',
        ),
        1 => array(
          0 => '11',
          'bid' => '11',
          1 => '',
          'bkey' => '',
          2 => 'Fórumok',
          'title' => 'Fórumok',
          3 => '',
          'content' => '',
          4 => '',
          'url' => '',
          5 => 'c',
          'bposition' => 'c',
          6 => '1',
          'weight' => '1',
          7 => '1',
          'active' => '1',
          8 => '3600',
          'refresh' => '3600',
          9 => '',
          'time' => '',
          10 => '',
          'blanguage' => '',
          11 => 'block-Forums.php',
          'blockfile' => 'block-Forums.php',
          12 => '0',
          'view' => '0',
        ),
      ),
      'r' => array(
        0 => array(
          0 => '14',
          'bid' => '14',
          1 => '',
          'bkey' => '',
          2 => 'Adományok',
          'title' => 'Adományok',
          3 => '',
          'content' => '',
          4 => '',
          'url' => '',
          5 => 'r',
          'bposition' => 'r',
          6 => '0',
          'weight' => '0',
          7 => '1',
          'active' => '1',
          8 => '3600',
          'refresh' => '3600',
          9 => '0',
          'time' => '0',
          10 => '',
          'blanguage' => '',
          11 => 'block-Donations.php',
          'blockfile' => 'block-Donations.php',
          12 => '0',
          'view' => '0',
        ),
        1 => array(
          0 => '6',
          'bid' => '6',
          1 => '',
          'bkey' => '',
          2 => 'User Info',
          'title' => 'User Info',
          3 => '',
          'content' => '',
          4 => '',
          'url' => '',
          5 => 'r',
          'bposition' => 'r',
          6 => '1',
          'weight' => '1',
          7 => '1',
          'active' => '1',
          8 => '1800',
          'refresh' => '1800',
          9 => '0',
          'time' => '0',
          10 => '',
          'blanguage' => '',
          11 => 'block-User_Info.php',
          'blockfile' => 'block-User_Info.php',
          12 => '1',
          'view' => '1',
        ),
        2 => array(
          0 => '4',
          'bid' => '4',
          1 => '',
          'bkey' => '',
          2 => 'Szavazások',
          'title' => 'Szavazások',
          3 => '',
          'content' => '',
          4 => '',
          'url' => '',
          5 => 'r',
          'bposition' => 'r',
          6 => '2',
          'weight' => '2',
          7 => '1',
          'active' => '1',
          8 => '3600',
          'refresh' => '3600',
          9 => '',
          'time' => '',
          10 => '',
          'blanguage' => '',
          11 => 'block-Survey.php',
          'blockfile' => 'block-Survey.php',
          12 => '0',
          'view' => '0',
        ),
        3 => array(
          0 => '5',
          'bid' => '5',
          1 => '',
          'bkey' => '',
          2 => 'Információ',
          'title' => 'Információ',
          3 => '<br /><center><span class="content">
<a href="http://phpnuke.org"><img src="images/powered/powered8.jpg" border="0" alt="Powered by PHP-Nuke" title="Powered by PHP-Nuke" width="88" height="31" /></a>
<br /><br />
<a href="http://validator.w3.org/check/referer"><img src="images/html401.gif" width="88" height="31" alt="Valid HTML 4.01!" title="Valid HTML 4.01!" border="0" /></a>
<br /><br />
<a href="http://jigsaw.w3.org/css-validator"><img src="images/css.gif" width="88" height="31" alt="Valid CSS!" title="Valid CSS!" border="0" /></a></span></center><br />',
          'content' => '<br /><center><span class="content">
<a href="http://phpnuke.org"><img src="images/powered/powered8.jpg" border="0" alt="Powered by PHP-Nuke" title="Powered by PHP-Nuke" width="88" height="31" /></a>
<br /><br />
<a href="http://validator.w3.org/check/referer"><img src="images/html401.gif" width="88" height="31" alt="Valid HTML 4.01!" title="Valid HTML 4.01!" border="0" /></a>
<br /><br />
<a href="http://jigsaw.w3.org/css-validator"><img src="images/css.gif" width="88" height="31" alt="Valid CSS!" title="Valid CSS!" border="0" /></a></span></center><br />',
          4 => '',
          'url' => '',
          5 => 'r',
          'bposition' => 'r',
          6 => '3',
          'weight' => '3',
          7 => '1',
          'active' => '1',
          8 => '0',
          'refresh' => '0',
          9 => '',
          'time' => '',
          10 => '',
          'blanguage' => '',
          11 => '',
          'blockfile' => '',
          12 => '0',
          'view' => '0',
        ),
      ),
      'd' => array(
        0 => array(
          0 => '15',
          'bid' => '15',
          1 => '',
          'bkey' => '',
          2 => 'Service',
          'title' => 'Service',
          3 => '',
          'content' => '',
          4 => '',
          'url' => '',
          5 => 'd',
          'bposition' => 'd',
          6 => '0',
          'weight' => '0',
          7 => '1',
          'active' => '1',
          8 => '3600',
          'refresh' => '3600',
          9 => '0',
          'time' => '0',
          10 => '',
          'blanguage' => '',
          11 => 'block-Service.php',
          'blockfile' => 'block-Service.php',
          12 => '1',
          'view' => '1',
        ),
        1 => array(
          0 => '18',
          'bid' => '18',
          1 => '',
          'bkey' => '',
          2 => 'Dowmload Themes Center',
          'title' => 'Dowmload Themes Center',
          3 => '',
          'content' => '',
          4 => '',
          'url' => '',
          5 => 'd',
          'bposition' => 'd',
          6 => '1',
          'weight' => '1',
          7 => '1',
          'active' => '1',
          8 => '3600',
          'refresh' => '3600',
          9 => '0',
          'time' => '0',
          10 => '',
          'blanguage' => '',
          11 => 'block-Random_Themes_Multi_Center.php',
          'blockfile' => 'block-Random_Themes_Multi_Center.php',
          12 => '1',
          'view' => '1',
        ),
      ),
    ),
    'board_config' => array(
      'config_id' => '1',
      'board_disable' => '0',
      'board_disable_adminview' => '1',
      'board_disable_msg' => 'The board is currently disabled...',
      'sitename' => 'My Site',
      'site_desc' => '',
      'cookie_name' => 'nukeevo',
      'cookie_path' => '/',
      'cookie_domain' => 'MySite.com',
      'cookie_secure' => '0',
      'session_length' => '3600',
      'allow_html' => '1',
      'allow_html_tags' => 'b,i,u,pre',
      'allow_bbcode' => '1',
      'allow_smilies' => '1',
      'allow_sig' => '1',
      'allow_namechange' => '0',
      'allow_theme_create' => '0',
      'allow_avatar_local' => '1',
      'allow_avatar_remote' => '0',
      'allow_avatar_upload' => '0',
      'override_user_style' => '1',
      'posts_per_page' => '15',
      'topics_per_page' => '50',
      'hot_threshold' => '25',
      'max_poll_options' => '10',
      'max_sig_chars' => '255',
      'max_smilies' => '15',
      'max_inbox_privmsgs' => '100',
      'max_sentbox_privmsgs' => '100',
      'max_savebox_privmsgs' => '100',
      'board_email_sig' => 'Köszönöm, Webmaster@MySite.com',
      'board_email' => 'Webmaster@MySite.com',
      'smtp_delivery' => '0',
      'smtp_host' => '',
      'require_activation' => '0',
      'flood_interval' => '15',
      'search_flood_interval' => '15',
      'board_email_form' => '0',
      'avatar_filesize' => '6144',
      'avatar_max_width' => '80',
      'avatar_max_height' => '80',
      'avatar_path' => 'modules/Forums/images/avatars',
      'avatar_gallery_path' => 'modules/Forums/images/avatars',
      'smilies_path' => 'modules/Forums/images/smiles',
      'default_style' => '1',
      'default_dateformat' => 'D M d, Y g:i a',
      'board_timezone' => '10',
      'prune_enable' => '0',
      'privmsg_disable' => '0',
      'gzip_compress' => '0',
      'coppa_fax' => '',
      'coppa_mail' => '',
      'board_startdate' => '1131089812',
      'default_lang' => 'hungarian',
      'smtp_username' => '',
      'smtp_password' => '',
      'record_online_users' => '2',
      'record_online_date' => '1034668530',
      'server_name' => 'Teoldalad.hu',
      'server_port' => '80',
      'script_path' => '/modules/Forums/',
      'version' => '.0.22',
      'enable_confirm' => '0',
      'sendmail_fix' => '0',
      'sig_max_lines' => '5',
      'sig_wordwrap' => '100',
      'sig_allow_font_sizes' => '1',
      'sig_min_font_size' => '7',
      'sig_max_font_size' => '12',
      'sig_allow_bold' => '1',
      'sig_allow_italic' => '1',
      'sig_allow_underline' => '1',
      'sig_allow_colors' => '1',
      'sig_allow_quote' => '0',
      'sig_allow_code' => '0',
      'sig_allow_list' => '0',
      'sig_allow_url' => '1',
      'sig_allow_images' => '1',
      'sig_max_images' => '0',
      'sig_max_img_height' => '75',
      'sig_max_img_width' => '500',
      'sig_allow_on_max_img_size_fail' => '0',
      'sig_max_img_files_size' => '10',
      'sig_max_img_av_files_size' => '0',
      'sig_exotic_bbcodes_disallowed' => '',
      'sig_allow_smilies' => '1',
      'report_email' => '1',
      'ropm_quick_reply' => '1',
      'ropm_quick_reply_bbc' => '1',
      'ropm_quick_reply_smilies' => '22',
      'wrap_enable' => '1',
      'wrap_min' => '50',
      'wrap_max' => '99',
      'wrap_def' => '70',
      'allow_quickreply' => '1',
      'anonymous_show_sqr' => '0',
      'anonymous_sqr_mode' => '0',
      'quick_search_enable' => '1',
      'sig_line' => '<hr>',
      'default_avatar_guests_url' => 'modules/Forums/images/avatars/blank.gif',
      'default_avatar_users_url' => 'modules/Forums/images/avatars/blank.gif',
      'default_avatar_set' => '2',
      'pm_allow_threshold' => '0',
      'welcome_pm' => '0',
      'default_time_mode' => '6',
      'default_dst_time_lag' => '60',
      'glance_show' => '1',
      'glance_show_override' => '1',
      'glance_news_id' => '0',
      'glance_num_news' => '0',
      'glance_num' => '6',
      'glance_ignore_forums' => '0',
      'glance_table_width' => '100%',
      'glance_auth_read' => '1',
      'glance_topic_length' => '0',
      'online_time' => '300',
      'display_users_today' => '0',
      'locked_view_open' => 'Zárolva: <strike>',
      'locked_view_close' => '</strike>',
      'global_view_open' => 'Global Announcement:',
      'global_view_close' => '',
      'announce_view_open' => 'Announcement:',
      'announce_view_close' => '',
      'sticky_view_open' => 'Sticky:',
      'sticky_view_close' => '',
      'moved_view_open' => 'Moved:',
      'moved_view_close' => '',
      'initial_group_id' => '5',
      'hide_links' => '0',
      'hide_emails' => '0',
      'hide_images' => '0',
      'use_dhtml' => '1',
      'anonymous_open_sqr' => '0',
      'smilies_in_titles' => '1',
      'show_edited_logs' => '1',
      'show_locked_logs' => '1',
      'show_unlocked_logs' => '1',
      'show_splitted_logs' => '1',
      'show_moved_logs' => '1',
      'logs_view_level' => '2',
      'aprvmArchive' => '0',
      'aprvmVersion' => '1.6.0',
      'aprvmView' => '0',
      'aprvmRows' => '25',
      'aprvmIP' => '1',
      'image_resize_width' => '400',
      'image_resize_height' => '400',
      'use_theme_style' => '1',
      'allow_autologin' => '1',
      'max_autologin_time' => '0',
      'max_login_attempts' => '5',
      'login_reset_time' => '30',
      'show_sig_once' => '0',
      'show_avatar_once' => '0',
      'show_rank_once' => '0',
      'loginpage' => '1',
      'rand_seed' => 'e26d719b623c63f848e942a72a8450cd',
      'xs_auto_compile' => '1',
      'xs_auto_recompile' => '1',
      'xs_use_cache' => '1',
      'xs_php' => 'php',
      'xs_def_template' => 'subSilver',
      'xs_check_switches' => '1',
      'xs_warn_includes' => '1',
      'xs_add_comments' => '0',
      'xs_ftp_host' => '',
      'xs_ftp_login' => '',
      'xs_ftp_path' => '',
      'xs_downloads_count' => '0',
      'xs_downloads_default' => '0',
      'xs_shownav' => '1',
      'xs_template_time' => '1193251272',
      'xs_version' => '8',
      'suggestion_type' => '0',
      'suggest_announcements' => '0',
      'suggested_topic_id' => '0',
      'suggestion_source' => '0',
      'bday_show' => '1',
      'bday_require' => '0',
      'bday_year' => '0',
      'bday_lock' => '0',
      'bday_lookahead' => '7',
      'bday_max' => '100',
      'bday_min' => '5',
      'ad_after_post' => '1',
      'ad_post_threshold' => '',
      'ad_every_post' => '',
      'ad_who' => '1',
      'ad_no_forums' => '',
      'ad_no_groups' => '',
      'ad_old_style' => '1',
      'cash_disable' => '0',
      'cash_display_after_posts' => '1',
      'cash_post_message' => 'You earned %s for that post',
      'cash_disable_spam_num' => '10',
      'cash_disable_spam_time' => '24',
      'cash_disable_spam_message' => 'You have exceeded the alloted amount of posts and will not earn anything for your post',
      'cash_installed' => 'yes',
      'cash_version' => '2.2.5',
      'points_name' => 'Points',
      'cash_adminnavbar' => '1',
      'cash_adminbig' => '0',
      'version_check_delay' => '1193251441',
    ),
  ),
  'sentinel' => array(
    'blockers' => array(
      'other' => array(
        0 => '0',
        'blocker' => '0',
        1 => 'other',
        'block_name' => 'other',
        2 => '0',
        'activate' => '0',
        3 => '0',
        'block_type' => '0',
        4 => '0',
        'email_lookup' => '0',
        5 => '',
        'forward' => '',
        6 => 'Abuse-Other',
        'reason' => 'Abuse-Other',
        7 => 'abuse_default.tpl',
        'template' => 'abuse_default.tpl',
        8 => '0',
        'duration' => '0',
        9 => '0',
        'htaccess' => '0',
        10 => '',
        'list' => '',
      ),
      'union' => array(
        0 => '1',
        'blocker' => '1',
        1 => 'union',
        'block_name' => 'union',
        2 => '5',
        'activate' => '5',
        3 => '0',
        'block_type' => '0',
        4 => '2',
        'email_lookup' => '2',
        5 => '',
        'forward' => '',
        6 => 'Abuse-Union',
        'reason' => 'Abuse-Union',
        7 => 'abuse_union.tpl',
        'template' => 'abuse_union.tpl',
        8 => '0',
        'duration' => '0',
        9 => '0',
        'htaccess' => '0',
        10 => '',
        'list' => '',
      ),
      'clike' => array(
        0 => '2',
        'blocker' => '2',
        1 => 'clike',
        'block_name' => 'clike',
        2 => '5',
        'activate' => '5',
        3 => '0',
        'block_type' => '0',
        4 => '2',
        'email_lookup' => '2',
        5 => '',
        'forward' => '',
        6 => 'Abuse-CLike',
        'reason' => 'Abuse-CLike',
        7 => 'abuse_clike.tpl',
        'template' => 'abuse_clike.tpl',
        8 => '0',
        'duration' => '0',
        9 => '0',
        'htaccess' => '0',
        10 => '',
        'list' => '',
      ),
      'harvester' => array(
        0 => '3',
        'blocker' => '3',
        1 => 'harvester',
        'block_name' => 'harvester',
        2 => '0',
        'activate' => '0',
        3 => '0',
        'block_type' => '0',
        4 => '0',
        'email_lookup' => '0',
        5 => '',
        'forward' => '',
        6 => 'Abuse-Harvest',
        'reason' => 'Abuse-Harvest',
        7 => 'abuse_harvester.tpl',
        'template' => 'abuse_harvester.tpl',
        8 => '0',
        'duration' => '0',
        9 => '0',
        'htaccess' => '0',
        10 => '@yahoo.com
alexibot
alligator
anonymiz
asterias
backdoorbot
black hole
blackwidow
blowfish
botalot
builtbottough
bullseye
bunnyslippers
catch
cegbfeieh
charon
cheesebot
cherrypicker
chinaclaw
combine
copyrightcheck
cosmos
crescent
curl
dbrowse
disco
dittospyder
dlman
dnloadmage
download
dreampassport
dts agent
ecatch
eirgrabber
erocrawler
express webpictures
extractorpro
eyenetie
fantombrowser
fantomcrew browser
fileheap
filehound
flashget
foobot
franklin locator
freshdownload
fscrawler
gamespy_arcade
getbot
getright
getweb
go!zilla
go-ahead-got-it
grab
grafula
gsa-crawler
harvest
hloader
hmview
httplib
httpresume
httrack
humanlinks
igetter
image stripper
image sucker
industry program
indy library
infonavirobot
installshield digitalwizard
INTerget
iria
irvine
iupui research bot
jbh agent
jennybot
jetcar
jobo
joc
kapere
kenjin spider
keyword density
larbin
leechftp
leechget
lexibot
libweb/clshttp
libwww-perl
lightningdownload
lincoln state web browser
linkextractorpro
linkscan/8.1a.unix
linkwalker
lwp-trivial
lwp::simple
mac finder
mata hari
mediasearch
metaproducts
microsoft url control
midown tool
miixpc
missauga locate
missouri college browse
mister pix
moget
mozilla.*newt
mozilla/3.0 (compatible)
mozilla/3.mozilla/2.01
msie 4.0 (win95)
multiblocker browser
mydaemon
mygetright
nabot
navroad
nearsite
net vampire
netants
netmechanic
netpumper
netspider
newsearchengine
nicerspro
ninja
nitro downloader
npbot
octopus
offline explorer
offline navigator
openfind
pagegrabber
papa foto
pavuk
pbrowse
pcbrowser
peval
pompos/
program shareware
propowerbot
prowebwalker
psurf
puf
puxarapido
queryn metasearch
realdownload
reget
repomonkey
rsurf
rumours-agent
sakura
scan4mail
semanticdiscovery
sitesnagger
slysearch
spankbot
spanner 
spiderzilla
sq webscanner
stamina
star downloader
steeler
steeler
strip
superbot
superhttp
surfbot
suzuran
swbot
szukacz
takeout
teleport
telesoft
test spider
the INTraformant
thenomad
tighttwatbot
titan
tocrawl/urldispatcher
true_robot
tsurf
turing machine
turingos
urlblaze
urlgetfile
urly warning
utilmind
vci
voideye
web image collector
web sucker
webauto
webbandit
webcapture
webcollage
webcopier
webenhancer
webfetch
webgo
webleacher
webmasterworldforumbot
webql
webreaper
website extractor
website quester
webster
webstripper
webwhacker
wep search
wget
whizbang
widow
wildsoft surfer
www-collector-e
www.netwu.com
wwwoffle
xaldon
xenu
zeus
ziggy
zippy',
        'list' => '@yahoo.com
alexibot
alligator
anonymiz
asterias
backdoorbot
black hole
blackwidow
blowfish
botalot
builtbottough
bullseye
bunnyslippers
catch
cegbfeieh
charon
cheesebot
cherrypicker
chinaclaw
combine
copyrightcheck
cosmos
crescent
curl
dbrowse
disco
dittospyder
dlman
dnloadmage
download
dreampassport
dts agent
ecatch
eirgrabber
erocrawler
express webpictures
extractorpro
eyenetie
fantombrowser
fantomcrew browser
fileheap
filehound
flashget
foobot
franklin locator
freshdownload
fscrawler
gamespy_arcade
getbot
getright
getweb
go!zilla
go-ahead-got-it
grab
grafula
gsa-crawler
harvest
hloader
hmview
httplib
httpresume
httrack
humanlinks
igetter
image stripper
image sucker
industry program
indy library
infonavirobot
installshield digitalwizard
INTerget
iria
irvine
iupui research bot
jbh agent
jennybot
jetcar
jobo
joc
kapere
kenjin spider
keyword density
larbin
leechftp
leechget
lexibot
libweb/clshttp
libwww-perl
lightningdownload
lincoln state web browser
linkextractorpro
linkscan/8.1a.unix
linkwalker
lwp-trivial
lwp::simple
mac finder
mata hari
mediasearch
metaproducts
microsoft url control
midown tool
miixpc
missauga locate
missouri college browse
mister pix
moget
mozilla.*newt
mozilla/3.0 (compatible)
mozilla/3.mozilla/2.01
msie 4.0 (win95)
multiblocker browser
mydaemon
mygetright
nabot
navroad
nearsite
net vampire
netants
netmechanic
netpumper
netspider
newsearchengine
nicerspro
ninja
nitro downloader
npbot
octopus
offline explorer
offline navigator
openfind
pagegrabber
papa foto
pavuk
pbrowse
pcbrowser
peval
pompos/
program shareware
propowerbot
prowebwalker
psurf
puf
puxarapido
queryn metasearch
realdownload
reget
repomonkey
rsurf
rumours-agent
sakura
scan4mail
semanticdiscovery
sitesnagger
slysearch
spankbot
spanner 
spiderzilla
sq webscanner
stamina
star downloader
steeler
steeler
strip
superbot
superhttp
surfbot
suzuran
swbot
szukacz
takeout
teleport
telesoft
test spider
the INTraformant
thenomad
tighttwatbot
titan
tocrawl/urldispatcher
true_robot
tsurf
turing machine
turingos
urlblaze
urlgetfile
urly warning
utilmind
vci
voideye
web image collector
web sucker
webauto
webbandit
webcapture
webcollage
webcopier
webenhancer
webfetch
webgo
webleacher
webmasterworldforumbot
webql
webreaper
website extractor
website quester
webster
webstripper
webwhacker
wep search
wget
whizbang
widow
wildsoft surfer
www-collector-e
www.netwu.com
wwwoffle
xaldon
xenu
zeus
ziggy
zippy',
      ),
      'script' => array(
        0 => '4',
        'blocker' => '4',
        1 => 'script',
        'block_name' => 'script',
        2 => '5',
        'activate' => '5',
        3 => '0',
        'block_type' => '0',
        4 => '2',
        'email_lookup' => '2',
        5 => '',
        'forward' => '',
        6 => 'Abuse-Script',
        'reason' => 'Abuse-Script',
        7 => 'abuse_script.tpl',
        'template' => 'abuse_script.tpl',
        8 => '0',
        'duration' => '0',
        9 => '0',
        'htaccess' => '0',
        10 => '',
        'list' => '',
      ),
      'author' => array(
        0 => '5',
        'blocker' => '5',
        1 => 'author',
        'block_name' => 'author',
        2 => '5',
        'activate' => '5',
        3 => '0',
        'block_type' => '0',
        4 => '2',
        'email_lookup' => '2',
        5 => '',
        'forward' => '',
        6 => 'Abuse-Author',
        'reason' => 'Abuse-Author',
        7 => 'abuse_author.tpl',
        'template' => 'abuse_author.tpl',
        8 => '0',
        'duration' => '0',
        9 => '0',
        'htaccess' => '0',
        10 => '',
        'list' => '',
      ),
      'referer' => array(
        0 => '6',
        'blocker' => '6',
        1 => 'referer',
        'block_name' => 'referer',
        2 => '5',
        'activate' => '5',
        3 => '0',
        'block_type' => '0',
        4 => '2',
        'email_lookup' => '2',
        5 => '',
        'forward' => '',
        6 => 'Abuse-Referer',
        'reason' => 'Abuse-Referer',
        7 => 'abuse_referer.tpl',
        'template' => 'abuse_referer.tpl',
        8 => '0',
        'duration' => '0',
        9 => '0',
        'htaccess' => '0',
        10 => '121hr.com
1st-call.net
1stcool.com
5000n.com
69-xxx.com
9irl.com
9uy.com
a-day-at-the-party.com
accessthepeace.com
adult-model-nude-pictures.com
adult-sex-toys-free-porn.com
agnitum.com
alfonssackpfeiffe.com
alongwayfrommars.com
anime-sex-1.com
anorex-sf-stimulant-free.com
antibot.net
antique-tokiwa.com
apotheke-heute.com
armada31.com
artark.com
artlilei.com
ascendbtg.com
aschalaecheck.com
asian-sex-free-sex.com
aslowspeeker.com
assasinatedfrogs.com
athirst-for-tranquillity.net
aubonpanier.com
avalonumc.com
ayingba.com
bayofnoreturn.com
bbw4phonesex.com
beersarenotfree.com
bierikiuetsch.com
bilingualannouncements.com
black-pussy-toon-clip-anal-lover-single.com
blownapart.com
blueroutes.com
boasex.com
booksandpages.com
bootyquake.com
bossyhunter.com
boyz-sex.com
brokersaandpokers.com
browserwindowcleaner.com
budobytes.com
business2fun.com
buymyshitz.com
byuntaesex.com
caniputsomeloveINToyou.com
cartoons.net.ru
caverunsailing.com
certainhealth.com
clantea.com
close-protection-services.com
clubcanino.com
clubstic.com
cobrakai-skf.com
collegefucktour.co.uk
commanderspank.com
coolenabled.com
crusecountryart.com
crusingforsex.co.uk
cunt-twat-pussy-juice-clit-licking.com
customerhandshaker.com
cyborgrama.com
darkprofits.co.uk
datingforme.co.uk
datingmind.com
degree.org.ru
delorentos.com
diggydigger.com
dinkydonkyaussie.com
djpritchard.com
djtop.com
draufgeschissen.com
dreamerteens.co.uk
ebonyarchives.co.uk
ebonyplaya.co.uk
ecobuilder2000.com
emailandemail.com
emedici.net
engine-on-fire.com
erocity.co.uk
esport3.com
eteenbabes.com
eurofreepages.com
eurotexans.com
evolucionweb.com
fakoli.com
fe4ba.com
ferienschweden.com
findly.com
firsttimeteadrinker.com
fishing.net.ru
flatwonkers.com
flowershopentertainment.com
flymario.com
free-xxx-pictures-porno-gallery.com
freebestporn.com
freefuckingmovies.co.uk
freexxxstuff.co.uk
fruitologist.net
fruitsandbolts.com
fuck-cumshots-free-midget-movie-clips.com
fuck-michaelmoore.com
fundacep.com
gadless.com
gallapagosrangers.com
galleries4free.co.uk
galofu.com
gaypixpost.co.uk
geomasti.com
girltime.co.uk
glassrope.com
godjustblessyouall.com
goldenageresort.com
gonnabedaddies.com
granadasexi.com
granadasexi.com
guardingtheangels.com
guyprofiles.co.uk
happy1225.com
happychappywacky.com
health.org.ru
hexplas.com
highheelsmodels4fun.com
hillsweb.com
hiptuner.com
historyINTospace.com
hoa-tuoi.com
homebuyinginatlanta.com
horizonultra.com
horseminiature.net
hotkiss.co.uk
hotlivegirls.co.uk
hotmatchup.co.uk
husler.co.uk
iaentertainment.com
iamnotsomeone.com
iconsofcorruption.com
ihavenotrustinyou.com
informat-systems.com
INTeriorproshop.com
INTersoftnetworks.com
INThecrib.com
investment4cashiers.com
iti-trailers.com
jackpot-hacker.com
jacks-world.com
jamesthesailorbasher.com
jesuislemonds.com
justanotherdomainname.com
kampelicka.com
kanalrattenarsch.com
katzasher.com
kerosinjunkie.com
killasvideo.com
koenigspisser.com
kontorpara.com
l8t.com
laestacion101.com
lambuschlamppen.com
lankasex.co.uk
laser-creations.com
le-tour-du-monde.com
lecraft.com
ledo-design.com
leftregistration.com
lekkikoomastas.com
lepommeau.com
libr-animal.com
libraries.org.ru
likewaterlikewind.com
limbojumpers.com
link.ru
lockportlinks.com
loiproject.com
longtermalternatives.com
lottoeco.com
lucalozzi.com
maki-e-pens.com
malepayperview.co.uk
mangaxoxo.com
maps.org.ru
marcofields.com
masterofcheese.com
masteroftheblasterhill.com
mastheadwankers.com
megafrontier.com
meinschuppen.com
mercurybar.com
metapannas.com
micelebre.com
midnightlaundries.com
mikeapartment.co.uk
millenniumchorus.com
mimundial2002.com
miniaturegallerymm.com
mixtaperadio.com
mondialcoral.com
monja-wakamatsu.com
monstermonkey.net
mouthfreshners.com
mullensholiday.com
musilo.com
myhollowlog.com
myhomephonenumber.com
mykeyboardisbroken.com
mysofia.net
naked-cheaters.com
naked-old-women.com
nastygirls.co.uk
nationclan.net
natterratter.com
naughtyadam.com
nestbeschmutzer.com
netwu.com
newrealeaseonline.com
newrealeasesonline.com
nextfrontiersonline.com
nikostaxi.com
notorious7.com
nrecruiter.com
nursingdepot.com
nustramosse.com
nuturalhicks.com
occaz-auto49.com
ocean-db.net
oilburnerservice.net
omburo.com
oneoz.com
onepageahead.net
onlinewithaline.com
organizate.net
ourownweddingsong.com
owen-music.com
p-partners.com
paginadeautor.com
pakistandutyfree.com
pamanderson.co.uk
parentsense.net
particlewave.net
pay-clic.com
pay4link.net
pcisp.com
persist-pharma.com
peteband.com
petplusindia.com
pickabbw.co.uk
picture-oral-position-lesbian.com
pl8again.com
planeting.net
popusky.com
porn-expert.com
promoblitza.com
proproducts-usa.com
ptcgzone.com
ptporn.com
publishmybong.com
puttingtogether.com
qualifiedcancelations.com
rahost.com
rainbow21.com
rakkashakka.com
randomfeeding.com
rape-art.com
rd-brains.com
realestateonthehill.net
rebuscadobot
requested-stuff.com
retrotrasher.com
ricopositive.com
risorseinrete.com
rotatingcunts.com
runawayclicks.com
rutalibre.com
s-marche.com
sabrosojazz.com
samuraidojo.com
sanaldarbe.com
sasseminars.com
schlampenbruzzler.com
searchmybong.com
seckur.com
sex-asian-porn-INTerracial-photo.com
sex-porn-fuck-hardcore-movie.com
sexa3.net
sexer.com
sexINTention.com
sexnet24.tv
sexomundo.com
sharks.com.ru
shells.com.ru
shop-ecosafe.com
shop-toon-hardcore-fuck-cum-pics.com
silverfussions.com
sin-city-sex.net
sluisvan.com
smutshots.com
snagglersmaggler.com
somethingtoforgetit.com
sophiesplace.net
soursushi.com
southernxstables.com
speed467.com
speedpal4you.com
sporty.org.ru
stopdriving.net
stw.org.ru
sufficientlife.com
sussexboats.net
swinger-party-free-dating-porn-sluts.com
sydneyhay.com
szmjht.com
teninchtrout.com
thebalancedfruits.com
theendofthesummit.com
thiswillbeit.com
thosethosethose.com
ticyclesofindia.com
tits-gay-fagot-black-tits-bigtits-amateur.com
tonius.com
toohsoft.com
toolvalley.com
tooporno.net
toosexual.com
torngat.com
tour.org.ru
towneluxury.com
trafficmogger.com
triacoach.net
trottinbob.com
tttframes.com
tvjukebox.net
undercvr.com
unfinished-desires.com
unicornonero.com
unionvillefire.com
upsandowns.com
upthehillanddown.com
vallartavideo.com
vietnamdatingservices.com
vinegarlemonshots.com
vizy.net.ru
vnladiesdatingservices.com
vomitandbusted.com
walkingthewalking.com
well-I-am-the-type-of-boy.com
whales.com.ru
whincer.net
whitpagesrippers.com
whois.sc
wipperrippers.com
wordfilebooklets.com
world-sexs.com
xsay.com
xxxchyangel.com
xxxzips.com
youarelostINTransit.com
yuppieslovestocks.com
yuzhouhuagong.com
zhaori-food.com
zwiebelbacke.com',
        'list' => '121hr.com
1st-call.net
1stcool.com
5000n.com
69-xxx.com
9irl.com
9uy.com
a-day-at-the-party.com
accessthepeace.com
adult-model-nude-pictures.com
adult-sex-toys-free-porn.com
agnitum.com
alfonssackpfeiffe.com
alongwayfrommars.com
anime-sex-1.com
anorex-sf-stimulant-free.com
antibot.net
antique-tokiwa.com
apotheke-heute.com
armada31.com
artark.com
artlilei.com
ascendbtg.com
aschalaecheck.com
asian-sex-free-sex.com
aslowspeeker.com
assasinatedfrogs.com
athirst-for-tranquillity.net
aubonpanier.com
avalonumc.com
ayingba.com
bayofnoreturn.com
bbw4phonesex.com
beersarenotfree.com
bierikiuetsch.com
bilingualannouncements.com
black-pussy-toon-clip-anal-lover-single.com
blownapart.com
blueroutes.com
boasex.com
booksandpages.com
bootyquake.com
bossyhunter.com
boyz-sex.com
brokersaandpokers.com
browserwindowcleaner.com
budobytes.com
business2fun.com
buymyshitz.com
byuntaesex.com
caniputsomeloveINToyou.com
cartoons.net.ru
caverunsailing.com
certainhealth.com
clantea.com
close-protection-services.com
clubcanino.com
clubstic.com
cobrakai-skf.com
collegefucktour.co.uk
commanderspank.com
coolenabled.com
crusecountryart.com
crusingforsex.co.uk
cunt-twat-pussy-juice-clit-licking.com
customerhandshaker.com
cyborgrama.com
darkprofits.co.uk
datingforme.co.uk
datingmind.com
degree.org.ru
delorentos.com
diggydigger.com
dinkydonkyaussie.com
djpritchard.com
djtop.com
draufgeschissen.com
dreamerteens.co.uk
ebonyarchives.co.uk
ebonyplaya.co.uk
ecobuilder2000.com
emailandemail.com
emedici.net
engine-on-fire.com
erocity.co.uk
esport3.com
eteenbabes.com
eurofreepages.com
eurotexans.com
evolucionweb.com
fakoli.com
fe4ba.com
ferienschweden.com
findly.com
firsttimeteadrinker.com
fishing.net.ru
flatwonkers.com
flowershopentertainment.com
flymario.com
free-xxx-pictures-porno-gallery.com
freebestporn.com
freefuckingmovies.co.uk
freexxxstuff.co.uk
fruitologist.net
fruitsandbolts.com
fuck-cumshots-free-midget-movie-clips.com
fuck-michaelmoore.com
fundacep.com
gadless.com
gallapagosrangers.com
galleries4free.co.uk
galofu.com
gaypixpost.co.uk
geomasti.com
girltime.co.uk
glassrope.com
godjustblessyouall.com
goldenageresort.com
gonnabedaddies.com
granadasexi.com
granadasexi.com
guardingtheangels.com
guyprofiles.co.uk
happy1225.com
happychappywacky.com
health.org.ru
hexplas.com
highheelsmodels4fun.com
hillsweb.com
hiptuner.com
historyINTospace.com
hoa-tuoi.com
homebuyinginatlanta.com
horizonultra.com
horseminiature.net
hotkiss.co.uk
hotlivegirls.co.uk
hotmatchup.co.uk
husler.co.uk
iaentertainment.com
iamnotsomeone.com
iconsofcorruption.com
ihavenotrustinyou.com
informat-systems.com
INTeriorproshop.com
INTersoftnetworks.com
INThecrib.com
investment4cashiers.com
iti-trailers.com
jackpot-hacker.com
jacks-world.com
jamesthesailorbasher.com
jesuislemonds.com
justanotherdomainname.com
kampelicka.com
kanalrattenarsch.com
katzasher.com
kerosinjunkie.com
killasvideo.com
koenigspisser.com
kontorpara.com
l8t.com
laestacion101.com
lambuschlamppen.com
lankasex.co.uk
laser-creations.com
le-tour-du-monde.com
lecraft.com
ledo-design.com
leftregistration.com
lekkikoomastas.com
lepommeau.com
libr-animal.com
libraries.org.ru
likewaterlikewind.com
limbojumpers.com
link.ru
lockportlinks.com
loiproject.com
longtermalternatives.com
lottoeco.com
lucalozzi.com
maki-e-pens.com
malepayperview.co.uk
mangaxoxo.com
maps.org.ru
marcofields.com
masterofcheese.com
masteroftheblasterhill.com
mastheadwankers.com
megafrontier.com
meinschuppen.com
mercurybar.com
metapannas.com
micelebre.com
midnightlaundries.com
mikeapartment.co.uk
millenniumchorus.com
mimundial2002.com
miniaturegallerymm.com
mixtaperadio.com
mondialcoral.com
monja-wakamatsu.com
monstermonkey.net
mouthfreshners.com
mullensholiday.com
musilo.com
myhollowlog.com
myhomephonenumber.com
mykeyboardisbroken.com
mysofia.net
naked-cheaters.com
naked-old-women.com
nastygirls.co.uk
nationclan.net
natterratter.com
naughtyadam.com
nestbeschmutzer.com
netwu.com
newrealeaseonline.com
newrealeasesonline.com
nextfrontiersonline.com
nikostaxi.com
notorious7.com
nrecruiter.com
nursingdepot.com
nustramosse.com
nuturalhicks.com
occaz-auto49.com
ocean-db.net
oilburnerservice.net
omburo.com
oneoz.com
onepageahead.net
onlinewithaline.com
organizate.net
ourownweddingsong.com
owen-music.com
p-partners.com
paginadeautor.com
pakistandutyfree.com
pamanderson.co.uk
parentsense.net
particlewave.net
pay-clic.com
pay4link.net
pcisp.com
persist-pharma.com
peteband.com
petplusindia.com
pickabbw.co.uk
picture-oral-position-lesbian.com
pl8again.com
planeting.net
popusky.com
porn-expert.com
promoblitza.com
proproducts-usa.com
ptcgzone.com
ptporn.com
publishmybong.com
puttingtogether.com
qualifiedcancelations.com
rahost.com
rainbow21.com
rakkashakka.com
randomfeeding.com
rape-art.com
rd-brains.com
realestateonthehill.net
rebuscadobot
requested-stuff.com
retrotrasher.com
ricopositive.com
risorseinrete.com
rotatingcunts.com
runawayclicks.com
rutalibre.com
s-marche.com
sabrosojazz.com
samuraidojo.com
sanaldarbe.com
sasseminars.com
schlampenbruzzler.com
searchmybong.com
seckur.com
sex-asian-porn-INTerracial-photo.com
sex-porn-fuck-hardcore-movie.com
sexa3.net
sexer.com
sexINTention.com
sexnet24.tv
sexomundo.com
sharks.com.ru
shells.com.ru
shop-ecosafe.com
shop-toon-hardcore-fuck-cum-pics.com
silverfussions.com
sin-city-sex.net
sluisvan.com
smutshots.com
snagglersmaggler.com
somethingtoforgetit.com
sophiesplace.net
soursushi.com
southernxstables.com
speed467.com
speedpal4you.com
sporty.org.ru
stopdriving.net
stw.org.ru
sufficientlife.com
sussexboats.net
swinger-party-free-dating-porn-sluts.com
sydneyhay.com
szmjht.com
teninchtrout.com
thebalancedfruits.com
theendofthesummit.com
thiswillbeit.com
thosethosethose.com
ticyclesofindia.com
tits-gay-fagot-black-tits-bigtits-amateur.com
tonius.com
toohsoft.com
toolvalley.com
tooporno.net
toosexual.com
torngat.com
tour.org.ru
towneluxury.com
trafficmogger.com
triacoach.net
trottinbob.com
tttframes.com
tvjukebox.net
undercvr.com
unfinished-desires.com
unicornonero.com
unionvillefire.com
upsandowns.com
upthehillanddown.com
vallartavideo.com
vietnamdatingservices.com
vinegarlemonshots.com
vizy.net.ru
vnladiesdatingservices.com
vomitandbusted.com
walkingthewalking.com
well-I-am-the-type-of-boy.com
whales.com.ru
whincer.net
whitpagesrippers.com
whois.sc
wipperrippers.com
wordfilebooklets.com
world-sexs.com
xsay.com
xxxchyangel.com
xxxzips.com
youarelostINTransit.com
yuppieslovestocks.com
yuzhouhuagong.com
zhaori-food.com
zwiebelbacke.com',
      ),
      'filter' => array(
        0 => '7',
        'blocker' => '7',
        1 => 'filter',
        'block_name' => 'filter',
        2 => '5',
        'activate' => '5',
        3 => '0',
        'block_type' => '0',
        4 => '2',
        'email_lookup' => '2',
        5 => '',
        'forward' => '',
        6 => 'Abuse-Filter',
        'reason' => 'Abuse-Filter',
        7 => 'abuse_filter.tpl',
        'template' => 'abuse_filter.tpl',
        8 => '0',
        'duration' => '0',
        9 => '0',
        'htaccess' => '0',
        10 => '',
        'list' => '',
      ),
      'request' => array(
        0 => '8',
        'blocker' => '8',
        1 => 'request',
        'block_name' => 'request',
        2 => '0',
        'activate' => '0',
        3 => '0',
        'block_type' => '0',
        4 => '0',
        'email_lookup' => '0',
        5 => '',
        'forward' => '',
        6 => 'Abuse-Request',
        'reason' => 'Abuse-Request',
        7 => 'abuse_request.tpl',
        'template' => 'abuse_request.tpl',
        8 => '0',
        'duration' => '0',
        9 => '0',
        'htaccess' => '0',
        10 => '',
        'list' => '',
      ),
      'string' => array(
        0 => '9',
        'blocker' => '9',
        1 => 'string',
        'block_name' => 'string',
        2 => '0',
        'activate' => '0',
        3 => '0',
        'block_type' => '0',
        4 => '0',
        'email_lookup' => '0',
        5 => '',
        'forward' => '',
        6 => 'Abuse-String',
        'reason' => 'Abuse-String',
        7 => 'abuse_string.tpl',
        'template' => 'abuse_string.tpl',
        8 => '0',
        'duration' => '0',
        9 => '0',
        'htaccess' => '0',
        10 => '',
        'list' => '',
      ),
      'admin' => array(
        0 => '10',
        'blocker' => '10',
        1 => 'admin',
        'block_name' => 'admin',
        2 => '0',
        'activate' => '0',
        3 => '0',
        'block_type' => '0',
        4 => '0',
        'email_lookup' => '0',
        5 => '',
        'forward' => '',
        6 => 'Abuse-Admin',
        'reason' => 'Abuse-Admin',
        7 => 'abuse_admin.tpl',
        'template' => 'abuse_admin.tpl',
        8 => '0',
        'duration' => '0',
        9 => '0',
        'htaccess' => '0',
        10 => '',
        'list' => '',
      ),
      'flood' => array(
        0 => '11',
        'blocker' => '11',
        1 => 'flood',
        'block_name' => 'flood',
        2 => '0',
        'activate' => '0',
        3 => '1',
        'block_type' => '1',
        4 => '2',
        'email_lookup' => '2',
        5 => '',
        'forward' => '',
        6 => 'Abuse-Flood',
        'reason' => 'Abuse-Flood',
        7 => 'abuse_flood.tpl',
        'template' => 'abuse_flood.tpl',
        8 => '0',
        'duration' => '0',
        9 => '1',
        'htaccess' => '1',
        10 => '',
        'list' => '',
      ),
    ),
  ),
  'themes' => array(
    'chromo' => array(
      'link1' => 'index.php',
      'link1text' => 'FO OLDAL',
      'link2' => 'modules.php?name=Forums',
      'link2text' => 'FORUM',
      'link3' => 'modules.php?name=Downloads',
      'link3text' => 'LETOLTESEK',
      'link4' => 'modules.php?name=Your_Account',
      'link4text' => 'ADATOK',
      'bgcolor1' => '#AAAFB2',
      'bgcolor2' => '#878C92',
      'bgcolor3' => '#F0F0F0',
      'bgcolor4' => '#F3F4FF',
      'textcolor1' => '#FFFFFF',
      'textcolor2' => '#D59E00',
    ),
    'MG-gs101' => array(
      'link1' => 'index.php',
      'link1text' => 'HOME',
      'link2' => 'modules.php?name=Forums',
      'link2text' => 'FORUMS',
      'link3' => 'modules.php?name=Web_Links',
      'link3text' => 'WEB LINKS',
      'link4' => 'modules.php?name=Downloads',
      'link4text' => 'FILES',
      'link5' => 'modules.php?name=Your_Account',
      'link5text' => 'ACCOUNT',
      'flash' => 'yes',
      'bgcolor1' => '#20292f',
      'bgcolor2' => '#20292f',
      'bgcolor3' => '#20292f',
      'bgcolor4' => '#20292f',
      'textcolor1' => '#ffffff',
      'textcolor2' => '#ffffff',
    ),
  ),
  'donations' => array(
    'block' => array(
      'show_amount' => 'yes',
      'show_anon_amount' => 'yes',
      'button_image' => 'images/donations/x-click-but04.gif',
      'num_donations' => '10',
      'show_dates' => 'yes',
      'message' => 'Find our site useful? Make a small donation to show your support.',
      'show_goal' => 'no',
      'scroll' => 'yes',
      'numbers' => 'no',
    ),
    'general' => array(
      'pp_email' => '',
      'donation_name' => 'Site Donation',
      'donation_code' => 'site_donation',
      'button_image' => 'images/donations/x-click-butcc-donate.gif',
      'currency' => 'USD',
      'monthly_goal' => '50.00',
      'date_format' => 'm/d/Y',
      'type_private' => 'no',
      'type_anon' => 'no',
      'thank_image' => '',
      'thank_message' => 'Thank you for your kind donation!<br /><br />Please come again!',
      'cancel_image' => 'images/logo.gif',
      'cancel_message' => 'Sorry you could not donate!<br /><br />Please come again!',
      'page_image' => 'images/logo.gif',
      'message' => 'yes',
      'codes' => '',
      'cookie' => 'no',
    ),
    'donations_clear' => 1193859214,
  ),
  'evouserinfo' => array(
    'active' => array(
      0 => array(
        0 => 'Jó napot',
        'name' => 'Jó napot',
        1 => 'good_afternoon',
        'filename' => 'good_afternoon',
        2 => '1',
        'active' => '1',
        3 => '1',
        'position' => '1',
        4 => '',
        'image' => '',
      ),
      1 => array(
        0 => 'Avatar',
        'name' => 'Avatar',
        1 => 'avatar',
        'filename' => 'avatar',
        2 => '1',
        'active' => '1',
        3 => '2',
        'position' => '2',
        4 => '',
        'image' => '',
      ),
      2 => array(
        0 => 'Összetör',
        'name' => 'Összetör',
        1 => 'Break',
        'filename' => 'Break',
        2 => '1',
        'active' => '1',
        3 => '3',
        'position' => '3',
        4 => '',
        'image' => '',
      ),
      3 => array(
        0 => 'Tag',
        'name' => 'Tag',
        1 => 'members',
        'filename' => 'members',
        2 => '1',
        'active' => '1',
        3 => '4',
        'position' => '4',
        4 => '',
        'image' => '',
      ),
      4 => array(
        0 => 'Rank',
        'name' => 'Rank',
        1 => 'rank',
        'filename' => 'rank',
        2 => '1',
        'active' => '1',
        3 => '5',
        'position' => '5',
        4 => '',
        'image' => '',
      ),
      5 => array(
        0 => 'Összetör',
        'name' => 'Összetör',
        1 => 'Break',
        'filename' => 'Break',
        2 => '1',
        'active' => '1',
        3 => '6',
        'position' => '6',
        4 => '',
        'image' => '',
      ),
      6 => array(
        0 => 'PMs',
        'name' => 'PMs',
        1 => 'pms',
        'filename' => 'pms',
        2 => '1',
        'active' => '1',
        3 => '7',
        'position' => '7',
        4 => '',
        'image' => '',
      ),
      7 => array(
        0 => 'Bejelentkezés/kilépés/reg',
        'name' => 'Bejelentkezés/kilépés/reg',
        1 => 'bejelentkezés',
        'filename' => 'bejelentkezés',
        2 => '1',
        'active' => '1',
        3 => '8',
        'position' => '8',
        4 => '',
        'image' => '',
      ),
      8 => array(
        0 => 'Összetör',
        'name' => 'Összetör',
        1 => 'Break',
        'filename' => 'Break',
        2 => '1',
        'active' => '1',
        3 => '9',
        'position' => '9',
        4 => '',
        'image' => '',
      ),
      9 => array(
        0 => 'Current Online',
        'name' => 'Current Online',
        1 => 'online',
        'filename' => 'online',
        2 => '1',
        'active' => '1',
        3 => '10',
        'position' => '10',
        4 => '',
        'image' => '',
      ),
      10 => array(
        0 => 'Felhasználók',
        'name' => 'Felhasználók',
        1 => 'users',
        'filename' => 'users',
        2 => '1',
        'active' => '1',
        3 => '11',
        'position' => '11',
        4 => '',
        'image' => '',
      ),
      11 => array(
        0 => 'Összetör',
        'name' => 'Összetör',
        1 => 'Break',
        'filename' => 'Break',
        2 => '1',
        'active' => '1',
        3 => '12',
        'position' => '12',
        4 => '',
        'image' => '',
      ),
      12 => array(
        0 => 'Legtöbb Valaha',
        'name' => 'Legtöbb Valaha',
        1 => 'mostever',
        'filename' => 'mostever',
        2 => '1',
        'active' => '1',
        3 => '13',
        'position' => '13',
        4 => '',
        'image' => '',
      ),
      13 => array(
        0 => 'Összetör',
        'name' => 'Összetör',
        1 => 'Break',
        'filename' => 'Break',
        2 => '1',
        'active' => '1',
        3 => '14',
        'position' => '14',
        4 => '',
        'image' => '',
      ),
      14 => array(
        0 => 'Posta',
        'name' => 'Posta',
        1 => 'posts',
        'filename' => 'posts',
        2 => '1',
        'active' => '1',
        3 => '15',
        'position' => '15',
        4 => '',
        'image' => '',
      ),
    ),
  ),
  'submissions' => array(
    'numsupact' => '1',
  ),
);

?>