<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'Website của tôi' ?></title>
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/output.css">
    <link href="/resources/css/style.css" rel="stylesheet">
    <script defer src="/assets/js/alpine-collapse.js"></script>
    <script defer src="/assets/js/alpine.js"></script>
    <link href="/assets/js/splide.min.js" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/splide.min.css">
</head>
<body class="bg-gray-50 text-gray-800 flex flex-col min-h-screen">

    <?php include __DIR__ . '/../components/header.php'; ?>

    <?php if (!empty($useBanner) && $useBanner === true): ?>
        <?php include __DIR__ . '/../components/banner.php'; ?>
    <?php endif; ?>

    <main class="grow container mx-auto px-4 py-8">
        <?php
        $showSidebar = isset($enableSidebar) ? $enableSidebar : true;
        ?>

        <div class="<?= $showSidebar ? 'grid grid-cols-1 lg:grid-cols-4 gap-8' : 'w-full' ?>">
            <?php if ($showSidebar): ?>
                <div class="lg:col-span-1 order-2 lg:order-1">
                    <?php include __DIR__ . '/../components/sidebar.php'; ?>
                </div>
            <?php endif; ?>

            <div class="<?= $showSidebar ? 'lg:col-span-3 order-1 lg:order-2' : 'w-full' ?>">
                <?= $content ?>
            </div>
        </div>
    </main>


    <?php include __DIR__ . '/../components/footer.php'; ?>

</body>
</html>