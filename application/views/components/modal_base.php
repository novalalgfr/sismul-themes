<div id="<?= $modal_id ?>" class="fixed inset-0 z-[100] hidden">
    <div class="absolute inset-0 bg-black/80 backdrop-blur-sm transition-opacity" onclick="closeModal('<?= $modal_id ?>')"></div>
    
    <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:p-0">
        <div class="relative bg-darkCard border border-darkBorder rounded-2xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:max-w-lg w-full">
            
            <div class="px-6 py-4 border-b border-darkBorder flex justify-between items-center bg-[#0f0f0f]">
                <h3 class="text-lg font-bold text-white"><?= $modal_title ?></h3>
                <button type="button" onclick="closeModal('<?= $modal_id ?>')" class="text-neutral-500 hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
            
            <form action="<?= $form_action ?? '#' ?>" method="POST" enctype="multipart/form-data">
                <div class="px-6 py-6">
                    <?= $modal_content ?>
                </div>
                
                <div class="px-6 py-4 border-t border-darkBorder bg-[#0f0f0f] flex justify-end space-x-3">
                    <button type="button" onclick="closeModal('<?= $modal_id ?>')" class="px-4 py-2 bg-[#1a1a1a] text-white text-sm font-bold rounded-lg border border-darkBorder hover:bg-neutral-800 transition-colors">
                        Cancel
                    </button>
                    <button type="submit" class="px-6 py-2 bg-white text-black text-sm font-bold rounded-lg hover:bg-neutral-200 transition-colors">
                        Save Changes
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>