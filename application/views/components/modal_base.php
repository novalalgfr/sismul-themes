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

                    <div id="preview-container-<?= $modal_id ?>" class="hidden mt-4">
                        <p class="text-xs text-neutral-500 mb-2 font-medium uppercase tracking-wider">Preview</p>
                        <div class="relative w-full rounded-xl overflow-hidden border border-darkBorder bg-[#0f0f0f] flex items-center justify-center" style="min-height: 180px;">
                            <img 
                                id="preview-image-<?= $modal_id ?>" 
                                src="#" 
                                alt="Preview" 
                                class="max-h-56 w-auto object-contain rounded-xl transition-all duration-300"
                            >
                        </div>
                    </div>

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

<script>
(function() {
    const modalId    = '<?= $modal_id ?>';
    const container  = document.getElementById('preview-container-' + modalId);
    const previewImg = document.getElementById('preview-image-' + modalId);
    const modal      = document.getElementById(modalId);

    function bindFileInputs() {
        const fileInputs = modal.querySelectorAll('input[type="file"]');

        fileInputs.forEach(function(input) {
            if (input.dataset.previewBound) return;
            input.dataset.previewBound = 'true';

            input.addEventListener('change', function(e) {
                const file = e.target.files[0];

                if (!file) {
                    container.classList.add('hidden');
                    previewImg.src = '#';
                    return;
                }

                if (!file.type.startsWith('image/')) {
                    container.classList.add('hidden');
                    return;
                }

                const reader = new FileReader();
                reader.onload = function(ev) {
                    previewImg.src = ev.target.result;
                    container.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            });
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', bindFileInputs);
    } else {
        bindFileInputs();
    }

    const originalClose = window.closeModal;
    window.closeModal = function(id) {
        if (id === modalId) {
            container.classList.add('hidden');
            previewImg.src = '#';

            modal.querySelectorAll('input[type="file"]').forEach(function(input) {
                input.value = '';
                delete input.dataset.previewBound;
            });

            setTimeout(bindFileInputs, 100);
        }
        if (typeof originalClose === 'function') originalClose(id);
    };
})();
</script>