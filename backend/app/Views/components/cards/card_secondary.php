
<div class="bg-gradient-to-r from-blue-100 to-blue-300 shadow-md m-6 border border-blue-200 rounded-xl max-w-sm overflow-hidden">
    <div class="flex items-center p-4">
        <div class="flex-shrink-0">
            <img src="<?= esc($img ?? 'Image Unavailable') ?>" alt="Image Unavailable" class="border-2 border-blue-400 rounded-full w-16 h-16 object-cover">
        </div>
        <div class="ml-4">
            <h4 class="font-montserrat font-semibold text-blue-900 text-base"><?= esc($name ?? 'Name') ?></h4>
            <span class="block font-inter text-blue-700 text-sm"><?= esc($desc ?? 'Description') ?></span>
        </div>
    </div>
    <div class="px-4 pb-4">
        <?= view("components/buttons/button_primary", ["href" => esc($itemLink ?? "#"), "lbl" => "Learn More"]) ?>
    </div>
</div>