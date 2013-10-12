<?php

    $this->import('a.js');

    $this->extend('layout.php');
    $title = 'my name';
    $content = 'hello world';
?>
<ul>
    <li>abc</li>
    <li>abc</li>
    <li>abc</li>
    <li>abc</li>
</ul>
<?php Block::fill($nav);?>
<nav>
    <a href="#">a</a>
    <a href="#">b</a>
    <a href="#">c</a>
</nav>
<?php Block::end();?>

<?php Block::prepend($nav);?>
<hr>
<?php Block::end();?>

<?php Block::append($nav);?>
<hr>
<?php Block::end();?>