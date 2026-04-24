<div class="space-y-5">
    
    <input type="hidden" name="zigzag_id" id="zigzag_id" value="">

    <div>
        <label class="block text-sm font-bold text-neutral-300 mb-2">Section Image</label>
        <div class="flex items-center gap-4">
            <div class="w-24 h-16 shrink-0 rounded-xl bg-black border border-darkBorder overflow-hidden">
                <img id="zigzag_preview" src="https://placehold.co/400x300/151515/333333?text=Preview" class="w-full h-full object-cover">
            </div>
            <div class="w-full">
                <input class="w-full text-sm text-neutral-400 file:mr-4 file:py-2.5 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-bold file:bg-[#1a1a1a] file:text-white hover:file:bg-neutral-800 transition-all border border-darkBorder rounded-xl bg-darkBg" type="file" name="zigzag_image">
            </div>
        </div>
    </div>

    <div>
        <label class="block text-sm font-bold text-neutral-300 mb-2">Section Title</label>
        <input type="text" name="title" id="zigzag_title" placeholder="e.g. Unique Custom Animations" class="w-full bg-[#1a1a1a] border border-darkBorder text-white text-sm rounded-xl focus:ring-white focus:border-white block p-3 outline-none transition-colors">
    </div>

    <div>
        <label class="block text-sm font-bold text-neutral-300 mb-2">Description</label>
        <textarea name="description" id="zigzag_desc" rows="3" placeholder="Write the content description..." class="w-full bg-[#1a1a1a] border border-darkBorder text-white text-sm rounded-xl block p-3 outline-none resize-none"></textarea>
    </div>

    <div class="p-3 bg-darkBg border border-darkBorder rounded-xl flex items-start gap-3">
        <svg class="w-5 h-5 text-neutral-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        <p class="text-xs text-neutral-400 leading-relaxed">
            <strong>Layout Auto-Alignment:</strong> Image placement (Left/Right) will be automatically determined based on the row sequence to maintain the zig-zag design.
        </p>
    </div>
</div>