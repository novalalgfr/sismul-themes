<div class="bg-[#111111] border border-darkBorder rounded-3xl p-3 flex flex-col group">
    <div class="bg-[#1a1a1a] rounded-[1.5rem] h-64 w-full overflow-hidden relative flex items-center justify-center">
        <img src="<?= $image ?>" alt="<?= $title ?>" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity duration-300">
    </div>
    <div class="py-6 flex justify-center items-center">
        <h3 class="text-white font-bold text-xl tracking-wide"><?= $title ?></h3>
    </div>
</div>