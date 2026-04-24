<?php 
    $is_image_left = isset($image_position) && $image_position === 'left'; 
?>

<div class="flex flex-col <?= $is_image_left ? 'md:flex-row-reverse' : 'md:flex-row' ?> items-center gap-12 md:gap-20 w-full mb-32 last:mb-0">
    
    <div class="w-full md:w-1/2 flex flex-col items-start <?= $is_image_left ? 'md:pl-8 lg:pl-16' : 'md:pr-8 lg:pr-16' ?>">
        <h3 class="text-3xl md:text-4xl font-bold text-white mb-5 tracking-tight">
            <?= $title ?>
        </h3>
        <p class="text-neutral-400 text-lg mb-8 leading-relaxed">
            <?= $description ?>
        </p>
        <a href="#" class="px-8 py-3.5 bg-white text-black font-bold rounded-full hover:bg-neutral-200 transition-colors">
            Buy template
        </a>
    </div>

    <div class="w-full md:w-1/2">
        <div class="rounded-3xl overflow-hidden border border-darkBorder bg-darkCard w-full aspect-[4/3] md:aspect-[5/4] relative group">
            <img src="<?= $image ?>" alt="<?= $title ?>" class="absolute inset-0 w-full h-full object-cover opacity-90 group-hover:opacity-100 transition-opacity duration-300">
        </div>
    </div>

</div>