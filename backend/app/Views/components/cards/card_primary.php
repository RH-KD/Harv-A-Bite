<?php
// $img
// $name
// $desc
// $itemLink
?>
<div class="bg-white shadow-lg m-6 border border-gray-100 rounded-lg max-w-sm overflow-hidden">
    <img src="<?= esc($img ?? 'Image Unavailble') ?>" alt="Image Unavailable" class="w-full h-40 object-cover">
    <div class="p-4">
        <h3 class="mb-2 font-montserrat font-bold text-gray-900 text-lg"><?= esc($name ?? 'Name') ?></h3>
        <p class="mb-4 font-inter text-gray-700"><?= esc($desc ?? 'Description') ?></p>
        <?= view("components/buttons/button_primary", ["href" => esc($itemLink ?? "#"), "lbl" => "View Details"]) ?>
    </div>
</div>
