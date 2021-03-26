<?php
// Plugin definition
$plugin = array(
  'title' => t('Row Alternatives (Mobile)'),
  'icon' => 'mobile-alternate.png',
  'category' => t('Panopoly'),
  'theme' => 'mobile-alternate',
  'css' => 'mobile-alternate.css',
  'regions' => array(
      'bannerheader-thin' => t('-- BANNER (HEADER) --'),
      'firstsectionrow1col1' => t('-- FIRST SECTION (ROW 1 - COL 1) --'),
      'firstsectionrow1col2' => t('-- FIRST SECTION (ROW 1 - COL 2) --'),
      'secondsectionrow2col1' => t('-- SECOND SECTION (ROW 2 - COL 1) --'),
      'secondsectionrow2col2' => t('-- SECOND SECTION (ROW 2 - COL 2) --'),
      'thirdsectionrow3col1' => t('-- THIRD SECTION (ROW 3 - COL 1) --'),
      'thirdsectionrow3col2' => t('-- THIRD SECTION (ROW 3 - COL 2) --'),
      'fourthsectionrow4col1' => t('-- FOURTH SECTION (ROW 4 - COL 1) --'),
      'fourthsectionrow4col2' => t('-- FOURTH SECTION (ROW 4 - COL 2) --'),
      'fifthsectionrow5col1' => t('-- FIFTH SECTION (ROW 5 - COL 1) --'),
      'fifthsectionrow5col2' => t('-- FIFTH SECTION (ROW 5 - COL 2) --'),
      'footersectionrow6col1' => t('-- FOOTER SECTION (ROW 6 - COL 1) --'),
	),
);