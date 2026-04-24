<div class="space-y-5">
    
    <input type="hidden" name="slot_number" id="input_hero_slot" value="">

    <div>
        <label class="block text-sm font-bold text-neutral-300 mb-2">
            Upload New Image for Slot <span id="display_hero_slot" class="text-white"></span>
        </label>
        <div class="mt-1 flex justify-center px-6 pt-8 pb-8 border-2 border-darkBorder border-dashed rounded-xl hover:border-neutral-500 transition-colors bg-darkBg">
            <div class="space-y-2 text-center">
                <svg class="mx-auto h-12 w-12 text-neutral-500" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="flex text-sm text-neutral-400 justify-center">
                    <label class="relative cursor-pointer rounded-md font-bold text-white hover:text-neutral-300">
                        <span>Browse files</span>
                        <input type="file" class="sr-only" name="hero_image" accept="image/*" required>
                    </label>
                    <p class="pl-1">or drag and drop</p>
                </div>
                <p class="text-xs text-neutral-500">Recommended size: 800x600px (Max 2MB)</p>
            </div>
        </div>
    </div>
</div>