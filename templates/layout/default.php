<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'Ouvidoria Digital';
$tabTitle = !empty($siteSettings['tab_title']) ? h($siteSettings['tab_title']) : $cakeDescription;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $tabTitle ?>:
        <?= $this->fetch('title') ?>
    </title>

    <?php if (!empty($siteSettings['favicon'])): ?>
        <link rel="icon" type="image/x-icon" href="<?= $this->Url->build('/' . h($siteSettings['favicon'])) ?>">
    <?php else: ?>
        <?= $this->Html->meta('icon') ?>
    <?php endif; ?>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <?= $this->Html->css(['bootstrap.min', 'bootstrap-icons.min', 'app']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="bg-light" style="font-family: 'Inter', sans-serif;">
    <div id="barra-brasil" style="background:#7F7F7F; height: 20px; padding:0 0 0 10px;display:block;">
        <ul id="menu-barra-temp" style="list-style:none;">
            <li style="display:inline; float:left;padding-right:10px; margin-right:10px; border-right:1px solid #EDEDED">
                <a href="http://brasil.gov.br" style="font-family:sans,sans-serif; text-decoration:none; color:white;">Portal do Governo Brasileiro</a>
            </li>
        </ul>
    </div>

    <!-- Modais -->
    <?= $this->element('modals') ?>

    <div class="container py-5">
        <!-- Header -->
        <?= $this->element('header') ?>

        <?= $this->Flash->render() ?>

        <!-- Main Content -->
        <?= $this->fetch('content') ?>

    </div>

    <!-- Bootstrap JS (includes Popper) -->
    <?= $this->Html->script('bootstrap.bundle.min') ?>
    <script defer="defer" src="//barra.brasil.gov.br/barra.js" type="text/javascript"></script>
    <script src="https://cdn.userway.org/widget.js" data-account="ADgT6uGEor"></script>
</body>
</html>
