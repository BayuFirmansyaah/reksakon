<!-- Page Header -->
<div class="relative flex min-h-[350px] flex-col justify-center bg-cover bg-center bg-no-repeat overflow-hidden"
  style="background-image: linear-gradient(rgba(0, 15, 40, 0.8), rgba(0, 15, 40, 0.9)), url('<?php echo base_url('images/bg_home1.jpg'); ?>');">
  <div class="layout-container relative z-10 flex w-full justify-center px-4 md:px-10 py-16 md:py-24">
    <div class="max-w-[1280px] w-full" data-aos="fade-up">
      <div class="inline-flex items-center gap-2 text-blue-400 font-bold uppercase tracking-widest text-xs mb-4">
        <span class="w-8 h-[1px] bg-blue-400"></span> Work Experience
      </div>
      <h1 class="text-white text-4xl md:text-6xl font-black leading-tight tracking-tight">Pengalaman Kerja</h1>
      <p class="text-gray-300 text-lg mt-4 max-w-2xl">Track record proyek-proyek yang telah kami kerjakan bersama
        klien-klien ternama.</p>
    </div>
  </div>
</div>

<!-- Work Experience Content -->
<div class="w-full bg-white dark:bg-background-dark py-16 md:py-24">
  <div class="layout-container flex w-full justify-center px-4 md:px-10">
    <div class="max-w-[1280px] w-full">
      <!-- Year Filter Summary -->
      <?php
      $years = array();
      foreach ($DATA_WORK_EXPERIENCE as $row) {
        if (!in_array($row->YEAR, $years))
          $years[] = $row->YEAR;
      }
      rsort($years);
      ?>

      <!-- Experience Cards by Year -->
      <?php foreach ($years as $year): ?>
        <div class="mb-12" data-aos="fade-up">
          <div class="flex items-center gap-4 mb-6">
            <div class="bg-primary text-white px-5 py-2 rounded-xl text-xl font-black shadow-lg"><?php echo $year; ?>
            </div>
            <div class="flex-1 h-[2px] bg-gradient-to-r from-primary/20 to-transparent"></div>
          </div>

          <!-- Desktop Table -->
          <div class="hidden md:block">
            <div
              class="bg-gray-50 dark:bg-[#1a2634] rounded-2xl overflow-hidden border border-gray-100 dark:border-gray-700">
              <table class="w-full">
                <thead>
                  <tr class="bg-primary text-white text-sm">
                    <th class="px-6 py-4 text-left font-bold">Project Name</th>
                    <th class="px-6 py-4 text-left font-bold">Project Owner</th>
                    <th class="px-6 py-4 text-left font-bold">Location</th>
                    <th class="px-6 py-4 text-left font-bold">Client</th>
                    <th class="px-6 py-4 text-left font-bold">Work Package</th>
                    <th class="px-6 py-4 text-right font-bold">Contract Value</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 dark:divide-gray-700">
                  <?php foreach ($DATA_WORK_EXPERIENCE as $row):
                    if ($row->YEAR != $year)
                      continue;
                    ?>
                    <tr class="hover:bg-blue-50/50 dark:hover:bg-blue-900/10 transition-colors">
                      <td class="px-6 py-4 text-sm font-bold text-primary dark:text-white"><?php echo $row->PROJECT_NAME; ?>
                      </td>
                      <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400"><?php echo $row->PROJECT_OWNER; ?></td>
                      <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">
                        <span class="inline-flex items-center gap-1">
                          <span class="material-symbols-outlined text-xs text-blue-400">location_on</span>
                          <?php echo $row->LOCATION; ?>
                        </span>
                      </td>
                      <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400"><?php echo $row->CLIENT; ?></td>
                      <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400"><?php echo $row->WORK_PACKAGE; ?></td>
                      <td class="px-6 py-4 text-sm font-bold text-primary dark:text-blue-400 text-right">
                        IDR <?php echo number_format($row->CONTRACT_VALUE, 0, ',', '.'); ?>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>

          <!-- Mobile Cards -->
          <div class="md:hidden space-y-4">
            <?php foreach ($DATA_WORK_EXPERIENCE as $row):
              if ($row->YEAR != $year)
                continue;
              ?>
              <div
                class="bg-white dark:bg-[#1a2634] rounded-xl border border-gray-100 dark:border-gray-700 p-5 space-y-3 shadow-sm">
                <h3 class="text-base font-bold text-primary dark:text-white"><?php echo $row->PROJECT_NAME; ?></h3>
                <div class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                  <p><span class="font-semibold text-primary dark:text-gray-300">Owner:</span>
                    <?php echo $row->PROJECT_OWNER; ?></p>
                  <p>
                    <span class="font-semibold text-primary dark:text-gray-300">Location:</span>
                    <span class="material-symbols-outlined text-xs align-middle text-blue-400">location_on</span>
                    <?php echo $row->LOCATION; ?>
                  </p>
                  <p><span class="font-semibold text-primary dark:text-gray-300">Client:</span> <?php echo $row->CLIENT; ?>
                  </p>
                  <p><span class="font-semibold text-primary dark:text-gray-300">Work Package:</span>
                    <?php echo $row->WORK_PACKAGE; ?></p>
                </div>
                <div class="pt-3 border-t border-gray-100 dark:border-gray-700">
                  <p class="text-primary dark:text-blue-400 font-bold text-base">IDR
                    <?php echo number_format($row->CONTRACT_VALUE, 0, ',', '.'); ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>