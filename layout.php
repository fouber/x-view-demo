<?php
    
    $this->extend('master.php');

    $this->input($title, 'string');
    $this->input($content, 'string');
    
    $this->input($nav, 'Block', new Block());
    $this->input($body, 'Block');
    $this->input($right, 'Block', $this->block('block.php'));
?>
<html>
<head>
    <title><?=$title?></title>
    <?=$this->css()?>
</head>
<body>
    <?=$nav?>
    <h1><?=$content?></h1>
    <div class="main">
        <div calss="left">
            <?=$body?>
        </div>
        <div calss="right">
            <?=$right?>
        </div>
    </div>
    <?=$this->js()?>
</body>
</html>