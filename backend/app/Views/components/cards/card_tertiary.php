<div class="relative bg-gray-900 shadow-lg m-6 border border-gray-100 rounded-lg max-w-sm overflow-hidden">
    <img src="<?= esc($img ?? 'Image Unavailable') ?>" alt="Image Unavailable"
        class="absolute inset-0 opacity-80 w-full h-full object-cover" />
    <div class="z-10 relative flex flex-col justify-end p-4 h-64">
        <div class="bg-black bg-opacity-50 p-3 rounded-lg">
            <h3 class="mb-2 font-montserrat font-bold text-white text-lg"><?= esc($name ?? 'Name') ?></h3>
            <p class="mb-3 font-inter text-gray-200"><?= esc($desc ?? 'Description') ?></p>
            <?= view("components/buttons/button_primary", ["href" => esc($itemLink ?? "#"), "lbl" => "View Details"]) ?>
        </div>
    </div>
</div>