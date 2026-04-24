<input type="hidden" name="feature_id" id="input_feature_id">

<div class="space-y-5">
    <div>
        <label class="block text-sm font-bold text-neutral-300 mb-2">Feature Title</label>
        <input type="text" name="title" id="input_feature_title" placeholder="e.g. 20+ Pages" class="w-full bg-[#1a1a1a] border border-darkBorder text-white text-sm rounded-xl focus:ring-white focus:border-white block p-3 outline-none transition-colors" required>
    </div>

    <div>
        <label class="block text-sm font-bold text-neutral-300 mb-2">Feature Thumbnail</label>
        <div class="flex items-center gap-4">
            <div class="w-20 h-20 shrink-0 rounded-xl bg-black border border-darkBorder overflow-hidden">
                <img src="https://placehold.co/200x200/151515/333333?text=Img" class="w-full h-full object-cover">
            </div>
            <div class="w-full">
                <input class="w-full text-sm text-neutral-400 file:mr-4 file:py-2.5 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-bold file:bg-[#1a1a1a] file:text-white hover:file:bg-neutral-800 transition-all border border-darkBorder rounded-xl bg-darkBg" type="file" name="feature_image" accept="image/*">
                <p class="text-xs text-neutral-500 mt-2">*Leave blank if you don't want to change the image.</p>
            </div>
        </div>
    </div>
</div>