<?php
/*
Plugin Name: Latest Git Commit
Plugin URI: https://github.com/n49/latest-git-commit
Description: Reads content of file latest-git-commit.txt from document root and saves it into a constant LAST_GIT_COMMIT
Version: 1.0.0
Author: N49
Author URI: https://github.com/n49
License: GPLv2 or later
*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
if(!isset($__lastCommitPath__)) {
  $__lastCommitPath__ = $_SERVER['DOCUMENT_ROOT'] . '/latest-git-commit.txt';
  if(!defined('LAST_GIT_COMMIT')) {
    define('LAST_GIT_COMMIT', file_exists($__lastCommitPath__) ? file_get_contents($__lastCommitPath__) : '1.0.0');    
  }
  
}
