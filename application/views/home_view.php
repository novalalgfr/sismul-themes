<section class="flex flex-col items-center justify-center text-center mt-12 mb-20 px-4">
    <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 tracking-tight leading-tight max-w-4xl">
        SismulTheme <br> Webflow Template
    </h1>
    <p class="text-neutral-400 text-lg md:text-xl max-w-2xl mb-10">
        Presenting SismulTheme, the ultimate Dark Mode SaaS Webflow Template.
    </p>
    
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="#" class="px-8 py-3.5 bg-white text-black font-bold rounded-full hover:bg-neutral-200 transition-colors">
            Buy template
        </a>
        <a href="<?= base_url('admin') ?>" class="px-8 py-3.5 bg-darkCard border border-darkBorder text-white font-bold rounded-full hover:bg-neutral-800 transition-colors">
            Go to CMS
        </a>
    </div>
</section>

</div> 
<section class="w-full overflow-hidden mb-24">
    
    <div class="flex gap-4 md:gap-6 w-max px-4 md:px-6">
        <?php for($i = 0; $i < 4; $i++): ?>
            <div class="w-[320px] md:w-[450px] aspect-[4/3] rounded-2xl overflow-hidden border border-darkBorder bg-darkCard shrink-0">
                <img src="<?= base_url('assets/uploads/' . $hero_images[$i]['image_file']) ?>" alt="Hero Slot <?= $i+1 ?>" class="w-full h-full object-cover">
            </div>
        <?php endfor; ?>
    </div>

    <div class="flex gap-4 md:gap-6 w-max px-4 md:px-6 mt-4 md:mt-6 -ml-32 md:-ml-56">
        <?php for($i = 4; $i < 9; $i++): ?>
            <div class="w-[320px] md:w-[450px] aspect-[4/3] rounded-2xl overflow-hidden border border-darkBorder bg-darkCard shrink-0">
                <img src="<?= base_url('assets/uploads/' . $hero_images[$i]['image_file']) ?>" alt="Hero Slot <?= $i+1 ?>" class="w-full h-full object-cover">
            </div>
        <?php endfor; ?>
    </div>

</section>

<div class="w-full max-w-6xl px-6 mx-auto flex-grow">
<section class="w-full max-w-5xl mx-auto mb-32 mt-20">
        
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 tracking-tight">What is included in SismulTheme</h2>
            <p class="text-neutral-400 text-lg">
                SismulTheme Webflow Template includes over <span class="text-white font-medium">20 pages</span> in total,<br class="hidden md:block">
                with more than <span class="text-white font-medium">35 sections</span>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <?php foreach($features as $f): ?>
                <?php 
                    $this->load->view('components/card_grid', [
                        'title' => $f['title'],
                        'image' => base_url('assets/uploads/' . $f['image_file'])
                    ]); 
                ?>
            <?php endforeach; ?>
        </div>

        <?php $this->load->view('components/card_banner', ['banner' => $banner]); ?>

    </section>

    <section class="w-full max-w-6xl mx-auto px-4 md:px-6 mb-32 mt-32">
        
        <div class="text-center mb-24 flex justify-center">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight max-w-6xl">
                The SismulTheme Webflow Template also comes with more surprises...
            </h2>
        </div>

        <div class="flex flex-col w-full">
            <?php foreach($zigzags as $index => $row): 
                $pos = ($index % 2 == 0) ? 'right' : 'left';
            ?>
                <?php 
                    $this->load->view('components/row_split', [
                        'title'          => $row['title'],
                        'description'    => $row['description'],
                        'image'          => base_url('assets/uploads/' . $row['image_file']),
                        'image_position' => $pos
                    ]); 
                ?>
            <?php endforeach; ?>
        </div>

    </section>