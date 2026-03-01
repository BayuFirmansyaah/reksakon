<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="section-title bg-white text-center text-primary px-3">Work Project</h6>
      <h1 class="mb-5">Project Experience</h1>
    </div>

    <div class="timeline">
      <?php 
      $no = 1;
      foreach ($DATA_WORK_EXPERIENCE as $row) { 
        $isLeft = ($no % 2 == 1);
      ?>
        <div class="timeline-item <?php echo $isLeft ? 'left' : 'right'; ?>">
          <div class="content border rounded p-3">
            <h5 class="mb-1"><?php echo $row->PROJECT_NAME; ?> <small class="text-muted float-right"><?php echo $row->YEAR; ?></small></h5>
            <p class="mb-1"><strong>Owner:</strong> <?php echo $row->PROJECT_OWNER; ?></p>
            <p class="mb-1"><strong>Location:</strong> <?php echo $row->LOCATION; ?></p>
            <p class="mb-1"><strong>Client:</strong> <?php echo $row->CLIENT; ?></p>
            <p class="mb-1"><strong>Work Package:</strong> <?php echo $row->WORK_PACKAGE; ?></p>
            <p class="mb-0"><strong>Value:</strong> <?php echo "IDR ".number_format($row->CONTRACT_VALUE, 0, ',', '.'); ?></p>
          </div>
          <div class="circle"><?php echo $no; ?></div>
        </div>
      <?php 
        $no++;
      } 
      ?>
    </div>
  </div>
</div>

<style>
  .timeline {
    position: relative;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px 0;
  }

  /* Garis tengah */
  .timeline::before {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    left: 50%;
    width: 4px;
    background: #55b8c9;
    transform: translateX(-50%);
  }

  .timeline-item {
    position: relative;
    width: 50%;
    padding: 10px 40px;
    box-sizing: border-box;
  }

  /* Konten kiri */
  .timeline-item.left {
    left: 0;
    text-align: right;
  }

  .timeline-item.left .content {
    display: inline-block;
    background: #f8f9fa;
    border: 1px solid #ddd;
    position: relative;
    text-align: left !important;
  }

  .timeline-item.left .circle {
    position: absolute;
    top: 15px;
    right: -15px;
    width: 30px;
    height: 30px;
    background: #55b8c9;
    border-radius: 50%;
    color: white;
    font-weight: bold;
    line-height: 30px;
    text-align: center;
    font-size: 16px;
    box-shadow: 0 0 5px rgba(0,0,0,0.2);
  }

  /* Konten kanan */
  .timeline-item.right {
    left: 50%;
    text-align: left;
  }

  .timeline-item.right .content {
    display: inline-block;
    background: #f8f9fa;
    border: 1px solid #ddd;
    position: relative;
  }

  .timeline-item.right .circle {
    position: absolute;
    top: 15px;
    left: -15px;
    width: 30px;
    height: 30px;
    background: #55b8c9;
    border-radius: 50%;
    color: white;
    font-weight: bold;
    line-height: 30px;
    text-align: center;
    font-size: 16px;
    box-shadow: 0 0 5px rgba(0,0,0,0.2);
  }

  /* Responsive: kalau layar kecil jadi satu kolom */
  @media screen and (max-width: 767px) {
    .timeline::before {
      left: 8px;
    }
    .timeline-item {
      width: 100%;
      padding-left: 40px;
      padding-right: 25px;
      text-align: left !important;
      left: 0 !important;
    }
    .timeline-item .circle {
      top: 15px;
      left: 0 !important;
      right: auto !important;
    }
  }

.timeline-item.left .content,
.timeline-item.right .content {
  display: block;
  width: 100%;
  background: #f8f9fa;
  border: 1px solid #ddd;
  position: relative;
  box-sizing: border-box;
  text-align: left !important;
  padding: 15px 20px;
}

</style>
