<?php
require_once dirname(__FILE__) .'/../../../sources/Afup/Bootstrap/Http.php';
$smarty->caching = false;

$aujourdhui = time();
$date_forum = mktime(0, 0, 0, 12, 8, 2008);
$jours_avant_forum = $date_forum - $aujourdhui;

if ($jours_avant_forum < 0) {
	$alerte_avant_forum = "<fieldset>";
	$alerte_avant_forum .= "<legend>&nbsp;Inscriptions fermées !&nbsp;</legend>";
	$alerte_avant_forum .= "<h3>Les inscriptions sont désormais fermées.<br /> Rendez-vous l'année prochaine.</h3>";
	$alerte_avant_forum .= "</fieldset>";
} else {
	$alerte_avant_forum = "";
}
$smarty->assign('alerte_avant_forum', $alerte_avant_forum);

$infos_importantes = array();

$info_importante['titre'] = "Séance de dédicaces au Forum PHP 2008";
$info_importante['contenu'] = "<p>L'Association Française des Utilisateurs de PHP organise une séance de dédicace autour de ses nombreux auteurs. Venez rencontrer les auteurs de vos livres références&nbsp;!</p>
<dl>
<dt><strong>PHP 5 avancé 5ème édition</strong></dt>
<dd>Eric Daspet et Cyril Pierre de Geyer, Eyrolles (<a href=\"http://www.eyrolles.com/Informatique/Livre/php-5-avance-9782212123692\">résumé</a>)</dd>
<dt><strong>Sécurité PHP 5 et MySQL</strong></dt>
<dd>Damien Seguy, Eyrolles (<a href=\"http://www.eyrolles.com/Informatique/Livre/securite-php-5-et-mysql-9782212121148\">résumé</a>)</dd>
<dt><strong>Best practices PHP 5</strong></dt>
<dd>Guillaume Ponçon, Eyrolles (<a href=\"http://www.eyrolles.com/Informatique/Livre/best-practices-php-5-9782212116762\">résumé</a>)</dd>
<dt><strong>PHP & MySQL - MySQLi - PDO, Construisez votre application</strong></dt>
<dd>Christophe Villeneuve, Editions ENI (<a href=\"http://www.editions-eni.fr/Livres/PHP-et-MySQL---MySQLi---PDO-Construisez-votre-application/.4_3a6222cf-b921-41f5-886c-c989f77ba994_122b93d8-8d5b-4998-94f9-f507cad15d99_1_0_d9bd8b5e-f324-473f-b1fc-b41b421c950f.html?partner=A50027&amp;xtor=AL-50027\">résumé</a>)</dd>
<dt><strong>Zend Framework bien developper en PHP</strong></dt>
<dd>Julien Pauli et Guillaume Ponçon, Eyrolles, disponible le 4 décembre 2008 (<a href=\"http://www.eyrolles.com/Informatique/Livre/zend-framework-bien-developper-en-php-9782212123920\">résumé</a>)</dd>
<dt><strong>The Definitive Guide to Symfony</strong></dt>
<dd>Fabien Potencier, aPress (<a href=\"http://www.amazon.fr/Definitive-Guide-Symfony-Fabien-Potencier/dp/1590597869\">résumé</a>)</dd>
<dl>

<p>Alors apporter vos ouvrages&nbsp;!!!</p>
<p>Et en plus, les principaux rédacteurs des magazines (<a href=\"http://www.phpsolmag.org/fr\">PHP Solutions</a>, <a href=\"http://www.programmez.com\">Programmez</a>) seront présents&nbsp;: Julien Pauli, Guillaume Ponçon, Christophe Villeneuve, Damien Seguy, Cyril Pierre de Geyer, Olivier Dasini, Sarah Haim...</p>
<p><em>Note : aucune vente ne sera effectuée sur place, mais peut-être vous aurez la chance de gagner un des exemplaires.</em></p>";
$infos_importantes[] = $info_importante;

$info_importante['titre'] = "Un autre invité de marque attendu au Forum PHP 2008";
$info_importante['contenu'] = "<p>C'est lui :</p>".
"<p align='center'><img src='http://www.afup.org/IMG/jpg/crop.jpg' /></p>";
$infos_importantes[] = $info_importante;

$info_importante['titre'] = "Réservez votre agenda : ce sera les 8 et 9 décembre 2008";
$info_importante['contenu'] = "<p>Le Forum PHP 2008 est officiellement annoncé pour les 8 et 9 décembre 2008.</p>".
"<p>Les thèmes principaux pour cette édition sont :</p>".
"<p align='center'><strong>Web services professionnels</strong>".
"<br />et<br />".
"<strong>Grands projets en PHP : organisation, méthodes et bonnes pratiques</strong>.</p>".
"<p>Il aura lieu à l'ASIEM dans le VIIème arrondissement à Paris (France).</p>";
$infos_importantes[] = $info_importante;

$smarty->assign('infos_importantes', $infos_importantes);

$actualites = array();

$actualite['titre'] = "Changement d'horaire de session";
$actualite['contenu'] = "<p>Les sessions &quot;Votre entreprise en Open Source&quot; et 
                         &quot;Conseil et astuces pour créer une entreprise innovante&quot; sont interverties.</p>
                         <p>Nouveaux horaires: &quot; votre entreprise...&quot; 
                         le lundi à 10h00, et &quot;conseils...&quot; le mardi à 16h00.</p>";
$actualite['date'] = "7 décembre 2008";
$actualites[] = $actualite;


$actualite['titre'] = "PHP 5.3 : les nouveautés du futur si proche";
$actualite['contenu'] = "<p>Pascal Martin qui dissèque régulièrement les nouveautés de la version 5.3
							de PHP sur <a href='http://blog.pascal-martin.fr/tag/php-5.3'>son blog</a>
							sera présent au Forum PHP 2008. Il présentera une session sur
							<a href='http://afup.org/pages/forumphp2008/sessions.php#139'>les dernières
							innovations du langage</a>. En outre la session de David Bonnet sur les analyses
							de code a dû être annulée : les visiteurs intéressés par le sujet auront
							quand même la chance de suivre
							la <a href='http://afup.org/pages/forumphp2008/sessions.php#90'>
							conférence de David Sklar</a> sur le sujet.</p>";
$actualite['date'] = "24 novembre 2008";
$actualites[] = $actualite;

$actualite['titre'] = "Zeev Zuraski sera présent";
$actualite['contenu'] = "<p>Nous venons d'avoir la confirmation de la venue de Zeev Zuraski, 
							co-architecte de PHP et co-fondateur de Zend Technologies,
							intervenant sur l'état de l'art en PHP et sur l'émergence
							de la création d'applications Web de nouvelle génération.</p>";
$actualite['date'] = "19 novembre 2008";
$actualites[] = $actualite;

$actualite['titre'] = "Les têtes d'affiche : Zak, Laura et Lukas";
$actualite['contenu'] = "<p>D'ores et déjà trois experts internationaux ont répondu présents à la proposition
							de l'AFUP pour le Forum PHP 2008.</p>
							<p><strong><a href=\"http://zak.greant.com/\">Zak Greant</a></strong> est
							un contributeur	de longue date à PHP. Il participe aussi activement à Mozilla
							et à la FSF.</p>
							<p><strong><a href=\"http://www.laurathomson.com/\">Laura Thompson</a></strong> est
							salariée de Mozilla en tant que Senior Software Engineer. Elle a entre autres mis sur pied
							le site des add-ons avec CakePHP.</p>
							<p><strong><a href=\"http://pooteeweet.org/\">Lukas Smith</a></strong> est devenu en
							quelques années une des pièces maitresse de PHP : en particulier, il coordonne tous
							les développements via le <a href=\"http://wiki.php.net/\">wiki de PHP</a>.</p>";
$actualite['date'] = "15 septembre 2008";
$actualites[] = $actualite;

$actualite['titre'] = "Appel à conférenciers !";
$actualite['contenu'] = "<p>Experts francophones de PHP & L'AFUP vous invite à
							<a href=\"appel-a-conferenciers.php\">envoyer vos propositions de sessions</a>
							pour l'édition 2008 de son Forum PHP à Paris.</p>";
$actualite['date'] = "07 avril 2008";
$actualites[] = $actualite;

$smarty->assign('actualites', $actualites);

$smarty->display('index.html');
