<!-- Page Header -->
<div class="relative flex min-h-[350px] flex-col justify-center bg-cover bg-center bg-no-repeat overflow-hidden"
    style="background-image: linear-gradient(rgba(0, 15, 40, 0.8), rgba(0, 15, 40, 0.9)), url('<?php echo base_url('images/bg_home2.jpg'); ?>');">
    <div class="layout-container relative z-10 flex w-full justify-center px-4 md:px-10 py-16 md:py-24">
        <div class="max-w-[1280px] w-full" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 text-blue-400 font-bold uppercase tracking-widest text-xs mb-4">
                <span class="w-8 h-[1px] bg-blue-400"></span> About Us
            </div>
            <h1 class="text-white text-4xl md:text-6xl font-black leading-tight tracking-tight">Tentang Kami</h1>
            <p class="text-gray-300 text-lg mt-4 max-w-2xl">Mengenal lebih dekat PT. Rekayasa Sarana Konstruksi dan
                mitra strategis kami.</p>
        </div>
    </div>
</div>

<!-- About Content -->
<div class="w-full bg-white dark:bg-background-dark py-16 md:py-24">
    <div class="layout-container flex w-full justify-center px-4 md:px-10">
        <div class="max-w-[1280px] w-full flex flex-col md:flex-row items-start gap-12">
            <!-- Image -->
            <div class="w-full md:w-1/2" data-aos="fade-right">
                <div class="rounded-2xl overflow-hidden shadow-2xl">
                    <img src="<?php echo base_url('images/FotoTeam/ft_1.jpeg'); ?>" alt="Team"
                        class="w-full h-[400px] object-cover hover:scale-105 transition-transform duration-700">
                </div>
            </div>
            <!-- Text -->
            <div class="w-full md:w-1/2 flex flex-col gap-6" data-aos="fade-left">
                <div
                    class="inline-flex items-center gap-2 text-primary dark:text-blue-400 font-bold uppercase tracking-wider text-sm">
                    <span class="material-symbols-outlined text-lg">domain</span>
                    <span>About Us</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-primary dark:text-white leading-tight">
                    <?php
                    foreach ($DATA_HOMEPAGE as $row) {
                        if ($row->NAMA == "COMPANY")
                            echo $row->KETERANGAN;
                    }
                    ?>
                </h2>
                <?php
                foreach ($DATA_HOMEPAGE as $row) {
                    if ($row->NAMA == "ABOUT_US") {
                        $paragraphs = explode("\\n", $row->KETERANGAN);
                        foreach ($paragraphs as $p) {
                            $p = trim($p);
                            if (!empty($p)) {
                                echo '<p class="text-[#5e738d] dark:text-gray-400 text-base leading-relaxed">' . $p . '</p>';
                            }
                        }
                    }
                }
                ?>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-2">
                    <?php foreach ($DATA_OUR_SERVICE as $row): ?>
                        <div
                            class="flex items-center gap-3 text-primary dark:text-white font-medium p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                            <span class="material-symbols-outlined text-blue-500 text-base">check_circle</span>
                            <span class="text-sm font-bold"><?php echo $row->NAMA; ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Partners Section -->
<div class="w-full bg-gradient-to-b from-slate-50 to-white dark:from-[#0f1823] dark:to-[#131e2b] py-16 md:py-24">
    <div class="layout-container flex w-full justify-center px-4 md:px-10">
        <div class="max-w-[1280px] w-full flex flex-col items-center gap-12">
            <div class="text-center" data-aos="fade-up">
                <div
                    class="inline-flex items-center gap-2 text-primary dark:text-blue-400 font-bold uppercase tracking-widest text-xs mb-4 justify-center">
                    <span class="material-symbols-outlined text-sm">verified</span>
                    Trusted Partners
                </div>
                <h2 class="text-3xl md:text-4xl font-black text-primary dark:text-white">Mitra Strategis Kami</h2>
                <p class="text-gray-500 dark:text-gray-400 mt-4 max-w-xl mx-auto">
                    Dipercaya oleh berbagai perusahaan terkemuka di sektor industri Indonesia.
                </p>
            </div>
            <div class="w-full grid grid-cols-2 md:grid-cols-3 lg:grid-cols-<?php echo min(count($DATA_PARTNERSHIP), 6); ?> gap-6"
                data-aos="fade-up" data-aos-delay="100">
                <?php foreach ($DATA_PARTNERSHIP as $row): ?>
                    <div
                        class="group bg-white dark:bg-[#1a2634] rounded-2xl border border-gray-100 dark:border-gray-700/50 p-8 flex flex-col items-center gap-4 text-center transition-all duration-500 hover:-translate-y-2 hover:shadow-xl hover:border-primary/20">
                        <?php if (!empty($row->pict)): ?>
                            <div class="w-20 h-20 flex items-center justify-center rounded-xl overflow-hidden">
                                <img src="<?php echo base_url('images/partnership/' . $row->pict); ?>"
                                    alt="<?php echo $row->NAMA; ?>"
                                    class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                            </div>
                        <?php endif; ?>
                        <h4 class="text-sm font-bold text-slate-800 dark:text-slate-100"><?php echo $row->NAMA; ?></h4>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>