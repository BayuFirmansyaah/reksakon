<!DOCTYPE html>
<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>PT. Rekayasa Sarana Konstruksi</title>
    <link href="<?php echo base_url('images/logo.png'); ?>" rel="icon">
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#002047",
                        "background-light": "#f5f7f8",
                        "background-dark": "#0f1823",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "2xl": "1rem", "full": "9999px" },
                    boxShadow: {
                        'soft': '0 4px 20px -2px rgba(0, 0, 0, 0.05)',
                        'hover': '0 20px 40px -4px rgba(0, 0, 0, 0.1)',
                        'card': '0 10px 30px -10px rgba(0, 0, 0, 0.15)',
                    }
                },
            },
        }
    </script>
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        header {
            background: transparent !important;
            border-bottom: 1px solid transparent !important;
            transition: background 0.35s ease, border-color 0.35s ease, box-shadow 0.35s ease;
        }

        header.navbar-scrolled {
            background: rgba(255, 255, 255, 0.98) !important;
            border-bottom: 1px solid #f0f2f5 !important;
            box-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.06);
        }

        header.navbar-transparent nav a,
        header.navbar-transparent h2,
        header.navbar-transparent #mobile-menu-toggle {
            color: #ffffff !important;
            transition: color 0.35s ease;
        }

        header.navbar-transparent nav a:hover {
            color: rgba(255, 255, 255, 0.7) !important;
        }

        header.navbar-scrolled nav a,
        header.navbar-scrolled h2,
        header.navbar-scrolled #mobile-menu-toggle {
            color: #101418 !important;
            transition: color 0.35s ease;
        }

        header.navbar-scrolled nav a:hover {
            color: #002047 !important;
        }

        .logo-shadow {
            transition: filter 0.35s ease;
        }

        header.navbar-transparent .logo-shadow {
            filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.7)) drop-shadow(0 0 4px rgba(255, 255, 255, 0.5));
        }

        header.navbar-scrolled .logo-shadow {
            filter: drop-shadow(0 2px 6px rgba(0, 0, 0, 0.15)) drop-shadow(0 1px 3px rgba(0, 0, 0, 0.1));
        }
    </style>
    <link rel="stylesheet" href="<?php echo base_url('assets/NewDesign/css/animations.css'); ?>">
</head>

<body class="bg-background-light text-[#101418] dark:bg-background-dark dark:text-white font-display antialiased">
    <div class="relative flex h-auto min-h-screen w-full flex-col">
        <header class="fixed top-0 left-0 right-0 z-50">
            <div class="layout-container flex w-full justify-center">
                <div
                    class="w-full max-w-[1280px] px-4 md:px-10 py-3 flex items-center justify-between whitespace-nowrap">
                    <div class="flex items-center gap-4 text-primary dark:text-white">
                        <img src="<?php echo base_url('images/logo_new.png'); ?>" alt="Rekayasa Sarana Konstruksi Logo"
                            class="h-10 w-auto logo-shadow">
                        <h2
                            class="text-primary dark:text-white text-xl font-bold leading-tight tracking-[-0.015em] hidden sm:block">
                            Rekayasa Sarana Konstruksi</h2>
                    </div>
                    <div class="hidden lg:flex items-center gap-8">
                        <nav class="flex items-center gap-6">
                            <a class="text-[#101418] dark:text-gray-200 text-sm font-medium hover:text-primary dark:hover:text-blue-400 transition-colors <?php if (isset($ID) && $ID == 'Home')
                                echo 'font-bold'; ?>"
                                href="<?php echo base_url('Home'); ?>">Beranda</a>
                            <a class="text-[#101418] dark:text-gray-200 text-sm font-medium hover:text-primary dark:hover:text-blue-400 transition-colors <?php if (isset($ID) && $ID == 'Services')
                                echo 'font-bold'; ?>"
                                href="<?php echo base_url('Services'); ?>">Layanan</a>
                            <a class="text-[#101418] dark:text-gray-200 text-sm font-medium hover:text-primary dark:hover:text-blue-400 transition-colors <?php if (isset($ID) && $ID == 'Project')
                                echo 'font-bold'; ?>"
                                href="<?php echo base_url('Project'); ?>">Proyek</a>
                            <a class="text-[#101418] dark:text-gray-200 text-sm font-medium hover:text-primary dark:hover:text-blue-400 transition-colors <?php if (isset($ID) && $ID == 'About')
                                echo 'font-bold'; ?>"
                                href="<?php echo base_url('About'); ?>">Klien</a>
                            <a class="text-[#101418] dark:text-gray-200 text-sm font-medium hover:text-primary dark:hover:text-blue-400 transition-colors <?php if (isset($ID) && $ID == 'Work_Experience')
                                echo 'font-bold'; ?>"
                                href="<?php echo base_url('Xperience'); ?>">Pengalaman Kerja</a>
                        </nav>
                        <a href="<?php echo base_url('Contact'); ?>"
                            class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-5 bg-primary hover:bg-[#001835] transition-colors text-white text-sm font-bold leading-normal tracking-[0.015em] shadow-md hover:shadow-lg">
                            <span class="truncate">Hubungi Kami</span>
                        </a>
                    </div>
                    <button id="mobile-menu-toggle" class="lg:hidden text-[#101418] dark:text-white cursor-pointer">
                        <span class="material-symbols-outlined">menu</span>
                    </button>
                </div>
            </div>
        </header>
        <!-- Mobile Menu Overlay -->
        <div id="mobile-menu-overlay"
            class="fixed inset-0 bg-black/50 z-[60] opacity-0 pointer-events-none transition-opacity duration-300">
        </div>
        <!-- Mobile Menu Panel -->
        <div id="mobile-menu"
            class="fixed top-0 right-0 h-full w-72 bg-white dark:bg-background-dark z-[70] shadow-2xl transform translate-x-full transition-transform duration-300 ease-in-out flex flex-col">
            <div class="flex items-center justify-between p-4 border-b border-gray-100 dark:border-gray-800">
                <span class="text-primary dark:text-white font-bold text-lg">Menu</span>
                <button id="mobile-menu-close"
                    class="text-gray-500 dark:text-gray-400 hover:text-primary dark:hover:text-white cursor-pointer">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <nav class="flex flex-col p-4 gap-1">
                <a class="px-4 py-3 rounded-lg text-sm font-medium text-[#101418] dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors"
                    href="<?php echo base_url('Home'); ?>">Beranda</a>
                <a class="px-4 py-3 rounded-lg text-sm font-medium text-[#101418] dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors"
                    href="<?php echo base_url('Services'); ?>">Layanan</a>
                <a class="px-4 py-3 rounded-lg text-sm font-medium text-[#101418] dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors"
                    href="<?php echo base_url('Project'); ?>">Proyek</a>
                <a class="px-4 py-3 rounded-lg text-sm font-medium text-[#101418] dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors"
                    href="<?php echo base_url('About'); ?>">Klien</a>
                <a class="px-4 py-3 rounded-lg text-sm font-medium text-[#101418] dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors"
                    href="<?php echo base_url('Xperience'); ?>">Pengalaman Kerja</a>
            </nav>
            <div class="mt-auto p-4 border-t border-gray-100 dark:border-gray-800">
                <a href="<?php echo base_url('Contact'); ?>"
                    class="flex w-full items-center justify-center rounded-lg h-10 px-5 bg-primary hover:bg-[#001835] transition-colors text-white text-sm font-bold shadow-md">
                    Hubungi Kami
                </a>
            </div>
        </div>
        <div class="w-full">