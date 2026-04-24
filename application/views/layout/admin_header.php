<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SismulThemes - CMS Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        darkBg: '#0a0a0a',
                        darkCard: '#151515',
                        darkBorder: '#262626'
                    }
                }
            }
        }
    </script>
    <style>
        body { background-color: #0a0a0a; color: #ededed; }
        ::-webkit-scrollbar { width: 8px; height: 8px; }
        ::-webkit-scrollbar-track { background: #0a0a0a; }
        ::-webkit-scrollbar-thumb { background: #262626; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #404040; }
    </style>
</head>
<body class="antialiased flex h-screen overflow-hidden bg-darkBg text-neutral-300">

    <aside class="w-72 bg-darkCard border-r border-darkBorder flex flex-col hidden md:flex shrink-0 z-20 shadow-2xl">
        
        <div class="h-24 flex items-center px-8 border-b border-darkBorder">
            <span class="text-white font-bold text-2xl tracking-wide">
                Sismul<span class="text-neutral-500">Themes</span>
            </span>
            <span class="ml-3 px-2 py-0.5 bg-[#1e1e1e] border border-darkBorder text-neutral-400 text-[10px] font-bold uppercase tracking-widest rounded-md">
                CMS
            </span>
        </div>
        
        <nav class="flex-1 px-5 py-8 space-y-2 overflow-y-auto">
            <p class="px-3 text-xs font-bold text-neutral-500 uppercase tracking-widest mb-6">Main Menu</p>
            
            <a href="#" class="flex items-center px-4 py-3.5 bg-[#1e1e1e] text-white rounded-2xl border border-darkBorder transition-all shadow-sm">
                <svg class="w-5 h-5 mr-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                <span class="font-medium text-sm">Template Catalog</span>
            </a>
            
            <a href="<?= base_url() ?>" target="_blank" class="flex items-center px-4 py-3.5 text-neutral-400 hover:text-white hover:bg-[#1a1a1a] rounded-2xl transition-all group">
                <svg class="w-5 h-5 mr-3 text-neutral-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                <span class="font-medium text-sm">View Storefront</span>
            </a>
        </nav>

        <div class="p-6 border-t border-darkBorder bg-[#0f0f0f]">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-[#1e1e1e] border border-darkBorder flex items-center justify-center text-white font-bold">
                    A
                </div>
                <div>
                    <p class="text-sm font-bold text-white">Administrator</p>
                    <p class="text-xs text-neutral-500">admin@sismul.com</p>
                </div>
            </div>
        </div>
    </aside>

    <main class="flex-1 flex flex-col h-screen overflow-y-auto relative">