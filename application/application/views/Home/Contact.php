<!-- Page Header -->
<div class="relative flex min-h-[350px] flex-col justify-center bg-cover bg-center bg-no-repeat overflow-hidden"
    style="background-image: linear-gradient(rgba(0, 15, 40, 0.8), rgba(0, 15, 40, 0.9)), url('<?php echo base_url('images/bg_home2.jpg'); ?>');">
    <div class="layout-container relative z-10 flex w-full justify-center px-4 md:px-10 py-16 md:py-24">
        <div class="max-w-[1280px] w-full" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 text-blue-400 font-bold uppercase tracking-widest text-xs mb-4">
                <span class="w-8 h-[1px] bg-blue-400"></span> Contact Us
            </div>
            <h1 class="text-white text-4xl md:text-6xl font-black leading-tight tracking-tight">Hubungi Kami</h1>
            <p class="text-gray-300 text-lg mt-4 max-w-2xl">Konsultasikan kebutuhan konstruksi dan engineering Anda
                dengan tim ahli kami.</p>
        </div>
    </div>
</div>

<!-- Contact Content -->
<div class="w-full bg-white dark:bg-background-dark py-16 md:py-24">
    <div class="layout-container flex w-full justify-center px-4 md:px-10">
        <div class="max-w-[1280px] w-full">
            <!-- Contact Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16" data-aos="fade-up">
                <?php
                foreach ($DATA_JENIS_CONTACT as $row):
                    ?>
                    <div class="bg-gray-50 dark:bg-[#1a2634] rounded-2xl border border-gray-100 dark:border-gray-700 p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div
                                class="w-12 h-12 bg-primary/10 dark:bg-blue-900/30 rounded-xl flex items-center justify-center">
                                <span class="material-symbols-outlined text-primary dark:text-blue-400">badge</span>
                            </div>
                            <h3 class="text-xl font-bold text-primary dark:text-white"><?php echo $row->JENIS; ?></h3>
                        </div>

                        <?php
                        foreach ($DATA_CONTACT as $rows):
                            if ($row->JENIS == $rows->JENIS):
                                ?>
                                <div class="space-y-4">
                                    <!-- Person -->
                                    <div
                                        class="flex items-start gap-4 p-4 bg-white dark:bg-[#15202b] rounded-xl border border-gray-100 dark:border-gray-700">
                                        <div
                                            class="w-10 h-10 bg-blue-50 dark:bg-blue-900/30 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <span
                                                class="material-symbols-outlined text-primary dark:text-blue-400 text-xl">person</span>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-1">Nama
                                            </p>
                                            <p class="text-sm font-bold text-primary dark:text-white">
                                                <?php echo $rows->KETERANGAN; ?></p>
                                        </div>
                                    </div>
                                    <!-- Phone -->
                                    <div
                                        class="flex items-start gap-4 p-4 bg-white dark:bg-[#15202b] rounded-xl border border-gray-100 dark:border-gray-700">
                                        <div
                                            class="w-10 h-10 bg-green-50 dark:bg-green-900/30 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <span
                                                class="material-symbols-outlined text-green-600 dark:text-green-400 text-xl">call</span>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-1">
                                                Telepon / WhatsApp</p>
                                            <p class="text-sm font-bold text-primary dark:text-white"><?php echo $rows->NO; ?></p>
                                            <a href="https://api.whatsapp.com/send?phone=<?php echo $rows->NO; ?>" target="_blank"
                                                class="inline-flex items-center gap-1 text-xs text-green-600 dark:text-green-400 font-bold mt-1 hover:underline">
                                                <span class="material-symbols-outlined text-xs">chat</span> WhatsApp Now
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Email -->
                                    <div
                                        class="flex items-start gap-4 p-4 bg-white dark:bg-[#15202b] rounded-xl border border-gray-100 dark:border-gray-700">
                                        <div
                                            class="w-10 h-10 bg-red-50 dark:bg-red-900/30 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <span
                                                class="material-symbols-outlined text-red-600 dark:text-red-400 text-xl">mail</span>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-1">Email
                                            </p>
                                            <a href="mailto:<?php echo $row->EMAIL; ?>"
                                                class="text-sm font-bold text-primary dark:text-blue-400 hover:underline"><?php echo $row->EMAIL; ?></a>
                                        </div>
                                    </div>
                                    <!-- Office -->
                                    <?php if (!empty($row->OFFICE)): ?>
                                        <div
                                            class="flex items-start gap-4 p-4 bg-white dark:bg-[#15202b] rounded-xl border border-gray-100 dark:border-gray-700">
                                            <div
                                                class="w-10 h-10 bg-indigo-50 dark:bg-indigo-900/30 rounded-lg flex items-center justify-center flex-shrink-0">
                                                <span
                                                    class="material-symbols-outlined text-indigo-600 dark:text-indigo-400 text-xl">location_on</span>
                                            </div>
                                            <div>
                                                <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-1">Office
                                                </p>
                                                <p class="text-sm text-gray-700 dark:text-gray-300"><?php echo $row->OFFICE; ?></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <?php
                            endif;
                        endforeach;
                        ?>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Google Maps -->
            <div data-aos="fade-up">
                <div class="flex items-center gap-3 mb-6">
                    <div
                        class="inline-flex items-center gap-2 text-primary dark:text-blue-400 font-bold uppercase tracking-wider text-sm">
                        <span class="material-symbols-outlined text-lg">location_on</span>
                        <span>Lokasi Kami</span>
                    </div>
                </div>
                <div class="rounded-2xl overflow-hidden shadow-lg border border-gray-100 dark:border-gray-700">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.272504073519!2d106.72234549999999!3d-6.136301299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a02ab187823ff%3A0x9544315d0e1fc65f!2sJl.%20Taman%20Palem%20Lestari%2C%20Kota%20Jakarta%20Barat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sen!2sid!4v1648970599533!5m2!1sen!2sid"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        class="w-full"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>