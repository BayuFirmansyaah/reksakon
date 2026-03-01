<!-- Page Header -->
<div class="relative flex min-h-[350px] flex-col justify-center bg-cover bg-center bg-no-repeat overflow-hidden"
    style="background-image: linear-gradient(rgba(0, 15, 40, 0.8), rgba(0, 15, 40, 0.9)), url('<?php echo base_url('images/bg_home1.jpg'); ?>');">
    <div class="layout-container relative z-10 flex w-full justify-center px-4 md:px-10 py-16 md:py-24">
        <div class="max-w-[1280px] w-full" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 text-blue-400 font-bold uppercase tracking-widest text-xs mb-4">
                <span class="w-8 h-[1px] bg-blue-400"></span> Portfolio
            </div>
            <h1 class="text-white text-4xl md:text-6xl font-black leading-tight tracking-tight">Proyek Kami</h1>
            <p class="text-gray-300 text-lg mt-4 max-w-2xl">Berbagai proyek yang telah berhasil kami selesaikan dengan
                standar kualitas tinggi.</p>
        </div>
    </div>
</div>

<!-- Projects Grid -->
<div class="w-full bg-white dark:bg-background-dark py-16 md:py-24">
    <div class="layout-container flex w-full justify-center px-4 md:px-10">
        <div class="max-w-[1280px] w-full">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <?php
                $delay = 100;
                foreach ($DATA_PROJECT as $row):
                    ?>
                    <div class="group relative overflow-hidden rounded-2xl h-[400px] cursor-pointer shadow-lg hover:shadow-2xl transition-shadow duration-500"
                        data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                            style="background-image: url('<?php echo base_url('images/project/' . $row->PICT_2); ?>');">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-8 w-full">
                            <h3 class="text-2xl font-bold text-white mb-2"><?php echo $row->NAMAPRODUK; ?></h3>
                            <p class="text-gray-300 text-sm line-clamp-2 mb-4"><?php echo $row->KETERANGAN; ?></p>
                            <div class="flex flex-wrap gap-2">
                                <?php if (!empty($row->PROJECT_OWNER)): ?>
                                    <span
                                        class="bg-blue-600/30 text-blue-200 text-xs px-3 py-1 rounded-full backdrop-blur-sm border border-blue-500/30"><?php echo $row->PROJECT_OWNER; ?></span>
                                <?php endif; ?>
                                <?php if (!empty($row->CLIENT_PROJECT)): ?>
                                    <span
                                        class="bg-indigo-600/30 text-indigo-200 text-xs px-3 py-1 rounded-full backdrop-blur-sm border border-indigo-500/30"><?php echo $row->CLIENT_PROJECT; ?></span>
                                <?php endif; ?>
                                <?php if (!empty($row->LOCATION)): ?>
                                    <span
                                        class="bg-cyan-600/30 text-cyan-200 text-xs px-3 py-1 rounded-full backdrop-blur-sm border border-cyan-500/30">
                                        <span
                                            class="material-symbols-outlined text-xs align-middle mr-1">location_on</span><?php echo $row->LOCATION; ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php $delay = ($delay >= 200) ? 100 : $delay + 100; endforeach; ?>
            </div>
        </div>
    </div>
</div>

<!-- Navigation Buttons -->
<div class="w-full bg-primary py-12">
    <div class="layout-container flex w-full justify-center px-4 md:px-10">
        <div class="max-w-[1280px] w-full flex flex-col md:flex-row justify-center gap-6 text-center"
            data-aos="fade-up">
            <a href="<?php echo base_url('Xperience'); ?>"
                class="group inline-flex items-center justify-center gap-3 px-8 py-4 border border-white/30 text-white rounded-xl hover:bg-white hover:text-primary transition-all font-bold backdrop-blur-sm">
                <span class="material-symbols-outlined">work</span>
                Work Experience
                <span
                    class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </a>
            <a href="<?php echo base_url('Project_Reference'); ?>"
                class="group inline-flex items-center justify-center gap-3 px-8 py-4 bg-white text-primary rounded-xl hover:bg-blue-50 transition-all font-bold shadow-lg">
                <span class="material-symbols-outlined">folder_open</span>
                Project Reference
                <span
                    class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </a>
        </div>
    </div>
</div>