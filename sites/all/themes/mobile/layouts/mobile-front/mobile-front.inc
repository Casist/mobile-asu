<?php
// Plugin definition
$plugin = array(
  'title' => t('Front Page (Mobile)'),
  'icon' => 'mobile-front.png',
  'category' => t('Panopoly'),
  'theme' => 'mobile-front',
  'css' => 'mobile-front.css',
  'regions' => array(
      'bannerheader' => t('-- BANNER (HEADER) --'),
      'firstsectionrow1col1' => t('-- FIRST SECTION (ROW 1 - COL 1) --'),
      'firstsectionrow1col2' => t('-- FIRST SECTION (ROW 1 - COL 2) --'),
      'secondsectionrow2col1' => t('-- SECOND SECTION (ROW 2 - COL 1 - BACKGROUND) --'),
      'secondsectionrow2col2' => t('-- SECOND SECTION (ROW 2 - COL 1) --'),
      'thirdsectionrow3col1' => t('-- THIRD SECTION (ROW 3 - COL 1) --'),
      'fourthsectionrow4col1' => t('-- FOURTH SECTION (ROW 4 - COL 1) --'),
      'fourthsectionrow4col2' => t('-- FOURTH SECTION (ROW 4 - COL 2) --'),
      'fourthsectionrow4col3' => t('-- FOURTH SECTION (ROW 4 - COL 3) --'),
	),
);