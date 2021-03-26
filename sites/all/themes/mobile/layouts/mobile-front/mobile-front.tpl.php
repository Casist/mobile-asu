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

<div class="panel-display mobile-front clearfix <?php !empty($class) ? print $class : ''; ?>" <?php !empty($css_id) ? print "id=\"$css_id\"" : ''; ?>>

    <section class="section section-post-header">
        <div class="container">
            <div class="row row-1 mobile-front-single-column row-full">
                <div class="column col-md-12 mobile-front-post-header-row1">
                    <?php print $content['bannerheader']; ?>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.section-post-header -->

    <section class="section section-content">
        <div class="container">
            <div class="row row-1 mobile-front-double-column">
                <div class="column col-xs-12 col-md-6 mobile-front-first-row1-col1">
                    <?php print $content['firstsectionrow1col1']; ?>
                </div>
                <div class="column col-xs-12 col-md-6 mobile-front-first-row1-col2">
                    <?php print $content['firstsectionrow1col2']; ?>
                </div>
            </div>
            <div class="row row-2 mobile-front-single-column">
                <div class="column col-xs-12 mobile-front-second-row2-col1 row-full">
                    <?php print $content['secondsectionrow2col1']; ?>
                    <div class="column col-xs-12 mobile-front-second-row2-col2">
                        <?php print $content['secondsectionrow2col2']; ?>
                    </div>
                </div>

            </div>
            <div class="row row-3 mobile-front-double-column">
                <div class="row row-1 mobile-front-single-column row-full">
                    <div class="column col-md-12 mobile-front-third-row3">
                        <?php print $content['thirdsectionrow3col1']; ?>
                    </div>
                </div>
            </div>
            <div class="row row-4 mobile-front-triple-column">
                <div class="column col-xs-12 col-md-4 mobile-front-fourth-row4-col1">
                    <?php print $content['fourthsectionrow4col1']; ?>
                </div>
                <div class="column col-xs-12 col-md-4 mobile-front-fourth-row4-col2">
                    <?php print $content['fourthsectionrow4col2']; ?>
                </div>
                <div class="column col-xs-12 col-md-4 mobile-front-fourth-row4-col3">
                    <?php print $content['fourthsectionrow4col3']; ?>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.section-content -->
    
</div><!-- /.mobile-front -->
