<?php
/** Occitan (occitan)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Boulaur
 * @author Cedric31
 * @author ChrisPtDe
 * @author Fryed-peach
 * @author Jfblanc
 * @author Kaganer
 * @author McDutchie
 * @author Nemo bis
 * @author Spacebirdy
 * @author Горан Анђелковић
 * @author לערי ריינהארט
 */

$bookstoreList = array(
	'Amazon.fr' => 'http://www.amazon.fr/exec/obidos/ISBN=$1'
);

$namespaceNames = array(
	NS_MEDIA            => 'Mèdia',
	NS_SPECIAL          => 'Especial',
	NS_TALK             => 'Discutir',
	NS_USER             => 'Utilizaire',
	NS_USER_TALK        => 'Discussion_Utilizaire',
	NS_PROJECT_TALK     => 'Discussion_$1',
	NS_FILE             => 'Fichièr',
	NS_FILE_TALK        => 'Discussion_Fichièr',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Discussion_MediaWiki',
	NS_TEMPLATE         => 'Modèl',
	NS_TEMPLATE_TALK    => 'Discussion_Modèl',
	NS_HELP             => 'Ajuda',
	NS_HELP_TALK        => 'Discussion_Ajuda',
	NS_CATEGORY         => 'Categoria',
	NS_CATEGORY_TALK    => 'Discussion_Categoria',
);

$namespaceAliases = array(
	'Utilisator'            => NS_USER,
	'Discussion_Utilisator' => NS_USER_TALK,
	'Discutida_Utilisator' => NS_USER_TALK,
	'Discutida_Imatge'     => NS_FILE_TALK,
	'Mediaòiqui'           => NS_MEDIAWIKI,
	'Discussion_Mediaòiqui' => NS_MEDIAWIKI_TALK,
	'Discutida_Mediaòiqui' => NS_MEDIAWIKI_TALK,
	'Discutida_Modèl'      => NS_TEMPLATE_TALK,
	'Discutida_Ajuda'      => NS_HELP_TALK,
	'Discutida_Categoria'  => NS_CATEGORY_TALK,
	'Imatge'               => NS_FILE,
	'Discussion_Imatge'    => NS_FILE_TALK,
);

$specialPageAliases = array(
	'Allmessages'               => array( 'Messatge_sistèma', 'Messatge_del_sistèma' ),
	'Allpages'                  => array( 'Totas_las_paginas' ),
	'Ancientpages'              => array( 'Paginas_ancianas' ),
	'Blankpage'                 => array( 'Pagina_blanca', 'PaginaBlanca' ),
	'Block'                     => array( 'Blocar', 'Blocatge' ),
	'Booksources'               => array( 'Obratge_de_referéncia', 'Obratges_de_referéncia' ),
	'BrokenRedirects'           => array( 'Redireccions_copadas', 'RedireccionsCopadas' ),
	'Categories'                => array( 'Categorias' ),
	'ChangePassword'            => array( 'Reïnicializacion_del_senhal', 'Reinicializaciondelsenhal' ),
	'Confirmemail'              => array( 'Confirmar_lo_corrièr_electronic', 'Confirmarlocorrièrelectronic', 'ConfirmarCorrièrElectronic' ),
	'Contributions'             => array( 'Contribucions' ),
	'CreateAccount'             => array( 'Crear_un_compte', 'CrearUnCompte', 'CrearCompte' ),
	'Deadendpages'              => array( 'Paginas_sul_camin_d\'enlòc' ),
	'DeletedContributions'      => array( 'Contribucions_escafadas', 'ContribucionsEscafadas' ),
	'DoubleRedirects'           => array( 'Redireccions_doblas', 'RedireccionsDoblas' ),
	'Emailuser'                 => array( 'Corrièr_electronic', 'Emèl', 'Emèil' ),
	'Export'                    => array( 'Exportar', 'Exportacion' ),
	'Fewestrevisions'           => array( 'Mens_de_revisions' ),
	'FileDuplicateSearch'       => array( 'Recèrca_fichièr_en_doble', 'RecèrcaFichièrEnDoble' ),
	'Filepath'                  => array( 'Camin_del_Fichièr', 'CamindelFichièr', 'CaminFichièr' ),
	'Import'                    => array( 'Impòrt', 'Importacion' ),
	'Invalidateemail'           => array( 'Invalidar_Corrièr_electronic', 'InvalidarCorrièrElectronic' ),
	'BlockList'                 => array( 'Utilizaires_blocats' ),
	'LinkSearch'                => array( 'Recèrca_de_ligams', 'RecèrcaDeLigams' ),
	'Listadmins'                => array( 'Lista_dels_administrators', 'Listadelsadministrators', 'Lista_dels_admins', 'Listadelsadmins', 'Lista_admins', 'Listaadmins' ),
	'Listbots'                  => array( 'Lista_dels_Bòts', 'ListadelsBòts', 'Lista_dels_Bots', 'ListadelsBots' ),
	'Listfiles'                 => array( 'Lista_dels_imatges', 'ListaDelsImatges' ),
	'Listgrouprights'           => array( 'Lista_dels_gropes_utilizaire', 'ListadelsGropesUtilizaire', 'ListaGropesUtilizaire', 'Tièra_dels_gropes_utilizaire', 'TièradelsGropesUtilizaire', 'TièraGropesUtilizaire' ),
	'Listredirects'             => array( 'Lista_de_las_redireccions', 'Listadelasredireccions', 'Lista_dels_redirects', 'Listadelsredirects', 'Lista_redireccions', 'Listaredireccions', 'Lista_redirects', 'Listaredirects' ),
	'Listusers'                 => array( 'Lista_dels_utilizaires', 'ListaDelsUtilizaires' ),
	'Lockdb'                    => array( 'Varrolhar_la_banca' ),
	'Log'                       => array( 'Jornal', 'Jornals' ),
	'Lonelypages'               => array( 'Paginas_orfanèlas' ),
	'Longpages'                 => array( 'Articles_longs' ),
	'MergeHistory'              => array( 'Fusionar_l\'istoric', 'Fusionarlistoric' ),
	'MIMEsearch'                => array( 'Recèrca_MIME' ),
	'Mostcategories'            => array( 'Mai_de_categorias' ),
	'Mostimages'                => array( 'Mai_d\'imatges' ),
	'Mostlinked'                => array( 'Imatges_mai_utilizats' ),
	'Mostlinkedcategories'      => array( 'Categorias_mai_utilizadas', 'CategoriasMaiUtilizadas' ),
	'Mostlinkedtemplates'       => array( 'Modèls_mai_utilizats', 'ModèlsMaiUtilizats' ),
	'Mostrevisions'             => array( 'Mai_de_revisions' ),
	'Movepage'                  => array( 'Tornar_nomenar', 'Cambiament_de_nom' ),
	'Mycontributions'           => array( 'Mas_contribucions', 'Mascontribucions' ),
	'Mypage'                    => array( 'Ma_pagina', 'Mapagina' ),
	'Mytalk'                    => array( 'Mas_discussions', 'Masdiscussions' ),
	'Newimages'                 => array( 'Imatges_novèls', 'ImatgesNovèls' ),
	'Newpages'                  => array( 'Paginas_novèlas' ),
	'Popularpages'              => array( 'Paginas_mai_visitadas', 'Paginas_las_mai_visitadas', 'Paginasmaivisitadas' ),
	'Preferences'               => array( 'Preferéncias' ),
	'Prefixindex'               => array( 'Indèx' ),
	'Protectedpages'            => array( 'Paginas_protegidas' ),
	'Protectedtitles'           => array( 'Títols_protegits', 'TítolsProtegits' ),
	'Randompage'                => array( 'Pagina_a_l\'azard' ),
	'Randomredirect'            => array( 'Redireccion_a_l\'azard', 'Redirect_a_l\'azard' ),
	'Recentchanges'             => array( 'Darrièrs_cambiaments', 'DarrièrsCambiaments', 'Darrièras_Modificacions' ),
	'Recentchangeslinked'       => array( 'Seguit_dels_ligams' ),
	'Revisiondelete'            => array( 'Versions_suprimidas' ),
	'Search'                    => array( 'Recèrca', 'Recercar', 'Cercar' ),
	'Shortpages'                => array( 'Articles_brèus' ),
	'Specialpages'              => array( 'Paginas_especialas' ),
	'Statistics'                => array( 'Estatisticas', 'Stats' ),
	'Tags'                      => array( 'Balisas' ),
	'Uncategorizedcategories'   => array( 'Categorias_sens_categoria' ),
	'Uncategorizedimages'       => array( 'Imatges_sens_categoria' ),
	'Uncategorizedpages'        => array( 'Paginas_sens_categoria' ),
	'Uncategorizedtemplates'    => array( 'Modèls_sens_categoria' ),
	'Undelete'                  => array( 'Restablir', 'Restabliment' ),
	'Unlockdb'                  => array( 'Desvarrolhar_la_banca' ),
	'Unusedcategories'          => array( 'Categorias_inutilizadas' ),
	'Unusedimages'              => array( 'Imatges_inutilizats' ),
	'Unusedtemplates'           => array( 'Modèls_inutilizats', 'Modèlsinutilizats', 'Models_inutilizats', 'Modelsinutilizats', 'Modèls_pas_utilizats', 'Modèlspasutilizats', 'Models_pas_utilizats', 'Modelspasutilizats' ),
	'Unwatchedpages'            => array( 'Paginas_pas_seguidas' ),
	'Upload'                    => array( 'Telecargament', 'Telecargaments' ),
	'Userlogin'                 => array( 'Nom_d\'utilizaire' ),
	'Userlogout'                => array( 'Desconnexion' ),
	'Userrights'                => array( 'Dreches', 'Permission' ),
	'Wantedcategories'          => array( 'Categorias_demandadas' ),
	'Wantedfiles'               => array( 'Fichièrs_demandats', 'FichièrsDemandats' ),
	'Wantedpages'               => array( 'Paginas_demandadas' ),
	'Wantedtemplates'           => array( 'Modèls_demandats', 'ModèlsDemandats' ),
	'Watchlist'                 => array( 'Lista_de_seguit', 'ListraDeSeguit', 'Seguit', 'Lista_de_seguiment', 'ListraDeSeguiment', 'Seguiment' ),
	'Whatlinkshere'             => array( 'Paginas_ligadas' ),
	'Withoutinterwiki'          => array( 'Sens_interwiki', 'Sensinterwiki', 'Sens_interwikis', 'Sensinterwikis' ),
);

$magicWords = array(
	'redirect'                  => array( '0', '#REDIRECCION', '#REDIRECT' ),
	'notoc'                     => array( '0', '__CAPDETAULA__', '__PASCAPDESOMARI__', '__PASCAPDETDM__', '__NOTOC__' ),
	'nogallery'                 => array( '0', '__CAPDEGALARIÁ__', '__CAPDEGALARIA__', '__PASCAPDEDEGALARIÁ__', '__NOGALLERY__' ),
	'forcetoc'                  => array( '0', '__FORÇARTAULA__', '__FORÇARSOMARI__', '__FORÇARTDM__', '__FORCETOC__' ),
	'toc'                       => array( '0', '__TAULA__', '__SOMARI__', '__TDM__', '__TOC__' ),
	'noeditsection'             => array( '0', '__SECCIONNONEDITABLA__', '__NOEDITSECTION__' ),
	'currentmonth'              => array( '1', 'MESCORRENT', 'MESACTUAL', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonthname'          => array( '1', 'NOMMESCORRENT', 'NOMMESACTUAL', 'CURRENTMONTHNAME' ),
	'currentmonthnamegen'       => array( '1', 'NOMGENMESCORRENT', 'NOMGENMESACTUAL', 'CURRENTMONTHNAMEGEN' ),
	'currentmonthabbrev'        => array( '1', 'ABREVMESCORRENT', 'ABREVMESACTUAL', 'CURRENTMONTHABBREV' ),
	'currentday'                => array( '1', 'JORNCORRENT', 'JORNACTUAL', 'CURRENTDAY' ),
	'currentday2'               => array( '1', 'JORNCORRENT2', 'JORNACTUAL2', 'CURRENTDAY2' ),
	'currentdayname'            => array( '1', 'NOMJORNCORRENT', 'NOMJORNACTUAL', 'CURRENTDAYNAME' ),
	'currentyear'               => array( '1', 'ANNADACORRENTA', 'ANNADAACTUALA', 'CURRENTYEAR' ),
	'currenttime'               => array( '1', 'DATACORRENTA', 'DATAACTUALA', 'CURRENTTIME' ),
	'currenthour'               => array( '1', 'ORACORRENTA', 'ORAACTUALA', 'CURRENTHOUR' ),
	'localmonth'                => array( '1', 'MESLOCAL', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonthname'            => array( '1', 'NOMMESLOCAL', 'LOCALMONTHNAME' ),
	'localmonthnamegen'         => array( '1', 'NOMGENMESLOCAL', 'LOCALMONTHNAMEGEN' ),
	'localmonthabbrev'          => array( '1', 'ABREVMESLOCAL', 'LOCALMONTHABBREV' ),
	'localday'                  => array( '1', 'JORNLOCAL', 'LOCALDAY' ),
	'localday2'                 => array( '1', 'JORNLOCAL2', 'LOCALDAY2' ),
	'localdayname'              => array( '1', 'NOMJORNLOCAL', 'LOCALDAYNAME' ),
	'localyear'                 => array( '1', 'ANNADALOCALA', 'LOCALYEAR' ),
	'localtime'                 => array( '1', 'ORARILOCAL', 'LOCALTIME' ),
	'localhour'                 => array( '1', 'ORALOCALA', 'LOCALHOUR' ),
	'numberofpages'             => array( '1', 'NOMBREPAGINAS', 'NUMBEROFPAGES' ),
	'numberofarticles'          => array( '1', 'NOMBREARTICLES', 'NUMBEROFARTICLES' ),
	'numberoffiles'             => array( '1', 'NOMBREFICHIÈRS', 'NUMBEROFFILES' ),
	'numberofusers'             => array( '1', 'NOMBREUTILIZAIRES', 'NUMBEROFUSERS' ),
	'numberofactiveusers'       => array( '1', 'NOMBREUTILIZAIRESACTIUS', 'NUMBEROFACTIVEUSERS' ),
	'numberofedits'             => array( '1', 'NOMBREEDICIONS', 'NOMBREMODIFS', 'NUMBEROFEDITS' ),
	'numberofviews'             => array( '1', 'NOMBREVISTAS', 'NUMBEROFVIEWS' ),
	'pagename'                  => array( '1', 'NOMPAGINA', 'PAGENAME' ),
	'pagenamee'                 => array( '1', 'NOMPAGINAX', 'PAGENAMEE' ),
	'namespace'                 => array( '1', 'ESPACINOMENATGE', 'NAMESPACE' ),
	'namespacee'                => array( '1', 'ESPACINOMENATGEX', 'NAMESPACEE' ),
	'talkspace'                 => array( '1', 'ESPACIDISCUSSION', 'TALKSPACE' ),
	'talkspacee'                => array( '1', 'ESPACIDISCUSSIONX', 'TALKSPACEE' ),
	'subjectspace'              => array( '1', 'ESPACISUBJECTE', 'ESPACISUBJÈCTE', 'ESPACIARTICLE', 'SUBJECTSPACE', 'ARTICLESPACE' ),
	'subjectspacee'             => array( '1', 'ESPACISUBJECTEX', 'ESPACISUBJÈCTEX', 'ESPACIARTICLEX', 'SUBJECTSPACEE', 'ARTICLESPACEE' ),
	'fullpagename'              => array( '1', 'NOMPAGINACOMPLET', 'FULLPAGENAME' ),
	'fullpagenamee'             => array( '1', 'NOMPAGINACOMPLETX', 'FULLPAGENAMEE' ),
	'subpagename'               => array( '1', 'NOMSOSPAGINA', 'SUBPAGENAME' ),
	'subpagenamee'              => array( '1', 'NOMSOSPAGINAX', 'SUBPAGENAMEE' ),
	'basepagename'              => array( '1', 'NOMBASADEPAGINA', 'BASEPAGENAME' ),
	'basepagenamee'             => array( '1', 'NOMBASADEPAGINAX', 'BASEPAGENAMEE' ),
	'talkpagename'              => array( '1', 'NOMPAGINADISCUSSION', 'TALKPAGENAME' ),
	'talkpagenamee'             => array( '1', 'NOMPAGINADISCUSSIONX', 'TALKPAGENAMEE' ),
	'subjectpagename'           => array( '1', 'NOMPAGINASUBJECTE', 'NOMPAGINASUBJÈCTE', 'NOMPAGINAARTICLE', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ),
	'subjectpagenamee'          => array( '1', 'NOMPAGINASUBJECTEX', 'NOMPAGINASUBJÈCTEX', 'NOMPAGINAARTICLEX', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ),
	'img_thumbnail'             => array( '1', 'vinheta', 'thumbnail', 'thumb' ),
	'img_manualthumb'           => array( '1', 'vinheta=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'                 => array( '1', 'drecha', 'dreta', 'right' ),
	'img_left'                  => array( '1', 'esquèrra', 'senèstra', 'gaucha', 'left' ),
	'img_none'                  => array( '1', 'neant', 'nonrés', 'none' ),
	'img_center'                => array( '1', 'centrat', 'center', 'centre' ),
	'img_framed'                => array( '1', 'quadre', 'enquagrat', 'framed', 'enframed', 'frame' ),
	'img_frameless'             => array( '1', 'sens_quadre', 'frameless' ),
	'img_upright'               => array( '1', 'redreça', 'redreça$1', 'redreça $1', 'upright', 'upright=$1', 'upright $1' ),
	'img_border'                => array( '1', 'bordadura', 'border' ),
	'img_baseline'              => array( '1', 'linha_de_basa', 'baseline' ),
	'img_sub'                   => array( '1', 'indici', 'ind', 'sub' ),
	'img_super'                 => array( '1', 'exp', 'super', 'sup' ),
	'img_top'                   => array( '1', 'naut', 'top' ),
	'img_text_top'              => array( '1', 'naut-tèxte', 'naut-txt', 'text-top' ),
	'img_middle'                => array( '1', 'mitan', 'middle' ),
	'img_bottom'                => array( '1', 'bas', 'bottom' ),
	'img_text_bottom'           => array( '1', 'bas-tèxte', 'bas-txt', 'text-bottom' ),
	'img_link'                  => array( '1', 'ligam=$1', 'link=$1' ),
	'sitename'                  => array( '1', 'NOMSIT', 'NOMSITE_NOMSITI', 'SITENAME' ),
	'ns'                        => array( '0', 'ESPACEN:', 'NS:' ),
	'localurl'                  => array( '0', 'URLLOCALA:', 'LOCALURL:' ),
	'localurle'                 => array( '0', 'URLLOCALAX:', 'LOCALURLE:' ),
	'server'                    => array( '0', 'SERVIDOR', 'SERVER' ),
	'servername'                => array( '0', 'NOMSERVIDOR', 'SERVERNAME' ),
	'scriptpath'                => array( '0', 'CAMINESCRIPT', 'SCRIPTPATH' ),
	'grammar'                   => array( '0', 'GRAMATICA:', 'GRAMMAR:' ),
	'gender'                    => array( '0', 'GENRE:', 'GENDER:' ),
	'currentweek'               => array( '1', 'SETMANACORRENTA', 'CURRENTWEEK' ),
	'currentdow'                => array( '1', 'JDSCORRENT', 'CURRENTDOW' ),
	'localweek'                 => array( '1', 'SETMANALOCALA', 'LOCALWEEK' ),
	'localdow'                  => array( '1', 'JDSLOCAL', 'LOCALDOW' ),
	'revisionid'                => array( '1', 'NUMÈROVERSION', 'REVISIONID' ),
	'revisionday'               => array( '1', 'DATAVERSION', 'REVISIONDAY' ),
	'revisionday2'              => array( '1', 'DATAVERSION2', 'REVISIONDAY2' ),
	'revisionmonth'             => array( '1', 'MESREVISION', 'REVISIONMONTH' ),
	'revisionyear'              => array( '1', 'ANNADAREVISION', 'ANREVISION', 'REVISIONYEAR' ),
	'revisiontimestamp'         => array( '1', 'ORAREVISION', 'REVISIONTIMESTAMP' ),
	'fullurl'                   => array( '0', 'URLCOMPLETA:', 'FULLURL:' ),
	'fullurle'                  => array( '0', 'URLCOMPLETAX:', 'FULLURLE:' ),
	'lcfirst'                   => array( '0', 'INITMINUS:', 'LCFIRST:' ),
	'ucfirst'                   => array( '0', 'INITMAJUS:', 'UCFIRST:' ),
	'lc'                        => array( '0', 'MINUS:', 'LC:' ),
	'uc'                        => array( '0', 'MAJUS:', 'CAPIT:', 'UC:' ),
	'raw'                       => array( '0', 'LINHA:', 'BRUT:', 'RAW:' ),
	'displaytitle'              => array( '1', 'AFICHARTÍTOL', 'DISPLAYTITLE' ),
	'rawsuffix'                 => array( '1', 'BRUT', 'B', 'R' ),
	'newsectionlink'            => array( '1', '__LIGAMSECCIONNOVÈLA__', '__NEWSECTIONLINK__' ),
	'nonewsectionlink'          => array( '1', '__PASCAPDELIGAMSECCIONNOVÈLA__', '__NONEWSECTIONLINK__' ),
	'currentversion'            => array( '1', 'VERSIONACTUALA', 'CURRENTVERSION' ),
	'urlencode'                 => array( '0', 'ENCÒDAURL:', 'URLENCODE:' ),
	'anchorencode'              => array( '0', 'ENCÒDAANCÒRA', 'ANCHORENCODE' ),
	'currenttimestamp'          => array( '1', 'INSTANTACTUAL', 'CURRENTTIMESTAMP' ),
	'localtimestamp'            => array( '1', 'INSTANTLOCAL', 'LOCALTIMESTAMP' ),
	'directionmark'             => array( '1', 'MARCADIRECCION', 'MARCADIR', 'DIRECTIONMARK', 'DIRMARK' ),
	'language'                  => array( '0', '#LENGA:', '#LANGUAGE:' ),
	'contentlanguage'           => array( '1', 'LENGACONTENGUT', 'LENGCONTENGUT', 'CONTENTLANGUAGE', 'CONTENTLANG' ),
	'pagesinnamespace'          => array( '1', 'PAGINASDINSESPACI:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ),
	'numberofadmins'            => array( '1', 'NOMBREADMINS', 'NUMBEROFADMINS' ),
	'formatnum'                 => array( '0', 'FORMATNOMBRE', 'FORMATNUM' ),
	'padleft'                   => array( '0', 'BORRATGEESQUÈRRA', 'PADLEFT' ),
	'padright'                  => array( '0', 'BORRATGEDRECHA', 'PADRIGHT' ),
	'special'                   => array( '0', 'especial', 'special' ),
	'defaultsort'               => array( '1', 'ORDENA:', 'CLAUDETRIADA:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ),
	'filepath'                  => array( '0', 'CAMIN:', 'FILEPATH:' ),
	'tag'                       => array( '0', 'balisa', 'tag' ),
	'hiddencat'                 => array( '1', '__CATAMAGADA__', '__HIDDENCAT__' ),
	'pagesincategory'           => array( '1', 'PAGINASDINSCAT', 'PAGESINCATEGORY', 'PAGESINCAT' ),
	'pagesize'                  => array( '1', 'TALHAPAGINA', 'PAGESIZE' ),
	'noindex'                   => array( '1', '__PASCAPDINDÈX__', '__NOINDEX__' ),
	'staticredirect'            => array( '1', '__REDIRECCIONESTATICA__', '__STATICREDIRECT__' ),
	'protectionlevel'           => array( '1', 'NIVÈLDEPROTECCION', 'PROTECTIONLEVEL' ),
);

$datePreferences = array(
	'default',
	'oc normal',
	'ISO 8601',
);

$defaultDateFormat = 'oc normal';

$dateFormats = array(
	'oc normal time' => 'H.i',
	'oc normal date' => 'j F "de" Y',
	'oc normal both' => 'j F "de" Y "a" H.i',
);

$separatorTransformTable = array( ',' => "\xc2\xa0", '.' => ',' );

$linkTrail = "/^([a-zàâçéèêîôû]+)(.*)$/sDu";

