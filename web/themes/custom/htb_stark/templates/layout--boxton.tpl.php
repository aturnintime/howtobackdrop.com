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
    <div class="hp-content">
      <div class="hp-big-container">
        <div class="col-md-8 hp-all-the-things">
          <div class="hp-lil-container">
            <h1 class="hp-title">
              Learn development tools and techniques for Backdrop CMS!
            </h1>
            <div class="write-up">
              🚀 Jumpstart your Backdrop development skills with easy to follow videos, courses, and trainings.🚀
            </div>
            <div class="hp-course-row">
              <div
                class="hp-course hp-block hp-dev-gs">
                <h2 class="hp-block-title">
                  Developer Getting Started
                </h2>
                <div class="hp-block-content">
                  <p>
                    Get up to speed on development tools, techniques, and jumpstart your dev skills!
                  </p>
                  <p>
                    <ul>
                      <li>
                        <a href="/book-page/vim-series">
                          Vim Series
                        </a>
                      </li>
                    </ul>
                  </p>
                  <p>
                    Comming Soon
                    <ul>
                      <li>Local Development Environments</li>
                      <li>Introduction to PHP</li>
                    </ul>
                  </p>
                </div>
              </div>
            </div>
            <div class="hp-course-row">
              <div class="hp-course hp-block hp-dev-adv">
                <h2 class="hp-block-title">
                  Developer Advanced
                </h2>
                <div class="hp-block-content">
                  <div>Comming Soon</div>
                  <ul>
                    <li>Drush series</li>
                    <li>Backdrop Form API</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 hp-right-col">
          <?php
            $cta = backdrop_get_form('htb_cta_form');
            print render($cta);
          ?>
        </div>
      </div>
    </div>
  </div><!-- /.l-wrapper -->

  <?php if ($content['footer']): ?>
    <footer class="l-footer"  role="contentinfo">
      <div class="l-footer-inner container container-fluid">
        <?php print $content['footer']; ?>
      </div><!-- /.container -->
    </footer>
  <?php endif; ?>
</div><!-- /.layout--boxton -->
