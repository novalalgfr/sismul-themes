<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SismulTheme</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        darkBg: '#121212',
                        darkCard: '#151515', 
                        darkBorder: '#262626',
                        brandRed: '#4a1f26', 
                        brandIcon: '#ff3b5c'
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #0a0a0a;
            color: #ededed;
        }
    </style>
</head>
<body class="antialiased min-h-screen flex flex-col items-center">

    <header class="fixed top-6 left-0 right-0 z-50 flex justify-center px-4">
        <nav class="w-full max-w-5xl bg-darkCard border border-darkBorder rounded-full px-3 py-2 flex justify-between items-center shadow-2xl backdrop-blur-md">
            
            <div class="flex items-center gap-3 pl-2">
                <div class="w-10 h-10 rounded-full bg-brandRed flex items-center justify-center">
                    <svg class="w-5 h-5 text-brandIcon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>
                <span class="text-white font-bold text-lg tracking-wide">SismulTheme</span>
            </div>
            
            <ul class="hidden md:flex items-center space-x-8 text-sm font-medium text-neutral-300">
                <li><a href="<?= base_url() ?>" class="text-white">Home</a></li>
                <li><a href="#" class="hover:text-white transition-colors">About</a></li>
                <li class="flex items-center gap-1 hover:text-white transition-colors cursor-pointer group">
                    Pages 
                    <svg class="w-4 h-4 text-neutral-400 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </li>
                <li><a href="#" class="hover:text-white transition-colors">Pricing</a></li>
                <li><a href="#" class="hover:text-white transition-colors">Cart (0)</a></li>
            </ul>

            <button class="px-6 py-2.5 bg-white text-black text-sm font-bold rounded-full hover:bg-neutral-200 transition-colors">
                Get started
            </button>
        </nav>
    </header>

    <div class="w-full max-w-6xl pt-32 px-6 pb-20 flex-grow">