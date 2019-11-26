<?php
/**
 * @file
 * Template for the Boxton layout.
 *
 * Variables:
 * - $title: The page title, for use in the actual HTML content.
 * - $messages: Status and error messages. Should be displayed prominently.
 * - $tabs: Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node.)
 * - $action_links: Array of actions local to the page, such as 'Add menu' on
 *   the menu administration interface.
 * - $classes: Array of CSS classes to be added to the layout wrapper.
 * - $attributes: Array of additional HTML attributes to be added to the layout
 *     wrapper. Flatten using backdrop_attributes().
 * - $content: An array of content, each item in the array is keyed to one
 *   region of the layout. This layout supports the following sections:
 *   - $content['header']
 *   - $content['top']
 *   - $content['content']
 *   - $content['bottom']
 *   - $content['footer']
 */
?>
<div class="layout--boxton <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>

  <?php if ($content['header']): ?>
    <header class="l-header" role="banner" aria-label="<?php print t('Site header'); ?>">
      <div class="l-header-inner container container-fluid">
        <?php print $content['header']; ?>
      </div>
    </header>
  <?php endif; ?>

  <div class="l-wrapper">
    <div class="container hp-content">
      <div class="row">
        <div class="col-md-10">
          <div class="container">
            <div class="write-up">
              Jumpstart your Backdrop site builder and/or dev skills with easy to follow videos, courses, and trainings.  
            </div>
            <div class="row justify-content-between">
              <div
                class="col-md-5 hp-block hp-sb-gs">
                <div class="hp-block-title">
                  Site Builder Getting Started
                </div>
                <div class="hp-block-content">
                  Jumpstart or update your site building skillset!
                </div>
              </div>
              <div
                class="col-md-5 hp-block hp-dev-gs">
                <div class="hp-block-title">
                  Developer Getting Started
                </div>
                <div class="hp-block-content">
                  Get up to speed on development tools, techniques, and jumpstart your dev skills!
                </div>
              </div>
            </div>
            <div class="row justify-content-between">
              <div class="col-md-5 hp-block hp-sb-adv">
                <div class="hp-block-title">
                  Site Builder Advanced
                </div>
                <div class="hp-block-content">

                </div>
              </div>
              <div class="col-md-5 hp-block hp-dev-adv">
                <div class="hp-block-title">
                  Developer Advanced
                </div>
                <div class="hp-block-content">

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          ads.
        </div>
      </div>
    </div>
  </div><!-- /.l-wrapper -->

  <?php if ($content['footer']): ?>
    <footer class="l-footer"  role="footer">
      <div class="l-footer-inner container container-fluid">
        <?php print $content['footer']; ?>
      </div><!-- /.container -->
    </footer>
  <?php endif; ?>
</div><!-- /.layout--boxton -->
