<!-- Hero Section -->
<div class="relative flex min-h-[700px] flex-col justify-center bg-cover bg-center bg-no-repeat overflow-hidden"
    style="background-image: linear-gradient(rgba(0, 15, 40, 0.75), rgba(0, 15, 40, 0.9)), url('<?php echo base_url('images/bg_home1.jpg'); ?>');">
    <div class="absolute top-0 right-0 w-1/3 h-full bg-primary/20 -skew-x-12 transform translate-x-1/2 hidden lg:block">
    </div>
    <div class="layout-container relative z-10 flex w-full justify-center px-4 md:px-10 py-16 md:py-24">
        <div class="max-w-[1280px] w-full flex flex-col gap-10">
            <div class="max-w-[950px] flex flex-col gap-6" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="text-white text-5xl md:text-7xl font-black leading-[1.1] tracking-tight">
                    <?php
                    foreach ($DATA_HOMEPAGE as $row) {
                        if ($row->NAMA == "COMPANY")
                            echo $row->KETERANGAN;
                    }
                    ?>
                </h1>
                <p class="text-gray-300 text-lg md:text-xl font-normal leading-relaxed max-w-[750px]">
                    <?php
                    foreach ($DATA_HOMEPAGE as $row) {
                        if ($row->NAMA == "OUR_SERVICES_HEADER")
                            echo strip_tags($row->KETERANGAN);
                    }
                    ?>
                </p>
                <div class="flex flex-wrap gap-4 mt-4">
                    <a href="<?php echo base_url('Services'); ?>"
                        class="flex items-center justify-center rounded-xl h-14 px-8 bg-white text-primary hover:bg-blue-50 transition-all text-base font-bold shadow-xl hover:shadow-blue-500/20 transform hover:-translate-y-1">
                        Jelajahi Kapabilitas
                    </a>
                    <a href="<?php echo base_url('Project'); ?>"
                        class="flex items-center justify-center rounded-xl h-14 px-8 border border-white/30 text-white hover:bg-white/10 transition-all text-base font-bold backdrop-blur-sm">
                        Lihat Portofolio
                    </a>
                </div>
            </div>
            <!-- Trust Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-12 mt-8 py-8 border-t border-white/10"
                data-aos="fade-up" data-aos-delay="200">
                <div>
                    <span class="block text-white text-4xl font-black mb-1"><?php echo count($DATA_PROJECT); ?>+</span>
                    <span class="block text-gray-400 text-sm font-medium uppercase tracking-wider">Proyek Selesai</span>
                </div>
                <div>
                    <span class="block text-white text-4xl font-black mb-1">100%</span>
                    <span class="block text-gray-400 text-sm font-medium uppercase tracking-wider">Standar HES</span>
                </div>
                <div>
                    <span
                        class="block text-white text-4xl font-black mb-1"><?php echo count($DATA_PARTNERSHIP); ?>+</span>
                    <span class="block text-gray-400 text-sm font-medium uppercase tracking-wider">Klien
                        Korporasi</span>
                </div>
                <div>
                    <span class="block text-white text-4xl font-black mb-1">15+</span>
                    <span class="block text-gray-400 text-sm font-medium uppercase tracking-wider">Tahun
                        Pengalaman</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About Section -->
<div class="w-full bg-white dark:bg-background-dark py-16 md:py-24">
    <div class="layout-container flex w-full justify-center px-4 md:px-10">
        <div class="max-w-[1280px] w-full flex flex-col md:flex-row items-center gap-10 md:gap-16">
            <!-- Text Section -->
            <div id="tentang-kami" class="w-full md:w-1/2 flex flex-col gap-6 order-2 md:order-1" data-aos="fade-right">
                <div
                    class="inline-flex items-center gap-2 text-primary dark:text-blue-400 font-bold uppercase tracking-wider text-sm">
                    <span class="material-symbols-outlined text-lg">domain</span>
                    <span>Tentang Kami</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-primary dark:text-white leading-tight">
                    Mitra Konstruksi Terpercaya & Profesional
                </h2>
                <?php
                foreach ($DATA_HOMEPAGE as $row) {
                    if ($row->NAMA == "OUR_SERVICES_HEADER") {
                        echo '<p class="text-[#5e738d] dark:text-gray-400 text-lg leading-relaxed">' . $row->KETERANGAN . '</p>';
                    }
                    if ($row->NAMA == "OUR_SERVICES") {
                        echo '<p class="text-[#5e738d] dark:text-gray-400 text-base leading-relaxed">' . $row->KETERANGAN . '</p>';
                    }
                }
                ?>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-2">
                    <?php foreach ($DATA_OUR_SERVICE as $row): ?>
                        <div
                            class="flex items-center gap-3 text-primary dark:text-white font-medium p-3 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors">
                            <span class="material-symbols-outlined text-blue-500">check_circle</span>
                            <span class="text-sm font-bold"><?php echo $row->NAMA; ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="mt-4">
                    <a href="<?php echo base_url('About'); ?>"
                        class="inline-flex items-center gap-2 bg-primary hover:bg-[#003066] text-white px-6 py-3 rounded-lg font-bold transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Selengkapnya
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
            </div>
            <!-- Image Section -->
            <div class="w-full md:w-1/2 relative order-1 md:order-2" data-aos="fade-left">
                <div class="relative w-full aspect-square md:aspect-auto md:h-[500px]">
                    <div class="absolute top-0 right-0 w-[85%] h-[85%] rounded-2xl overflow-hidden shadow-2xl">
                        <img src="<?php echo base_url('images/bg_home1.jpg'); ?>" alt="Konstruksi"
                            class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                    </div>
                    <div
                        class="absolute bottom-0 left-0 w-[55%] h-[55%] rounded-2xl overflow-hidden shadow-2xl border-4 border-white dark:border-background-dark">
                        <img src="<?php echo base_url('images/FotoTeam/ft_5.jpeg'); ?>" alt="Team"
                            class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                    </div>
                    <div
                        class="absolute top-1/2 left-0 -translate-y-1/2 -translate-x-4 bg-primary text-white p-6 rounded-xl shadow-xl hidden md:block">
                        <span class="block text-4xl font-black mb-1">15+</span>
                        <span class="block text-sm font-medium opacity-90">Tahun<br>Pengalaman</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Services Section -->
<div class="w-full py-24 bg-cover bg-center bg-fixed relative overflow-hidden"
    style='background-image: linear-gradient(rgba(10, 25, 47, 0.85), rgba(10, 25, 47, 0.95)), url("<?php echo base_url('images/bg_home2.jpg'); ?>");'>
    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-blue-500/50 to-transparent">
    </div>
    <div class="layout-container relative z-10 flex w-full justify-center px-4 md:px-10">
        <div class="max-w-[1280px] w-full flex flex-col gap-10">
            <div class="flex flex-col md:flex-row justify-between items-end gap-6">
                <div class="flex flex-col gap-3">
                    <div
                        class="inline-flex items-center gap-2 text-blue-400 font-bold uppercase tracking-widest text-xs">
                        <span class="w-8 h-[1px] bg-blue-400"></span> Our Capabilities
                    </div>
                    <h2 class="text-white text-4xl md:text-5xl font-black leading-tight tracking-tight">Layanan &
                        Keahlian</h2>
                    <p class="text-gray-400 max-w-2xl text-lg">Solusi teknik terintegrasi untuk berbagai sektor industri
                        dengan standar presisi tinggi.</p>
                </div>
                <a href="<?php echo base_url('Services'); ?>"
                    class="hidden md:flex items-center gap-2 border border-blue-500/30 text-blue-400 bg-blue-500/5 px-8 py-3 rounded-xl hover:bg-blue-500 hover:text-white transition-all text-sm font-bold backdrop-blur-sm">
                    Lihat Semua Layanan
                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                $icons = array('construction', 'electric_bolt', 'format_paint', 'architecture', 'engineering', 'plumbing', 'build');
                $i = 0;
                foreach ($DATA_OUR_SERVICE as $row):
                    $icon = $icons[$i % count($icons)];
                    $delay = ($i + 1) * 100;
                    ?>
                    <div class="group bg-white dark:bg-[#1a2634] p-8 rounded-2xl border border-gray-100 dark:border-gray-700 hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
                        <div
                            class="w-14 h-14 bg-blue-50 dark:bg-blue-900/30 rounded-xl flex items-center justify-center text-primary dark:text-blue-400 mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-3xl"><?php echo $icon; ?></span>
                        </div>
                        <div>
                            <h3
                                class="text-[#101418] dark:text-white text-lg font-bold leading-normal mb-2 group-hover:text-primary dark:group-hover:text-blue-400 transition-colors">
                                <?php echo $row->NAMA; ?>
                            </h3>
                            <p class="text-[#5e738d] dark:text-gray-400 text-sm font-normal leading-normal line-clamp-3">
                                <?php echo substr($row->KETERANGAN, 0, 150); ?>...
                            </p>
                        </div>
                        <div class="pt-4 border-t border-gray-100 dark:border-gray-700 mt-auto">
                            <a href="<?php echo base_url('Services'); ?>"
                                class="text-sm font-bold text-primary dark:text-blue-400 flex items-center gap-2 group-hover:gap-3 transition-all">
                                Lihat Selengkapnya <span class="material-symbols-outlined text-base">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                    <?php $i++; endforeach; ?>
            </div>
            <a href="<?php echo base_url('Services'); ?>"
                class="md:hidden w-full border border-primary text-primary dark:border-blue-400 dark:text-blue-400 px-6 py-3 rounded-lg hover:bg-primary hover:text-white transition-colors text-sm font-bold text-center block">
                Lihat Semua Layanan
            </a>
        </div>
    </div>
</div>

<!-- Clients / Partners Section -->
<div
    class="w-full bg-gradient-to-b from-slate-50 via-white to-slate-50 dark:from-[#0f1823] dark:via-[#131e2b] dark:to-[#0f1823] py-24 md:py-32 relative overflow-hidden">
    <div
        class="absolute top-20 right-0 w-[500px] h-[500px] bg-gradient-to-br from-blue-400/5 to-indigo-500/5 rounded-full blur-3xl -mr-48">
    </div>
    <div
        class="absolute bottom-20 left-0 w-[400px] h-[400px] bg-gradient-to-tr from-primary/5 to-cyan-500/5 rounded-full blur-3xl -ml-48">
    </div>
    <div class="layout-container flex w-full justify-center px-4 md:px-10">
        <div id="klien" class="max-w-[1280px] w-full flex flex-col items-center gap-16">
            <div class="w-full flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8" data-aos="fade-up">
                <div class="flex flex-col gap-4 lg:max-w-[55%]">
                    <div
                        class="inline-flex items-center gap-3 text-primary dark:text-blue-400 font-bold uppercase tracking-[0.2em] text-xs">
                        <span class="flex items-center gap-2">
                            <span class="w-8 h-[2px] bg-gradient-to-r from-primary to-blue-400"></span>
                            <span class="material-symbols-outlined text-sm">verified</span>
                        </span>
                        Trusted Partners
                    </div>
                    <h2 class="text-primary dark:text-white text-3xl md:text-4xl lg:text-5xl font-black leading-tight">
                        Mitra Strategis <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600 dark:from-blue-400 dark:to-indigo-400">Kami</span>
                    </h2>
                    <p class="text-gray-500 dark:text-gray-400 text-base md:text-lg leading-relaxed max-w-xl">
                        Dipercaya oleh berbagai perusahaan terkemuka di sektor minyak & gas, pertambangan, dan
                        infrastruktur di seluruh Indonesia.
                    </p>
                </div>
                <div class="flex gap-6 lg:gap-10">
                    <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="text-3xl md:text-4xl font-black text-primary dark:text-white leading-none">
                            <?php echo count($DATA_PARTNERSHIP); ?>+</div>
                        <div
                            class="text-xs font-semibold text-gray-400 dark:text-gray-500 uppercase tracking-wider mt-2">
                            Mitra Aktif</div>
                    </div>
                    <div class="w-px bg-gray-200 dark:bg-gray-700"></div>
                    <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="text-3xl md:text-4xl font-black text-primary dark:text-white leading-none">5+</div>
                        <div
                            class="text-xs font-semibold text-gray-400 dark:text-gray-500 uppercase tracking-wider mt-2">
                            Sektor Industri</div>
                    </div>
                </div>
            </div>

            <!-- Partner Cards -->
            <div class="w-full grid grid-cols-2 md:grid-cols-3 lg:grid-cols-<?php echo min(count($DATA_PARTNERSHIP), 5); ?> gap-4 md:gap-5"
                data-aos="fade-up" data-aos-delay="100">
                <?php
                $partner_icons = array('diamond', 'factory', 'local_gas_station', 'engineering', 'star', 'corporate_fare');
                $pi = 0;
                foreach ($DATA_PARTNERSHIP as $row):
                    $p_icon = $partner_icons[$pi % count($partner_icons)];
                    ?>
                    <div
                        class="partner-card group relative bg-white dark:bg-[#1a2634] rounded-2xl border border-gray-100 dark:border-gray-700/50 p-6 flex flex-col items-center gap-4 text-center transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_50px_-12px_rgba(0,32,71,0.15)] hover:border-primary/20 overflow-hidden cursor-pointer">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-blue-50/50 to-indigo-50/50 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>
                        <?php if (!empty($row->pict)): ?>
                            <div class="relative z-10 w-16 h-16 flex items-center justify-center rounded-xl overflow-hidden">
                                <img src="<?php echo base_url('images/partnership/' . $row->pict); ?>"
                                    alt="<?php echo $row->NAMA; ?>"
                                    class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                            </div>
                        <?php else: ?>
                            <div
                                class="relative z-10 w-16 h-16 flex items-center justify-center bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-blue-900/30 dark:to-indigo-900/20 rounded-xl group-hover:scale-110 transition-transform duration-500">
                                <span
                                    class="material-symbols-outlined text-3xl text-primary dark:text-blue-400"><?php echo $p_icon; ?></span>
                            </div>
                        <?php endif; ?>
                        <div class="relative z-10">
                            <h4 class="text-sm font-bold text-slate-800 dark:text-slate-100 leading-snug">
                                <?php echo $row->NAMA; ?></h4>
                        </div>
                    </div>
                    <?php $pi++; endforeach; ?>
            </div>

            <div class="flex flex-col items-center gap-6" data-aos="fade-up" data-aos-delay="300">
                <a href="<?php echo base_url('About'); ?>"
                    class="group inline-flex items-center gap-3 px-8 py-4 bg-primary hover:bg-[#001835] text-white font-bold rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl hover:shadow-primary/20 hover:-translate-y-0.5">
                    <span>Lihat Semua Mitra</span>
                    <span
                        class="material-symbols-outlined text-base group-hover:translate-x-1 transition-transform">arrow_forward</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Projects Section -->
<div class="w-full bg-primary text-white py-16 md:py-24">
    <div class="layout-container flex w-full justify-center px-4 md:px-10">
        <div class="max-w-[1280px] w-full flex flex-col gap-12">
            <div class="flex flex-col md:flex-row justify-between items-end gap-6" data-aos="fade-up">
                <div class="flex flex-col gap-2">
                    <div
                        class="inline-flex items-center gap-2 text-blue-300 font-bold uppercase tracking-wider text-sm">
                        <span class="material-symbols-outlined text-lg">work</span>
                        <span>Portofolio</span>
                    </div>
                    <h2 class="text-4xl font-bold">Proyek Terselesaikan</h2>
                </div>
                <a href="<?php echo base_url('Project'); ?>"
                    class="hidden md:flex border border-white text-white px-6 py-2 rounded-lg hover:bg-white hover:text-primary transition-colors text-sm font-bold">
                    Lihat Semua Proyek
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <?php
                $project_sliced = array_slice($DATA_PROJECT, 0, 4);
                $delay = 100;
                foreach ($project_sliced as $row):
                    ?>
                    <div class="group relative overflow-hidden rounded-xl h-[400px] cursor-pointer" data-aos="fade-up"
                        data-aos-delay="<?php echo $delay; ?>">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                            style="background-image: url('<?php echo base_url('images/project/' . $row->PICT_2); ?>');">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-8 w-full">
                            <h3 class="text-2xl font-bold mb-2"><?php echo $row->NAMAPRODUK; ?></h3>
                            <p class="text-gray-300 text-sm line-clamp-2"><?php echo $row->KETERANGAN; ?></p>
                            <div class="flex gap-2 mt-4">
                                <?php if (!empty($row->PROJECT_OWNER)): ?>
                                    <span
                                        class="bg-blue-600/30 text-blue-200 text-xs px-3 py-1 rounded-full backdrop-blur-sm border border-blue-500/30"><?php echo $row->PROJECT_OWNER; ?></span>
                                <?php endif; ?>
                                <?php if (!empty($row->LOCATION)): ?>
                                    <span
                                        class="bg-blue-600/30 text-blue-200 text-xs px-3 py-1 rounded-full backdrop-blur-sm border border-blue-500/30"><?php echo $row->LOCATION; ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="mt-6 pt-4 border-t border-white/20">
                                <a href="<?php echo base_url('Project_Reference'); ?>"
                                    class="text-sm font-bold text-white flex items-center gap-2 hover:gap-3 transition-all">
                                    Lihat Detail Proyek <span
                                        class="material-symbols-outlined text-base">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php $delay += 100; endforeach; ?>
            </div>
            <a href="<?php echo base_url('Project'); ?>"
                class="md:hidden w-full border border-white text-white px-6 py-3 rounded-lg hover:bg-white hover:text-primary transition-colors text-sm font-bold text-center block">
                Lihat Semua Proyek
            </a>
        </div>
    </div>
</div>