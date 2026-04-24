<div class="p-8 md:p-12 w-full max-w-8xl mx-auto space-y-12">
    
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center sticky top-0 z-10 bg-darkBg/90 backdrop-blur-md py-4 border-b border-darkBorder mb-8 gap-4">
        <div>
            <h1 class="text-3xl md:text-4xl font-bold text-white tracking-tight">Page Builder</h1>
            <p class="text-neutral-400 mt-1">Manage SismulThemes homepage content and digital assets.</p>
        </div>
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
            <?php foreach ($hero_images as $index => $hero): ?>
            <div class="bg-[#0f0f0f] border border-darkBorder rounded-2xl overflow-hidden group relative">
                <div class="aspect-[4/3] bg-black relative">
                    <img src="<?= base_url('assets/uploads/' . $hero['image_file']) ?>" class="w-full h-full object-cover opacity-70 group-hover:opacity-100 transition-opacity">
                    <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center backdrop-blur-[2px]">
                        <button onclick="editHeroSlot(<?= $hero['slot_number'] ?>)" class="px-4 py-2 bg-white text-black text-xs font-bold rounded-full hover:scale-105 transition-transform">
                            Replace
                        </button>
                    </div>
                </div>
                <div class="p-3 text-center">
                    <p class="text-[10px] font-bold text-neutral-500 uppercase tracking-widest">Image Slot <?= $hero['slot_number'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="bg-darkCard border border-darkBorder rounded-[2.5rem] p-8 shadow-2xl">
		<div class="mb-8 border-b border-darkBorder pb-5">
			<h2 class="text-2xl font-bold text-white">2. Features & Promotional Banner</h2>
			<p class="text-sm text-neutral-500 mt-1">Update feature cards and the wide Figma call-to-action banner.</p>
		</div>

		<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
			
			<?php foreach ($features as $f): ?>
			<div class="bg-[#0f0f0f] border border-darkBorder rounded-[2rem] p-5 flex flex-col group">
				<div class="aspect-video rounded-2xl bg-black relative overflow-hidden mb-5 border border-darkBorder">
					<img src="<?= base_url('assets/uploads/' . $f['image_file']) ?>" class="w-full h-full object-cover opacity-70 group-hover:opacity-100 transition-opacity">
					
					<button onclick="editFeature(<?= $f['id'] ?>, '<?= addslashes($f['title']) ?>')" class="absolute top-3 right-3 p-2.5 bg-black/80 rounded-xl text-white hover:bg-white hover:text-black transition-all backdrop-blur-md border border-darkBorder">
						<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
					</button>
				</div>
				
				<div class="bg-[#1a1a1a] rounded-xl p-4 border border-darkBorder flex justify-between items-center group-hover:border-neutral-500 transition-colors cursor-pointer" onclick="editFeature(<?= $f['id'] ?>, '<?= addslashes($f['title']) ?>')">
					<span class="text-white font-bold text-sm tracking-wide"><?= $f['title'] ?></span>
					<svg class="w-4 h-4 text-neutral-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
				</div>
			</div>
			<?php endforeach; ?>

			<div class="md:col-span-3 bg-[#0f0f0f] border border-darkBorder rounded-[2rem] p-5 md:p-8 flex flex-col md:flex-row gap-8 items-center group mt-2">
				
				<div class="w-full md:w-2/5 aspect-video rounded-[1.5rem] bg-black relative overflow-hidden border border-darkBorder shrink-0">
					<img src="<?= base_url('assets/uploads/' . $banner['image_file']) ?>" class="w-full h-full object-cover opacity-70 group-hover:opacity-100 transition-opacity">
					<div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center backdrop-blur-sm">
						<button onclick="editBanner(<?= $banner['id'] ?>, '<?= addslashes($banner['title']) ?>', '<?= addslashes($banner['description']) ?>', '<?= addslashes($banner['button_text']) ?>')" class="px-5 py-2.5 bg-white text-black text-xs font-bold rounded-full hover:scale-105 transition-transform">
							Replace Banner Image
						</button>
					</div>
				</div>
				
				<div class="w-full md:w-3/5 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6">
					<div class="space-y-4">
						<div class="flex items-center gap-2">
							<span class="px-3 py-1 bg-darkBg text-neutral-500 text-[10px] font-black uppercase rounded-md border border-darkBorder tracking-[0.2em]">Promo Banner</span>
						</div>
						
						<h3 class="text-white font-bold text-2xl tracking-tight"><?= $banner['title'] ?></h3>
						<p class="text-sm text-neutral-500 leading-relaxed max-w-md"><?= $banner['description'] ?></p>
						
						<div class="flex flex-wrap gap-3 mt-4">
							<div class="flex items-center gap-2 text-xs font-bold text-neutral-400 bg-darkBg px-3 py-2 rounded-xl border border-darkBorder">
								<div class="w-2 h-2 rounded-full bg-green-500"></div> Icon Active
							</div>
							<div class="flex items-center gap-2 text-xs font-bold text-neutral-400 bg-darkBg px-3 py-2 rounded-xl border border-darkBorder">
								<div class="w-2 h-2 rounded-full bg-blue-500"></div> <?= $banner['button_text'] ?>
							</div>
						</div>
					</div>
					
					<button onclick="editBanner(<?= $banner['id'] ?>, '<?= addslashes($banner['title']) ?>', '<?= addslashes($banner['description']) ?>', '<?= addslashes($banner['button_text']) ?>')" class="px-6 py-3 bg-[#1a1a1a] hover:bg-neutral-800 text-white text-xs font-bold rounded-full border border-darkBorder transition-all whitespace-nowrap">
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
            <button onclick="addZigzag()" class="px-6 py-3 bg-white text-black text-sm font-bold rounded-full hover:bg-neutral-200 transition-colors flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4"></path></svg>
                Add New Row
            </button>
        </div>

        <div class="space-y-5">
            <?php foreach ($zigzags as $index => $row): 
                $position = ($index % 2 == 0) ? 'Right' : 'Left';
            ?>
            
            <div class="bg-[#0f0f0f] border border-darkBorder rounded-2xl p-5 flex flex-col md:flex-row gap-6 items-center justify-between group hover:border-neutral-600 transition-all">
                <div class="flex items-center gap-5 w-full md:w-auto">
                    <div class="w-28 h-20 rounded-xl bg-black overflow-hidden border border-darkBorder shrink-0 relative">
                        <img src="<?= base_url('assets/uploads/' . $row['image_file']) ?>" class="w-full h-full object-cover">
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
                    <button onclick="editZigzag(<?= $row['id'] ?>, '<?= addslashes($row['title']) ?>', '<?= addslashes($row['description']) ?>')" class="px-5 py-2 text-xs font-bold bg-[#1a1a1a] hover:bg-neutral-800 text-white rounded-xl border border-darkBorder transition-colors">
                        Edit
                    </button>
                    <button onclick="confirmDelete('<?= base_url('admin/delete_zigzag/'.$row['id']) ?>')" class="p-2.5 bg-red-500/10 hover:bg-red-500/20 text-red-500 rounded-xl border border-red-500/20 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                    </button>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

	<div id="modalDeleteConfirm" class="fixed inset-0 z-[100] hidden">
		<div class="absolute inset-0 bg-black/80 backdrop-blur-sm transition-opacity" onclick="closeModal('modalDeleteConfirm')"></div>
		<div class="flex items-center justify-center min-h-screen px-4 text-center">
			<div class="relative bg-darkCard border border-darkBorder rounded-[2rem] p-8 text-center shadow-2xl w-full max-w-sm transform transition-all">
				<div class="w-20 h-20 rounded-full bg-red-500/10 flex items-center justify-center mx-auto mb-5 border border-red-500/20">
					<svg class="w-10 h-10 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
				</div>
				
				<h3 class="text-2xl font-bold text-white mb-2">Are you sure?</h3>
				<p class="text-sm text-neutral-400 mb-8 leading-relaxed">
					You are about to delete this item. This action cannot be undone and will permanently remove it from the homepage.
				</p>
				
				<div class="flex flex-col gap-3">
					<a id="btnConfirmDelete" href="#" class="w-full py-3.5 bg-red-500 text-white text-sm font-bold rounded-xl hover:bg-red-600 transition-colors shadow-lg shadow-red-500/20">
						Yes, Delete It
					</a>
					<button onclick="closeModal('modalDeleteConfirm')" class="w-full py-3.5 bg-transparent text-neutral-400 hover:text-white text-sm font-bold rounded-xl transition-colors">
						Cancel
					</button>
				</div>
			</div>
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

	function editHeroSlot(slotNumber) {
        document.getElementById('input_hero_slot').value = slotNumber;
        document.getElementById('display_hero_slot').innerText = slotNumber;
        openModal('modalEditHero');
    }

    function editFeature(id, currentTitle) {
        document.getElementById('input_feature_id').value = id;
        document.getElementById('input_feature_title').value = currentTitle;
        openModal('modalEditFeature');
    }

    function editBanner(id, currentTitle, currentDesc, currentBtn) {
        document.getElementById('input_banner_id').value = id;
        document.getElementById('input_banner_title').value = currentTitle;
        document.getElementById('input_banner_desc').value = currentDesc;
        document.getElementById('input_banner_btn').value = currentBtn;
        openModal('modalEditBanner');
    }

    function addZigzag() {
        document.getElementById('zigzag_id').value = ''; 
        document.getElementById('zigzag_title').value = '';
        document.getElementById('zigzag_desc').value = '';
        
        const modalTitle = document.querySelector('#modalAddZigzag h3');
        if(modalTitle) modalTitle.innerText = 'Add New Surprise Row';
        
        openModal('modalAddZigzag');
    }

    function editZigzag(id, title, desc) {
        document.getElementById('zigzag_id').value = id;
        document.getElementById('zigzag_title').value = title;
        document.getElementById('zigzag_desc').value = desc;
        
        const modalTitle = document.querySelector('#modalAddZigzag h3');
        if(modalTitle) modalTitle.innerText = 'Edit Surprise Row';
        
        openModal('modalAddZigzag');
    }

	function confirmDelete(deleteUrl) {
        document.getElementById('btnConfirmDelete').href = deleteUrl;
        
        openModal('modalDeleteConfirm');
    }
</script>