<?php
/**
 * @file
 * Generate a `The Weekly Backdrop` node.
 */

/**
 * Implements hook_drush_command().
 */
function tbw_drush_command() {
  $items = array();
  $items['tbw'] = array(
    'description' => 'Create a The Backdrop Weekly node.',
    'callback' => 'htb_bw_tbw',
    'arguments' => array(
      'issue-number' => array('The name of the module(s) you would like to download.'),
    ),
    'required-arguments' => TRUE,
    'bootstrap' => \Drush\Boot\BackdropBoot::BOOTSTRAP_FULL,
    'examples' => array(
      'drush tbw' => 'Create a The Backdrop Weekly node.',
    ),
  );

  return $items;
}

/**
 * Calltack for tbw; Make a template node of type The Backdrop Weekly.
 */
function htb_bw_tbw() {
  $args = func_get_args();
  $issue_number = ($args[0]) ? $args[0] : NULL;
  $tbw = new Node();
  $tbw->type = 'bw';
  $tbw->title = 'The Backdrop Weekly #' . $issue_number;
  $tbw->status = 0;
  $tbw->uid = 1;
  $tbw->save();

  if ($tbw) {
    $success = drush_chalk('Success', '32m');
    $title = drush_chalk($tbw->title, '1m');
    drush_print_r("\n\t$success: Created $title.\n");
  }
  else {
    $error = drush_chalk('Error', '31m'); 
    drush_print_r(\n\t"$error: Something went wrong creating the node.\n");
  }
}

function drush_chalk(string $output, string $color) {
  $output = "\033[$color$output\033[0m";

  return $output;
}
