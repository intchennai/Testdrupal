<?php
// $Id$
// Last conformed to D7 Head - v 1.3 2009/11/16 05:34:24 webchick
/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE tag.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 */
 global $base_url, $themes, $language ;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language; ?>"  dir="<?php print $language->dir; ?>">

<head profile="<?php print $grddl_profile; ?>">
<link rel="alternate stylesheet" type="text/css" media="screen" title="black-theme" href="<?php print base_path().path_to_theme(); ?>/css/black.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="blue-theme" href="<?php print base_path().path_to_theme(); ?>/css/blue.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="brown-theme" href="<?php print base_path().path_to_theme(); ?>/css/brown.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="bigger" href="<?php print base_path().path_to_theme(); ?>/css/css_bigger.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="small" href="<?php print base_path().path_to_theme(); ?>/css/css_small.css" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>ELCOT</title>
<meta name="description" content="ELCOT">
<meta name="Keywords" content="">
<meta name="viewport" content="width=device-width; initial-scale=1.0">

  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $classes;?> <?php print $attributes;?>">
<?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
