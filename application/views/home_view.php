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
        <a href="#" class="px-8 py-3.5 bg-darkCard border border-darkBorder text-white font-bold rounded-full hover:bg-neutral-800 transition-colors">
            Explore pages
        </a>
    </div>
</section>

</div>

<section class="w-full overflow-hidden mb-24">
    
    <div class="flex gap-4 md:gap-6 w-max px-4 md:px-6">
        <div class="w-[320px] md:w-[450px] aspect-[4/3] rounded-2xl overflow-hidden border border-darkBorder bg-darkCard shrink-0">
            <img src="https://placehold.co/800x600/151515/333333?text=Row+1+Image+1" class="w-full h-full object-cover">
        </div>
        <div class="w-[320px] md:w-[450px] aspect-[4/3] rounded-2xl overflow-hidden border border-darkBorder bg-darkCard shrink-0">
            <img src="https://placehold.co/800x600/151515/333333?text=Row+1+Image+2" class="w-full h-full object-cover">
        </div>
        <div class="w-[320px] md:w-[450px] aspect-[4/3] rounded-2xl overflow-hidden border border-darkBorder bg-darkCard shrink-0">
            <img src="https://placehold.co/800x600/151515/333333?text=Row+1+Image+3" class="w-full h-full object-cover">
        </div>
        <div class="w-[320px] md:w-[450px] aspect-[4/3] rounded-2xl overflow-hidden border border-darkBorder bg-darkCard shrink-0">
            <img src="https://placehold.co/800x600/151515/333333?text=Row+1+Image+4" class="w-full h-full object-cover">
        </div>
    </div>

    <div class="flex gap-4 md:gap-6 w-max px-4 md:px-6 mt-4 md:mt-6 -ml-32 md:-ml-56">
        <div class="w-[320px] md:w-[450px] aspect-[4/3] rounded-2xl overflow-hidden border border-darkBorder bg-darkCard shrink-0">
            <img src="https://placehold.co/800x600/151515/333333?text=Row+2+Image+1" class="w-full h-full object-cover">
        </div>
        <div class="w-[320px] md:w-[450px] aspect-[4/3] rounded-2xl overflow-hidden border border-darkBorder bg-darkCard shrink-0">
            <img src="https://placehold.co/800x600/151515/333333?text=Row+2+Image+2" class="w-full h-full object-cover">
        </div>
        <div class="w-[320px] md:w-[450px] aspect-[4/3] rounded-2xl overflow-hidden border border-darkBorder bg-darkCard shrink-0">
            <img src="https://placehold.co/800x600/151515/333333?text=Row+2+Image+3" class="w-full h-full object-cover">
        </div>
        <div class="w-[320px] md:w-[450px] aspect-[4/3] rounded-2xl overflow-hidden border border-darkBorder bg-darkCard shrink-0">
            <img src="https://placehold.co/800x600/151515/333333?text=Row+2+Image+4" class="w-full h-full object-cover">
        </div>
        <div class="w-[320px] md:w-[450px] aspect-[4/3] rounded-2xl overflow-hidden border border-darkBorder bg-darkCard shrink-0">
            <img src="https://placehold.co/800x600/151515/333333?text=Row+2+Image+5" class="w-full h-full object-cover">
        </div>
    </div>

</section>

<div class="w-full max-w-6xl px-6 flex-grow">


<section class="w-full max-w-5xl mx-auto mb-32 mt-20">
    
    <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 tracking-tight">What is included in SismulTheme</h2>
        <p class="text-neutral-400 text-lg">
            SismulTheme Webflow Template includes over <span class="text-white font-medium">20 pages</span> in total,<br class="hidden md:block">
            with more than <span class="text-white font-medium">35 sections</span>
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <?php 
            $this->load->view('components/card_grid', [
                'title' => '20+ Pages',
                'image' => 'https://placehold.co/600x400/1a1a1a/333333?text=Pages+Preview'
            ]); 
            
            $this->load->view('components/card_grid', [
                'title' => '35+ Sections',
                'image' => 'https://placehold.co/600x400/1a1a1a/333333?text=Sections+Preview'
            ]); 
            
            $this->load->view('components/card_grid', [
                'title' => '25+ Styles & Symbols',
                'image' => 'https://placehold.co/600x400/1a1a1a/333333?text=Styles+Preview'
            ]); 
        ?>
    </div>

    <?php $this->load->view('components/card_banner'); ?>

</section>

<section class="w-full max-w-6xl mx-auto px-4 md:px-6 mb-32 mt-32">
    
    <div class="text-center mb-24 flex justify-center">
        <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight max-w-6xl">
            The SismulTheme Webflow Template also comes with more surprises...
        </h2>
    </div>

    <div class="flex flex-col w-full">
        
        <?php 
            $this->load->view('components/row_split', [
                'title' => '3 Headers and Footers',
                'description' => 'With a total of 3 different headers and footers, you can easily customize the SismulTheme Webflow Template to fit your company needs and requirements.',
                'image' => 'https://placehold.co/800x600/1a1a1a/333333?text=Headers+Preview',
                'image_position' => 'right'
            ]); 
            
            $this->load->view('components/row_split', [
                'title' => '3 Notification Bars',
                'description' => 'If you are looking to get more sales, use one of our 3 notification bars included in the SismulTheme Webflow Template, and start promoting your products or services.',
                'image' => 'https://placehold.co/800x600/1a1a1a/333333?text=Notifications+Preview',
                'image_position' => 'left'
            ]); 

            $this->load->view('components/row_split', [
                'title' => 'Unique Custom Animations',
                'description' => 'Stand out from the crowd with premium, smooth animations built natively into the template. No complex coding required to impress your visitors.',
                'image' => 'https://placehold.co/800x600/1a1a1a/333333?text=Animations+Preview',
                'image_position' => 'right'
            ]); 
        ?>

    </div>

</section>