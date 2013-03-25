<?php
/**
 * Markdown Viewer
 * @package MarkdownViewer
 * @version 1.0
 */?><!DOCTYPE html>
<html><head><meta charset='utf-8' /><title>Markdown Viewer</title>
<link href='static/style.css' rel='stylesheet' type='text/css' />
<script type='text/javascript' src='static/portal.js'></script>
</head><body>

<div><textarea spellcheck='false' autofocus='autofocus' onkeydown='return tabMe(this,event);'>
Markdown Viewer
===============

Another super simple markdown viewer for markdown.php ( not include markdown extra ).


How To Use
----------

Type or paste [markdown syntax](http://daringfireball.net/projects/markdown "Daring Fireball: Markdown") on the left box and press `Enter` key twice or press `Ctrl+Enter` to see the result.


Browser?
--------

No idea on old browser. I'm not designer, I've the [newest browser](http://browsehappy.com "Browse Happy") installed. Forgive me.


Bug
---

You completely know how to fix it, aren't you?


Me
--

Syuaa SE


License
-------

PHP Markdown  
Copyright (c) 2004-2013 Michel Fortin  
[http://unlicense.org/](http://michelf.ca/projects/php-markdown/)

Original Markdown  
Copyright (c) 2004-2006 John Gruber  
[http://unlicense.org/](http://daringfireball.net/projects/markdown/)

Markdown Viewer  
Unlicensed software  
[http://unlicense.org/](http://unlicense.org/)</textarea></div>
<div><iframe id="viewer"></iframe></div>

</body></html>