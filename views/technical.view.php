<?php require 'partials/header.php'; ?>
<?php require 'partials/nav.php'; ?>
<?php require 'partials/title.php'; ?>

<main class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <div class="leading-loose text-base text-gray-600 font-normal space-y-4">
        <?php foreach ($projects as $proj): ?>
            <li>
                <?php if ($proj['url']): ?>
                    <a href=<?= $proj['url'] ?> target='_blank' rel='noopener noreferrer'
                        class='font-bold bg-blue-100 underline decoration-wavy decoration-gray-400 hover:bg-blue-200 hover:decoration-gray-500'>
                        <?= $proj['title'] ?></a>
                <?php else: ?>
                    <span class='font-bold'><?= $proj['title'] ?></span>
                <?php endif; ?>

                (<?= substr($proj['date'], 0, 7) ?>)

                <span class="text-gray-400 italic"> —
                    <?php print_r($proj['tools']); ?>
                </span>
                <p class='pl-8'><?= $proj['desc'] ?>
                </p>
            </li>
        <?php endforeach; ?>
        <br />
        <a href='https://drive.google.com/file/d/1XcpoeeYm39DH2OgoBZS8mFYWPybDEjIN/view?usp=sharing' target='_blank'
            rel='noopener noreferrer'
            class='text-violet-400 hover:text-violet-500 pl-4 underline underline-offset-4 decoration-dotted rounded-md text-md font-bold'>
            my
            resume</a>

    </div>
</main>

<?php require 'partials/footer.php'; ?>