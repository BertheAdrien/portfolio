<?php
// Vérifier si $pageTitle est défini, sinon utiliser une valeur par défaut
$pageTitle = $pageTitle ?? 'Adrien Berthe - Portfolio';
?>
<!DOCTYPE HTML>
<html>
<head>
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <?php partial('header'); ?>
</head>
<body>
    <?php 
    if (isset($content)) {
        echo $content;
    }
    ?>
    <?php partial('footer'); ?>
</body>
</html>
