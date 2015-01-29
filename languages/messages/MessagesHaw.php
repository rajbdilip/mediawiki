<?php
/** Hawaiian (Hawai`i)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$namespaceNames = array(
	NS_MEDIA            => 'Pāpaho',
	NS_SPECIAL          => 'Papa_nui',
	NS_TALK             => 'Kūkākūkā',
	NS_USER             => 'Mea_hoʻohana',
	NS_USER_TALK        => 'Kūkākūkā_o_mea_hoʻohana',
	NS_PROJECT_TALK     => 'Kūkākūkā_o_Wikipikia',
	NS_FILE             => 'Waihona',
	NS_FILE_TALK        => 'Kūkākūkā_o_waihona',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Kūkākūkā_o_MediaWiki',
	NS_TEMPLATE         => 'Anakuhi',
	NS_TEMPLATE_TALK    => 'Kūkākūkā_o_anakuhi',
	NS_HELP             => 'Kōkua',
	NS_HELP_TALK        => 'Kūkākūkā_o_kōkua',
	NS_CATEGORY         => 'Māhele',
	NS_CATEGORY_TALK    => 'Kūkākūkā_o_māhele',
);

$namespaceAliases = array(
	'Kiʻi' => NS_FILE,
	'Kūkākūkā_o_kiʻi' => NS_FILE_TALK,
);

$specialPageAliases = array(
	'Activeusers'               => array( 'MeaHoʻohanaNei', 'MeaHoohanaNei' ),
	'Allmessages'               => array( 'PūlonoApau', 'PulonoApau' ),
	'Ancientpages'              => array( 'ʻAoʻaoKahiko', 'AoaoKahiko' ),
	'Blankpage'                 => array( 'ʻAoʻaoHakahaka', 'AoaoHakahaka' ),
	'Categories'                => array( 'Māhele', 'Mahele' ),
	'ChangeEmail'               => array( 'LoliLekauila' ),
	'Confirmemail'              => array( 'HōʻoiaLekauila', 'HōoiaLekauila', 'HoʻoiaLekauila', 'HooiaLekauila' ),
	'Contributions'             => array( 'Haʻawina', 'Haawina' ),
	'CreateAccount'             => array( 'Kāinoa', 'Kainoa' ),
	'Diff'                      => array( 'ʻOkoʻa', 'Okoa' ),
	'Emailuser'                 => array( 'LekaUila' ),
	'Export'                    => array( 'Kāpuka', 'Kapuka' ),
	'Filepath'                  => array( 'AlaWaihona' ),
	'Import'                    => array( 'Kākomo', 'Kakomo' ),
	'LinkSearch'                => array( 'HuliLoulou' ),
	'Listadmins'                => array( 'HeluKahu' ),
	'Listbots'                  => array( 'HeluLōpako', 'HeluLopako' ),
	'Listredirects'             => array( 'HeluKiahou' ),
	'Listusers'                 => array( 'HeluMeaHoʻohana', 'HeluMeaHoohana' ),
	'Log'                       => array( 'Moʻolelo', 'Moolelo' ),
	'Longpages'                 => array( 'ʻAoʻaoLoa', 'AoaoLoa' ),
	'MIMEsearch'                => array( 'HuliMIME' ),
	'Movepage'                  => array( 'HoʻoneʻeʻAoʻao', 'HooneeAoao' ),
	'Mycontributions'           => array( 'KaʻuHaʻawina', 'KauHaawina' ),
	'Mypage'                    => array( 'KaʻuʻAoʻao', 'KauAoao' ),
	'Mytalk'                    => array( 'KaʻuWalaʻau', 'KauWalaau' ),
	'Newpages'                  => array( 'ʻAoʻaoHou', 'AoaoHou' ),
	'Preferences'               => array( 'Makemake' ),
	'Randompage'                => array( 'Kaulele' ),
	'Recentchanges'             => array( 'NāLoliHou', 'NaLoliHou' ),
	'Redirect'                  => array( 'Kiahou' ),
	'Search'                    => array( 'Huli' ),
	'Shortpages'                => array( 'ʻAoʻaoPōkole', 'AoaoPokole' ),
	'Specialpages'              => array( 'PapaNui' ),
	'Statistics'                => array( 'ʻIkehelupili', 'Ikehelupili' ),
	'Tags'                      => array( 'Lepili' ),
	'Upload'                    => array( 'Hoʻouka', 'Hoouka' ),
	'Userlogin'                 => array( 'ʻEʻe', 'Ee' ),
	'Userlogout'                => array( 'Haʻalele', 'Haalele' ),
	'Version'                   => array( 'Mana' ),
	'Watchlist'                 => array( 'PapaKiaʻi', 'PapaKiai' ),
);

$magicWords = array(
	'currentmonth'              => array( '1', 'KĒIAMAHINA', 'KEIAMAHINA', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonthname'          => array( '1', 'KĒIAINOAMAHINA', 'KEIAINOAMAHINA', 'CURRENTMONTHNAME' ),
	'currentday'                => array( '1', 'KĒIALĀ', 'KEIALA', 'CURRENTDAY' ),
	'currentday2'               => array( '1', 'KĒIALĀ2', 'KEIALA2', 'CURRENTDAY2' ),
	'currentdayname'            => array( '1', 'KĒIAINOALĀ', 'KEIAINOALA', 'CURRENTDAYNAME' ),
	'currentyear'               => array( '1', 'KĒIAMAKAHIKI', 'KEIAMAKAHIKI', 'CURRENTYEAR' ),
	'currenttime'               => array( '1', 'KĒIAMANAWA', 'KEIAMANAWA', 'CURRENTTIME' ),
	'currenthour'               => array( '1', 'KĒIAHOLA', 'KEIAHOLA', 'CURRENTHOUR' ),
	'numberofpages'             => array( '1', 'HELUʻAOʻAO', 'HELUAOAO', 'NUMBEROFPAGES' ),
	'numberofarticles'          => array( '1', 'HELUMEA', 'NUMBEROFARTICLES' ),
	'numberoffiles'             => array( '1', 'HELUWAIHONA', 'NUMBEROFFILES' ),
	'numberofusers'             => array( '1', 'HELUMEAHOʻOHANA', 'HELUMEAHOOHANA', 'NUMBEROFUSERS' ),
	'numberofedits'             => array( '1', 'HELULOLI', 'NUMBEROFEDITS' ),
	'pagename'                  => array( '1', 'INOAʻAOʻAO', 'INOAAOAO', 'PAGENAME' ),
	'img_right'                 => array( '1', 'ʻākau', 'ākau', 'akau', 'right' ),
	'img_left'                  => array( '1', 'hema', 'left' ),
	'img_none'                  => array( '1', 'ʻaʻohe', 'aohe', 'none' ),
	'img_link'                  => array( '1', 'loulou=$1', 'link=$1' ),
	'currentweek'               => array( '1', 'KĒIAPULE', 'KEIAPULE', 'CURRENTWEEK' ),
	'language'                  => array( '0', '#ʻŌLELO', '#ŌLELO', '#OLELO', '#LANGUAGE:' ),
	'numberofadmins'            => array( '1', 'HELUKAHU', 'NUMBEROFADMINS' ),
);

