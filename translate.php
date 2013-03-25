<?php
/**
 * Markdown Viewer
 * @package MarkdownViewer
 * @version 1.0
 */

require_once( "markdown.php" );
$tx = "<!DOCTYPE html><html><head><meta charset='utf-8' />"
    . "<title>Markdown Viewer</title></head><body>";

$tx.= !isset( $_POST["translate"] )
    ? "<header><h1>Data not posted</h1></header>"
    : Markdown( $_POST["translate"] );

$tx.= "</body></html>";

echo $tx;
die;