<?php require 'partials/header.php'; ?>
<?php require 'partials/nav.php'; ?>
<?php require 'partials/title.php'; ?>

<main class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <div class="leading-loose text-base text-gray-600 italic font-normal">
        <div class='grid gap-4 grid-cols-3 justify-items-center items-center'>
        <?php foreach ($visuals as $vis) : ?>
            <div>
                <img src='images/<?= $vis['filepath'] ?>' alt=<?= $vis['title'] ?> class='max-h-96 border-2 border-blue-100 shadow-lg' style='pointer-events:none'/>
                <p class='font-bold text-center'><?= $vis['title'] ?> (<?= substr($vis['date_created'], 0, 4) ?>)</p>
            </div>
            <?php if ($vis['id'] <= count($notes)) : ?>
                <div class='max-h-96 max-w-96 bg-blue-200 bg-opacity-25 border-2 border-blue-100 shadow-lg p-6' style="overflow-y:scroll;">
                    <p class='font-bold text-center'><?= $notes[$vis['id']-1]['title']?></p>
                    <p class='font-normal font-serif'><?= nl2br($notes[$vis['id']-1]['body']) ?></p>
                </div>
            <?php endif ; ?>
        <?php endforeach ; ?>

        <p class='text-xl not-italic font-medium'>more otw</p>

    </div>
</main>

<?php require 'partials/footer.php'; ?>