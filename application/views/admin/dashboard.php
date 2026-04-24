<div class="p-8 md:p-12 w-full max-w-8xl mx-auto space-y-12">
    
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center sticky top-0 z-10 bg-darkBg/90 backdrop-blur-md py-4 border-b border-darkBorder mb-8 gap-4">
        <div>
            <h1 class="text-3xl md:text-4xl font-bold text-white tracking-tight">Page Builder</h1>
            <p class="text-neutral-400 mt-1">Manage SismulThemes homepage content and digital assets.</p>
        </div>
        <button class="px-8 py-3 bg-white text-black text-sm font-bold rounded-full hover:bg-neutral-200 transition-colors shadow-lg">
            Save All Changes
        </button>
    </div>

    <div class="bg-darkCard border border-darkBorder rounded-[2.5rem] p-8 shadow-2xl">
        <div class="mb-8 flex justify-between items-end border-b border-darkBorder pb-5">
            <div>
                <h2 class="text-2xl font-bold text-white">1. Hero Showcase</h2>
                <p class="text-sm text-neutral-500 mt-1">Manage the 9 static image slots for the hero section.</p>
            </div>
            <span class="px-3 py-1 bg-[#1a1a1a] text-neutral-400 text-xs font-bold rounded border border-darkBorder">9 SLOTS</span>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-5">
            <?php for ($i = 1; $i <= 9; $i++): ?>
            <div class="bg-[#0f0f0f] border border-darkBorder rounded-2xl overflow-hidden group relative">
                <div class="aspect-[4/3] bg-black relative">
                    <img src="https://placehold.co/400x300/151515/333333?text=Slot+<?= $i ?>" class="w-full h-full object-cover opacity-70 group-hover:opacity-100 transition-opacity">
                    <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center backdrop-blur-[2px]">
                        <button onclick="openModal('modalEditHero')" class="px-4 py-2 bg-white text-black text-xs font-bold rounded-full hover:scale-105 transition-transform">
                            Replace
                        </button>
                    </div>
                </div>
                <div class="p-3 text-center">
                    <p class="text-[10px] font-bold text-neutral-500 uppercase tracking-widest">Image Slot <?= $i ?></p>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>

    <div class="bg-darkCard border border-darkBorder rounded-[2.5rem] p-8 shadow-2xl">
        <div class="mb-8 border-b border-darkBorder pb-5">
            <h2 class="text-2xl font-bold text-white">2. Features & Promotional Banner</h2>
            <p class="text-sm text-neutral-500 mt-1">Update feature cards and the wide Figma call-to-action banner.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php 
            $features = ['20+ Pages', '35+ Sections', '25+ Styles & Symbols'];
            foreach ($features as $index => $title): 
            ?>
            <div class="bg-[#0f0f0f] border border-darkBorder rounded-[2rem] p-5 flex flex-col group">
                <div class="aspect-video rounded-2xl bg-black relative overflow-hidden mb-5 border border-darkBorder">
                    <img src="https://placehold.co/600x400/151515/333333?text=Feature+<?= $index+1 ?>" class="w-full h-full object-cover opacity-70 group-hover:opacity-100 transition-opacity">
                    <button onclick="openModal('modalEditFeature')" class="absolute top-3 right-3 p-2.5 bg-black/80 rounded-xl text-white hover:bg-white hover:text-black transition-all backdrop-blur-md border border-darkBorder">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                    </button>
                </div>
                <div class="bg-[#1a1a1a] rounded-xl p-4 border border-darkBorder flex justify-between items-center group-hover:border-neutral-500 transition-colors cursor-pointer" onclick="openModal('modalEditFeature')">
                    <span class="text-white font-bold text-sm tracking-wide"><?= $title ?></span>
                    <svg class="w-4 h-4 text-neutral-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </div>
            <?php endforeach; ?>

            <div class="md:col-span-3 bg-[#0f0f0f] border border-darkBorder rounded-[2rem] p-5 md:p-8 flex flex-col md:flex-row gap-8 items-center group mt-2">
                <div class="w-full md:w-2/5 aspect-video rounded-[1.5rem] bg-black relative overflow-hidden border border-darkBorder shrink-0">
                    <img src="https://placehold.co/800x600/1a1a1a/333333?text=Figma+Banner+Preview" class="w-full h-full object-cover opacity-70 group-hover:opacity-100 transition-opacity">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center backdrop-blur-sm">
                        <button onclick="openModal('modalEditBanner')" class="px-5 py-2.5 bg-white text-black text-xs font-bold rounded-full hover:scale-105 transition-transform">Replace Banner Image</button>
                    </div>
                </div>
                
                <div class="w-full md:w-3/5 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6">
                    <div class="space-y-4">
                        <div class="flex items-center gap-2">
                            <span class="px-3 py-1 bg-darkBg text-neutral-500 text-[10px] font-black uppercase rounded-md border border-darkBorder tracking-[0.2em]">Promo Banner</span>
                        </div>
                        <h3 class="text-white font-bold text-2xl tracking-tight">Figma file included</h3>
                        <p class="text-sm text-neutral-500 leading-relaxed max-w-md">Edit the title, description, and button text for the horizontal promotional section.</p>
                        
                        <div class="flex flex-wrap gap-3 mt-4">
                            <div class="flex items-center gap-2 text-xs font-bold text-neutral-400 bg-darkBg px-3 py-2 rounded-xl border border-darkBorder">
                                <div class="w-2 h-2 rounded-full bg-green-500"></div> Icon Active
                            </div>
                            <div class="flex items-center gap-2 text-xs font-bold text-neutral-400 bg-darkBg px-3 py-2 rounded-xl border border-darkBorder">
                                <div class="w-2 h-2 rounded-full bg-blue-500"></div> Request Figma file
                            </div>
                        </div>
                    </div>
                    
                    <button onclick="openModal('modalEditBanner')" class="px-6 py-3 bg-[#1a1a1a] hover:bg-neutral-800 text-white text-xs font-bold rounded-full border border-darkBorder transition-all whitespace-nowrap">
                        Edit Content
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-darkCard border border-darkBorder rounded-[2.5rem] p-8 shadow-2xl">
        <div class="mb-8 flex justify-between items-end border-b border-darkBorder pb-5">
            <div>
                <h2 class="text-2xl font-bold text-white">3. Zig-Zag Surprises</h2>
                <p class="text-sm text-neutral-500 mt-1">Fully manage rows with alternating image positions.</p>
            </div>
            <button onclick="openModal('modalAddZigzag')" class="px-6 py-3 bg-white text-black text-sm font-bold rounded-full hover:bg-neutral-200 transition-colors flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4"></path></svg>
                Add New Row
            </button>
        </div>

        <div class="space-y-5">
            <?php 
            $rows = [
                ['id' => 1, 'title' => '3 Headers and Footers'],
                ['id' => 2, 'title' => '3 Notification Bars'],
                ['id' => 3, 'title' => 'Unique Custom Animations']
            ];
            
            foreach ($rows as $index => $row): 
                $position = ($index % 2 == 0) ? 'Right' : 'Left';
            ?>
            
            <div class="bg-[#0f0f0f] border border-darkBorder rounded-2xl p-5 flex flex-col md:flex-row gap-6 items-center justify-between group hover:border-neutral-600 transition-all">
                <div class="flex items-center gap-5 w-full md:w-auto">
                    <div class="w-28 h-20 rounded-xl bg-black overflow-hidden border border-darkBorder shrink-0 relative">
                        <img src="https://placehold.co/400x300/151515/333333?text=Row+<?= $index+1 ?>" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h3 class="text-white font-bold text-base mb-1.5"><?= $row['title'] ?></h3>
                        <div class="flex items-center gap-2">
                            <span class="text-[9px] font-black text-neutral-500 bg-darkBg px-2 py-1 rounded border border-darkBorder uppercase tracking-tighter">
                                Auto: Image on <?= $position ?>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-3 w-full md:w-auto justify-end">
                    <button onclick="openModal('modalAddZigzag')" class="px-5 py-2 text-xs font-bold bg-[#1a1a1a] hover:bg-neutral-800 text-white rounded-xl border border-darkBorder transition-colors">
                        Edit
                    </button>
                    <button class="p-2.5 bg-red-500/10 hover:bg-red-500/20 text-red-500 rounded-xl border border-red-500/20 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                    </button>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php
$this->load->view('components/modal_base', [
    'modal_id' => 'modalEditHero',
    'modal_title' => 'Replace Image Slot',
    'form_action' => base_url('admin/update_hero'),
    'modal_content' => $this->load->view('admin/forms/form_hero', '', TRUE)
]);

$this->load->view('components/modal_base', [
    'modal_id' => 'modalEditFeature',
    'modal_title' => 'Update Feature Card',
    'form_action' => base_url('admin/update_feature'),
    'modal_content' => $this->load->view('admin/forms/form_feature', '', TRUE)
]);

$this->load->view('components/modal_base', [
    'modal_id' => 'modalEditBanner',
    'modal_title' => 'Edit Promotional Banner',
    'form_action' => base_url('admin/update_banner'),
    'modal_content' => $this->load->view('admin/forms/form_banner', '', TRUE)
]);

$this->load->view('components/modal_base', [
    'modal_id' => 'modalAddZigzag',
    'modal_title' => 'Surprise Row Manager',
    'form_action' => base_url('admin/save_zigzag'),
    'modal_content' => $this->load->view('admin/forms/form_zigzag', '', TRUE)
]);
?>

<script>
    function openModal(id) {
        const modal = document.getElementById(id);
        if(modal) {
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden'; 
        }
    }

    function closeModal(id) {
        const modal = document.getElementById(id);
        if(modal) {
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto'; 
        }
    }

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            const modals = document.querySelectorAll('.fixed.inset-0:not(.hidden)');
            modals.forEach(modal => closeModal(modal.id));
        }
    });
</script>