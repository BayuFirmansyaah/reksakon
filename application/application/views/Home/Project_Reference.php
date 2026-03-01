<!-- Page Header -->
<div class="relative flex min-h-[350px] flex-col justify-center bg-cover bg-center bg-no-repeat overflow-hidden"
    style="background-image: linear-gradient(rgba(0, 15, 40, 0.8), rgba(0, 15, 40, 0.9)), url('<?php echo base_url('images/bg_home1.jpg'); ?>');">
    <div class="layout-container relative z-10 flex w-full justify-center px-4 md:px-10 py-16 md:py-24">
        <div class="max-w-[1280px] w-full" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 text-blue-400 font-bold uppercase tracking-widest text-xs mb-4">
                <span class="w-8 h-[1px] bg-blue-400"></span> Project Reference
            </div>
            <h1 class="text-white text-4xl md:text-6xl font-black leading-tight tracking-tight">Referensi Proyek</h1>
            <p class="text-gray-300 text-lg mt-4 max-w-2xl">Detail lengkap proyek-proyek yang telah kami selesaikan.</p>
        </div>
    </div>
</div>

<!-- Project Reference Cards -->
<div class="w-full bg-white dark:bg-background-dark py-16 md:py-24">
    <div class="layout-container flex w-full justify-center px-4 md:px-10">
        <div class="max-w-[1280px] w-full">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <?php foreach ($DATA_PROJECT as $row): ?>
                    <div class="group relative overflow-hidden rounded-2xl h-[450px] cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500"
                        data-aos="fade-up" data-bs-toggle="modal" data-bs-target="#projectModal"
                        data-nama="<?php echo htmlspecialchars($row->NAMAPRODUK); ?>"
                        data-owner="<?php echo htmlspecialchars($row->PROJECT_OWNER); ?>"
                        data-client="<?php echo htmlspecialchars($row->CLIENT_PROJECT); ?>"
                        data-location="<?php echo htmlspecialchars($row->LOCATION); ?>"
                        data-year="<?php echo date('Y', strtotime($row->TANGGAL)); ?>"
                        data-keterangan="<?php echo htmlspecialchars($row->KETERANGAN); ?>"
                        data-image="<?php echo base_url('images/project/' . $row->PICT_2); ?>"
                        onclick="openProjectModal(this)">
                        <img src="<?php echo base_url('images/project/' . $row->PICT_2); ?>"
                            alt="<?php echo $row->NAMAPRODUK; ?>"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6 w-full">
                            <h3 class="text-xl font-bold text-white mb-1">
                                <?php echo htmlspecialchars($row->NAMAPRODUK); ?> —
                                (<?php echo date('Y', strtotime($row->TANGGAL)); ?>)
                            </h3>
                            <p class="text-gray-300 text-sm mb-3"><?php echo htmlspecialchars($row->PROJECT_OWNER); ?></p>
                            <button
                                class="bg-white/20 backdrop-blur-md text-white text-xs px-4 py-2 rounded-lg border border-white/20 hover:bg-white/30 transition-colors font-bold">
                                Selengkapnya
                            </button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="projectModal"
    class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/60 backdrop-blur-sm p-4">
    <div class="bg-white dark:bg-[#1a2634] rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto shadow-2xl">
        <div class="flex items-center justify-between p-6 border-b border-gray-100 dark:border-gray-700">
            <h3 id="modalTitle" class="text-xl font-bold text-primary dark:text-white">Detail Proyek</h3>
            <button onclick="closeProjectModal()"
                class="text-gray-400 hover:text-primary dark:hover:text-white cursor-pointer">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
        <div class="p-6">
            <div class="rounded-xl overflow-hidden mb-6">
                <img id="modalImage" src="" alt="Project" class="w-full h-64 object-cover">
            </div>
            <div class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-gray-50 dark:bg-[#15202b] p-4 rounded-xl">
                        <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-1">Project Name
                        </p>
                        <p id="modalNama" class="text-sm font-bold text-primary dark:text-white"></p>
                    </div>
                    <div class="bg-gray-50 dark:bg-[#15202b] p-4 rounded-xl">
                        <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-1">Year</p>
                        <p id="modalTahun" class="text-sm font-bold text-primary dark:text-white"></p>
                    </div>
                    <div class="bg-gray-50 dark:bg-[#15202b] p-4 rounded-xl">
                        <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-1">Project Owner
                        </p>
                        <p id="modalOwner" class="text-sm font-bold text-primary dark:text-white"></p>
                    </div>
                    <div class="bg-gray-50 dark:bg-[#15202b] p-4 rounded-xl">
                        <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-1">Client</p>
                        <p id="modalClient" class="text-sm font-bold text-primary dark:text-white"></p>
                    </div>
                    <div class="bg-gray-50 dark:bg-[#15202b] p-4 rounded-xl">
                        <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-1">Location</p>
                        <p id="modalLocation" class="text-sm font-bold text-primary dark:text-white"></p>
                    </div>
                    <div class="bg-gray-50 dark:bg-[#15202b] p-4 rounded-xl">
                        <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-1">Work Package
                        </p>
                        <p id="modalKeterangan" class="text-sm font-bold text-primary dark:text-white"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function openProjectModal(el) {
        const modal = document.getElementById('projectModal');
        document.getElementById('modalTitle').textContent = 'Detail Proyek - ' + el.dataset.nama;
        document.getElementById('modalNama').textContent = el.dataset.nama;
        document.getElementById('modalTahun').textContent = el.dataset.year;
        document.getElementById('modalOwner').textContent = el.dataset.owner;
        document.getElementById('modalClient').textContent = el.dataset.client;
        document.getElementById('modalLocation').textContent = el.dataset.location;
        document.getElementById('modalKeterangan').textContent = el.dataset.keterangan;
        document.getElementById('modalImage').src = el.dataset.image;
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }
    function closeProjectModal() {
        const modal = document.getElementById('projectModal');
        modal.classList.remove('flex');
        modal.classList.add('hidden');
        document.body.style.overflow = '';
    }
    document.getElementById('projectModal').addEventListener('click', function (e) {
        if (e.target === this) closeProjectModal();
    });
</script>