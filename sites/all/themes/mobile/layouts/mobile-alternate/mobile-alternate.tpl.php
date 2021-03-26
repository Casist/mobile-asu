<?php
/**
 * @file
 * Template for custom Panopoly layout - Front Page (Get Protected).
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display mobile-alternate clearfix <?php !empty($class) ? print $class : ''; ?>" <?php !empty($css_id) ? print "id=\"$css_id\"" : ''; ?>>

    <section class="section section-post-header">
        <div class="container">
            <div class="row row-1 mobile-alternate-single-column row-full">
                <div class="column col-md-12 mobile-alternate-post-header-row1">
                    <?php print $content['bannerheader-thin']; ?>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.section-post-header -->

    <section class="section section-content">
        <div class="container">
            <div class="row row-1 mobile-alternate-double-column">
                <div class="column col-xs-12 col-md-6 mobile-alternate-first-row1-col1">
                    <?php print $content['firstsectionrow1col1']; ?>
                </div>
                <div class="column col-xs-12 col-md-6 mobile-alternate-first-row1-col2">
                    <?php print $content['firstsectionrow1col2']; ?>
                </div>
            </div>
            <div class="row row-2 mobile-alternate-double-column">
                <div class="column col-xs-12 col-md-6 mobile-alternate-second-row2-col1">
                    <?php print $content['secondsectionrow2col1']; ?>
                </div>
                <div class="column col-xs-12 col-md-6 mobile-alternate-second-row2-col2">
                    <?php print $content['secondsectionrow2col2']; ?>
                </div>
            </div>
            <div class="row row-3 mobile-alternate-double-column">
                <div class="column col-xs-12 col-md-6 mobile-alternate-third-row3-col1">
                    <?php print $content['thirdsectionrow3col1']; ?>
                </div>
                <div class="column col-xs-12 col-md-6 mobile-alternate-third-row3-col2">
                    <?php print $content['thirdsectionrow3col2']; ?>
                </div>
            </div>
            <div class="row row-4 mobile-alternate-double-column">
                <div class="column col-xs-12 col-md-6 mobile-alternate-fourth-row4-col1">
                    <?php print $content['fourthsectionrow4col1']; ?>
                </div>
                <div class="column col-xs-12 col-md-6 mobile-alternate-fourth-row4-col2">
                    <?php print $content['fourthsectionrow4col2']; ?>
                </div>
            </div>
            <div class="row row-5 mobile-alternate-double-column">
                <div class="column col-xs-12 col-md-6 mobile-alternate-fifth-row5-col1">
                    <?php print $content['fifthsectionrow5col1']; ?>
                </div>
                <div class="column col-xs-12 col-md-6 mobile-alternate-fifth-row5-col2">
                    <?php print $content['fifthsectionrow5col2']; ?>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.section-content -->

    <section class="section section-footer">
        <div class="container">
            <div class="row row-1 mobile-alternate-single-column row-full">
                <div class="column col-md-12 mobile-alternate-footer-row6">
                    <?php print $content['footersectionrow6col1']; ?>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.section-footer -->


</div><!-- /.mobile-alternate -->
