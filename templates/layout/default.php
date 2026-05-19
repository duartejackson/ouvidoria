<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('bootstrap-icons.css') ?>
    <?= $this->Html->css('app.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="bg-light min-vh-100 py-5">
    <div class="container">
        <div class="card card-shadow border-0 rounded-4 overflow-hidden">
            <div class="card-body p-0">
                <?= $this->element('header') ?>
                <div class="p-4 p-md-5">
                    <?= $this->Flash->render() ?>
                    <?= $this->fetch('content') ?>
                </div>
            </div>
        </div>
    </div>

    <?= $this->Html->script('bootstrap.bundle.min.js') ?>
    <script src="<?= $this->Url->build('/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>