<!-- Page Header -->
<div class="relative flex min-h-[350px] flex-col justify-center bg-cover bg-center bg-no-repeat overflow-hidden"
    style="background-image: linear-gradient(rgba(0, 15, 40, 0.8), rgba(0, 15, 40, 0.9)), url('<?php echo base_url('images/bg_home2.jpg'); ?>');">
    <div class="layout-container relative z-10 flex w-full justify-center px-4 md:px-10 py-16 md:py-24">
        <div class="max-w-[1280px] w-full" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 text-blue-400 font-bold uppercase tracking-widest text-xs mb-4">
                <span class="w-8 h-[1px] bg-blue-400"></span> Our Services
            </div>
            <h1 class="text-white text-4xl md:text-6xl font-black leading-tight tracking-tight">Layanan & Keahlian</h1>
            <p class="text-gray-300 text-lg mt-4 max-w-2xl">Solusi teknik terintegrasi untuk berbagai sektor industri
                dengan standar presisi tinggi.</p>
        </div>
    </div>
</div>

<!-- Services Grid -->
<div class="w-full bg-white dark:bg-background-dark py-16 md:py-24">
    <div class="layout-container flex w-full justify-center px-4 md:px-10">
        <div class="max-w-[1280px] w-full">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $icons = array('construction', 'electric_bolt', 'format_paint', 'architecture', 'engineering', 'plumbing', 'build');
                $i = 0;
                foreach ($DATA_OUR_SERVICE as $row):
                    $icon = $icons[$i % count($icons)];
                    $delay = ($i + 1) * 100;
                    ?>
                    <div class="group bg-white dark:bg-[#1a2634] rounded-2xl border border-gray-100 dark:border-gray-700 overflow-hidden hover:shadow-xl hover:-translate-y-2 transition-all duration-500"
                        data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
                        <!-- Image -->
                        <div class="relative h-56 overflow-hidden">
                            <img src="<?php echo base_url('images/our_services/' . $row->PICT); ?>"
                                alt="<?php echo $row->NAMA; ?>"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-4 left-4">
                                <div
                                    class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-xl flex items-center justify-center">
                                    <span class="material-symbols-outlined text-2xl text-white"><?php echo $icon; ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="p-6">
                            <h3
                                class="text-xl font-bold text-primary dark:text-white mb-3 group-hover:text-blue-600 transition-colors">
                                <?php echo $row->NAMA; ?>
                            </h3>
                            <p class="text-[#5e738d] dark:text-gray-400 text-sm leading-relaxed">
                                <?php echo $row->KETERANGAN; ?>
                            </p>
                        </div>
                    </div>
                    <?php $i++; endforeach; ?>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="w-full bg-primary text-white py-16">
    <div class="layout-container flex w-full justify-center px-4 md:px-10">
        <div class="max-w-[1280px] w-full text-center" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Butuh Layanan Konstruksi?</h2>
            <p class="text-gray-300 mb-8 max-w-xl mx-auto">Konsultasikan kebutuhan proyek Anda dengan tim ahli kami
                untuk solusi yang tepat dan berkualitas.</p>
            <a href="<?php echo base_url('Contact'); ?>"
                class="inline-flex items-center gap-2 bg-white text-primary hover:bg-blue-50 px-8 py-4 rounded-xl font-bold transition-all shadow-xl transform hover:-translate-y-1">
                Hubungi Kami Sekarang
                <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </a>
        </div>
    </div>
</div>