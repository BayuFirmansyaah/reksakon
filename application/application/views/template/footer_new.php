</div><!-- end .w-full -->

<!-- Footer -->
<footer class="w-full bg-[#0f1823] text-white pt-16 pb-8 border-t border-gray-800">
    <div class="layout-container flex w-full justify-center px-4 md:px-10">
        <div class="max-w-[1280px] w-full flex flex-col gap-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                <div class="flex flex-col gap-4">
                    <div class="flex items-center gap-3">
                        <img src="<?php echo base_url('images/logo_new.png'); ?>" alt="Logo" class="h-8 w-auto">
                        <span class="text-xl font-bold">
                            <?php
                            if (isset($DATA_HOMEPAGE)) {
                                foreach ($DATA_HOMEPAGE as $row) {
                                    if ($row->NAMA == "COMPANY")
                                        echo $row->KETERANGAN;
                                }
                            } else {
                                echo "PT. Rekayasa Sarana Konstruksi";
                            }
                            ?>
                        </span>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Mitra berharga Anda yang tumbuh dengan pengetahuan luas dalam konstruksi dan rekayasa.
                        Responsive & Responsible.
                    </p>
                </div>
                <div class="flex flex-col gap-4">
                    <h4 class="text-lg font-bold">Head Office</h4>
                    <div class="flex flex-col gap-2 text-sm text-gray-400">
                        <?php
                        if (isset($DATA_HOMEPAGE)) {
                            foreach ($DATA_HOMEPAGE as $row) {
                                if ($row->NAMA == "ALAMAT") {
                                    echo '<p>' . $row->KETERANGAN . '</p>';
                                }
                            }
                        }
                        ?>
                        <p class="mt-2 text-white">
                            <span class="material-symbols-outlined text-sm align-middle mr-1">mail</span>
                            <?php
                            if (isset($DATA_HOMEPAGE)) {
                                foreach ($DATA_HOMEPAGE as $row) {
                                    if ($row->NAMA == "EMAIL")
                                        echo $row->KETERANGAN;
                                }
                            }
                            ?>
                        </p>
                        <p class="text-white">
                            <span class="material-symbols-outlined text-sm align-middle mr-1">call</span>
                            <?php
                            if (isset($DATA_HOMEPAGE)) {
                                foreach ($DATA_HOMEPAGE as $row) {
                                    if ($row->NAMA == "TELP")
                                        echo $row->KETERANGAN;
                                }
                            }
                            ?>
                        </p>
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <h4 class="text-lg font-bold">Operational Office</h4>
                    <div class="flex flex-col gap-2 text-sm text-gray-400">
                        <?php
                        if (isset($DATA_HOMEPAGE)) {
                            foreach ($DATA_HOMEPAGE as $row) {
                                if ($row->NAMA == "ALAMAT2") {
                                    echo '<p>' . $row->KETERANGAN . '</p>';
                                }
                            }
                        }
                        ?>
                    </div>
                    <!-- Gallery mini -->
                    <?php if (isset($DATA_PROJECT)): ?>
                        <h4 class="text-lg font-bold mt-4">Gallery</h4>
                        <div class="grid grid-cols-3 gap-2">
                            <?php
                            $XDATA_PROJECT = $DATA_PROJECT;
                            shuffle($XDATA_PROJECT);
                            $data_project_sliced = array_slice($XDATA_PROJECT, 0, 6);
                            foreach ($data_project_sliced as $row) {
                                ?>
                                <div class="aspect-square rounded-lg overflow-hidden">
                                    <img class="w-full h-full object-cover hover:scale-110 transition-transform duration-500"
                                        src="<?php echo base_url('images/project/' . $row->PICT_2); ?>" alt="">
                                </div>
                            <?php } ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="flex flex-col gap-4">
                    <h4 class="text-lg font-bold">Tautan Cepat</h4>
                    <div class="flex flex-col gap-2 text-sm text-gray-400">
                        <a class="hover:text-white transition-colors" href="<?php echo base_url('Home'); ?>">Beranda</a>
                        <a class="hover:text-white transition-colors" href="<?php echo base_url('About'); ?>">About
                            Us</a>
                        <a class="hover:text-white transition-colors"
                            href="<?php echo base_url('Services'); ?>">Layanan</a>
                        <a class="hover:text-white transition-colors"
                            href="<?php echo base_url('Project'); ?>">Proyek</a>
                        <a class="hover:text-white transition-colors"
                            href="<?php echo base_url('Xperience'); ?>">Pengalaman Kerja</a>
                        <a class="hover:text-white transition-colors"
                            href="<?php echo base_url('Contact'); ?>">Kontak</a>
                    </div>
                </div>
            </div>
            <div
                class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-gray-500">
                <p>&copy;
                    <?php echo date('Y'); ?> PT Rekayasa Sarana Konstruksi. Hak Cipta Dilindungi.
                </p>
                <p>Designed by RSKteam</p>
            </div>
        </div>
    </div>
</footer>

</div><!-- end .relative flex -->

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ duration: 800, once: true, offset: 100, easing: 'ease-out-cubic' });
</script>
<script src="<?php echo base_url('assets/NewDesign/js/animations.js'); ?>"></script>
<script src="<?php echo base_url('assets/NewDesign/js/navbar-scroll.js'); ?>"></script>
<script src="<?php echo base_url('assets/NewDesign/js/mobile-menu.js'); ?>"></script>
<script src="<?php echo base_url('assets/NewDesign/js/dark-mode.js'); ?>"></script>
</body>

</html>