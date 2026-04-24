<input type="hidden" name="banner_id" id="input_banner_id">

<div class="space-y-5">
    <div>
        <label class="block text-sm font-bold text-neutral-300 mb-2">Banner Graphic</label>
        <input class="w-full text-sm text-neutral-400 file:mr-4 file:py-2.5 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-bold file:bg-[#1a1a1a] file:text-white hover:file:bg-neutral-800 border border-darkBorder rounded-xl bg-darkBg" type="file" name="banner_image" accept="image/*">
        <p class="text-xs text-neutral-500 mt-2">*Leave blank if you don't want to change the image.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <div class="md:col-span-2">
            <label class="block text-sm font-bold text-neutral-300 mb-2">Banner Title</label>
            <input type="text" name="title" id="input_banner_title" placeholder="e.g. Figma file included" class="w-full bg-[#1a1a1a] border border-darkBorder text-white text-sm rounded-xl block p-3 outline-none" required>
        </div>

        <div class="md:col-span-2">
            <label class="block text-sm font-bold text-neutral-300 mb-2">Description</label>
            <textarea name="description" id="input_banner_desc" rows="3" placeholder="Write a brief description..." class="w-full bg-[#1a1a1a] border border-darkBorder text-white text-sm rounded-xl block p-3 outline-none resize-none" required></textarea>
        </div>

        <div class="md:col-span-2">
            <label class="block text-sm font-bold text-neutral-300 mb-2">Button Text</label>
            <input type="text" name="button_text" id="input_banner_btn" placeholder="e.g. Request Figma file" class="w-full bg-[#1a1a1a] border border-darkBorder text-white text-sm rounded-xl block p-3 outline-none" required>
        </div>
    </div>
</div>