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
      <?php print $content['header']; ?>
    </header>
  <?php endif; ?>

  <div class="l-wrapper">
    <div class="hp-content">
      <div class="hp-big-container">
        <div class="col-md-8 hp-all-the-things">
          <div class="hp-lil-container">
            <div class="write-up">
              🚀 Jumpstart your Backdrop development skills with easy to follow videos, courses, and trainings.🚀
            </div>
            <div class="hp-course-row">
              <div
                class="hp-course hp-block hp-dev-gs">
                <a href="/book-page/introduction-php">
                  <h2 class="hp-block-title">
                    Introduction to PHP
                  </h2>
                </a>
                <div class="hp-block-content">
                  <p>
                    Having a strong foundation in PHP and html will give you the tools you need to develop Backdrop CMS websites.
                  </p>
                  <p>
                    <ul>
                      <li>
                        <a href="/book-page/introduction-php">
                          Introduction to PHP
                        </a>
                      </li>
                      <li>
                        <a href="/vid/php-hello-world">
                          PHP: Hello World
                        </a>
                      </li>
                      <li>
                        <a href="/vid/php-forms-and-functions">
                          PHP: Forms and Functions
                        </a>
                      </li>
                      <li>
                        <a href="/vid/php-control-structures">
                          PHP: Control Structures
                        </a> (work in progress)
                      </li>
                    </ul>
                  </p>
                </div>
              </div>
              <div
                class="hp-course hp-block hp-dev-gs">
                <a href="/book-page/writing-backdrop-cms-modules">
                  <h2 class="hp-block-title">
                    Writing Backdrop CMS Modules
                  </h2>
                </a>
                <div class="hp-block-content">
                  <p>
                    Sometimes there is not "a module for that"; in these cases where your site needs bespoke functionality we write our own custom module.
                  </p>
                  <p>
                    <li>
                      <a href="/book-page/writing-backdrop-cms-modules">
                        Writing Backdrop CMS Modules
                      </a>
                    </li>
                    <li>
                      <a href="/vid/anatomy-module">
                        Anaotomy of a Module
                      </a>
                    </li>
                  </p>
                </div>
              </div>
            </div>
            <div class="hp-course-row">
              <div class="hp-course hp-block hp-dev-adv">
                <a href="/book-page/vim-series">
                  <h2 class="hp-block-title">
                    Vim Series
                  </h2>
                </a>
                <div class="hp-block-content">
                  <p>
                    There are a lot of great choices out there for text editors and IDEs and
                    everyone has their favorite. My favorite is <span class="code">vim</span>.
                  </p>
                  <ul>
                    <li>
                      <a href="/book-page/vim-series">
                        Vim Series
                      </a>
                    </li>
                    <li>
                      <a href="/vid/vim-gitfugitive">
                        Vim + GitFugitive
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="hp-course hp-block hp-dev-adv">
                <a href="/book-page/testing-backdrop-cms">
                  <h2 class="hp-block-title">
                    Testing Backdrop CMS
                  </h2>
                </a>
                <div class="hp-block-content">
                  <p>
                    This is an advanced series in which we learn how to write tests for our core, contrib, or custom modules.
                  </p>
                  <p>
                    <ul>
                      <li>
                        <a href="/book-page/testing-backdrop-cms">
                          Writing Tests for Backdrop CMS
                      </li>
                      <li>
                        <a href="/vid/anatomy-tests">
                          Anatomy of Tests
                        </a>
                      </li>
                      <li>
                        <a href="/vid/enabling-and-running-tests-simpletest-module">
                          Enabling and Running tests with Simpletest module
                        </a>
                      </li>
                      <li>
                        Writing Your First Test (comming soon)
                      </li>
                    </ul>
                  </p>
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
