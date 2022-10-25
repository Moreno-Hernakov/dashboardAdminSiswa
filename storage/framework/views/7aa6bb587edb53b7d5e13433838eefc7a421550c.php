
<?php $__env->startSection('is_title', 'ShowSiswa'); ?>
<?php $__env->startSection('is_title_konten', 'ShowSiswa' ); ?>
<?php $__env->startSection('is_konten'); ?>
<style>
  $black: #071011;
  $white: #fff;
  $red: tomato;
  $standard: 10px;
  $card-height: 450px;
  $card-width: 400px;

  .background {
    position: absolute;
    top: 0;
    left: 0;
    height: 100vh;
    width: 100vw;

    background: url("https://images.unsplash.com/photo-1447433589675-4aaa569f3e05?ixlib=rb-0.3.5&s=4222852e25e0f57d9485f7889957e99a&auto=format&fit=crop&w=2000&q=80");
    background-size: cover;
    background: #ccc;
    background-position: 0 50%;
    background: #DEB493;

    &:after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background: rgba(0, 0, 0, 0);
    }
  }

  .outer-div,
  .inner-div {
    min-height: 550px;
    height: auto;
    max-width: 400px;
    margin: 0 auto 25px auto;
    position: relative;
  }

  .outer-div {
    perspective: 900px;
    perspective-origin: 50% calc(50% - 18em);
  }

  .inner-div {
    margin: 0 auto;
    border-radius: 5px;
    font-weight: 400;
    color: black;
    font-size: 1rem;
    text-align: center;
    /* transition: all 0.6s cubic-bezier(0.8, -0.4, 0.2, 1.7); */
    /* transform-style: preserve-3d; */

    
    &:hover .social-icon {
      opacity: 1;
      top: 0;
    }
  }

  .front,
  .back {
    position: relative;
    top: 0;
    left: 0;
    backface-visibility: hidden;
  }

  .front {
    cursor: pointer;
    height: 100%;
    background: $white;
    backface-visibility: hidden;
    border-radius: 5px;
    box-shadow: 0 15px 10px -10px rgba(0, 0, 0, 0.5), 0 1px 4px rgba(0, 0, 0, 0.3),
      0 0 40px rgba(0, 0, 0, 0.1) inset;
  }

  .front__bkg-photo {
    position: relative;
    height: 150px;
    width: $card-width;
    background: url("https://images.unsplash.com/photo-1511207538754-e8555f2bc187?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=88672068827eaeeab540f584b883cc66&auto=format&fit=crop&w=1164&q=80")
      no-repeat;
    background-size: cover;
    backface-visibility: hidden;
    /* overflow: hidden; */
    border-top-right-radius: 5px;
    border-top-left-radius: 5px;

    &:after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
    }
  }

  .front__face-photo {
    position: relative;
    top: -60px;
    height: 155px;
    width: 155px;
    margin: 0 auto;
    border-radius: 50%;
    border: 2px solid white;
    no-repeat;
    background-size: contain;
  }

  .front__text {
    position: relative;
    top: -55px;
    margin: 0 auto;
    font-family: "Montserrat";
    font-size: 18px;
    backface-visibility: hidden;

    .front__text-header {
      font-weight: 700;
      font-family: "Oswald";
      text-transform: uppercase;
      font-size: 20px;
    }

    .front__text-para {
      position: relative;
      top: -5px;

      color: #000;
      font-size: 14px;
      letter-spacing: 0.4px;
      font-weight: 400;
      font-family: "Montserrat", sans-serif;
    }

    .front-icons {
      position: relative;
      top: 0;
      font-size: 14px;
      margin-right: 6px;
      color: gray;
    }

    .front__text-hover {
      position: relative;
      top: 10px;
      font-size: 10px;
      color: $red;
      backface-visibility: hidden;

      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .4px;

      border: 2px solid $red;
      padding: 8px 15px;
      border-radius: 30px;

      background: $red;
      color: $white;
    }
  }

  /* .back {
    transform: rotateY(180deg);
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: $black;
    border-radius: 5px;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
  } */

  .social-media-wrapper {
    margin-top: -60px;
    padding-bottom: 30px;
    font-size: 36px;

    .social-icon {
      position: relative;
      top: 20px;
      margin-left: 5px;
      margin-right: 5px;
      opacity: 0;
      color: #fff;
      transition: all 0.4s cubic-bezier(0.3, 0.7, 0.1, 1.9);
    }

    .social-icon:nth-child(1) {
      transition-delay: 0.6s;
    }

    .social-icon:nth-child(2) {
      transition-delay: 0.7s;
    }

    .social-icon:nth-child(3) {
      transition-delay: 0.8s;
    }

    .social-icon:nth-child(4) {
      transition-delay: 0.9s;
    }
  }

  .fab {
    position: relative;
    top: 0;
    left: 0;
    transition: all 200ms ease-in-out;
  }

  .fab:hover {
    top: -5px;
  }

</style>
<div class="row"> 
  <div class="col-lg-4">
    <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="background"></div>
    <div class="outer-div">
      <div class="inner-div">
        <div class="front">
          <div class="front__bkg-photo"></div>
          <!-- <div class="front__face-photo"></div> -->
          <img src="<?php echo e(asset('storage/'.$p->foto)); ?>" alt="" class="front__face-photo">
          <div class="front__text">
            <h3 class="front__text-header"><?php echo e($p->nama); ?></h3>
            <p class="front__text-para"><i class="fas fa-map-marker-alt front-icons"></i> &nbsp; <?php echo e($p->alamat); ?></p>
            <p class="front__text-para"><?php echo e($p->nisn); ?> &nbsp;||&nbsp;  <?php echo e($p->jk); ?></p>
            <p class="front__text-para mx-2 text-break"><?php echo e($p->about); ?></p>
          </div>
          <div class="social-media-wrapper">
            <?php $__empty_1 = true; $__currentLoopData = $p->kontak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            
              <?php if($l->jenis_id == 1): ?>
                <button type="button" class=" btn btn-outline" data-toggle="tooltip" data-placement="top" title="<?php echo e($l->deskripsi); ?>">
                  <i class="fab fa-whatsapp fa-2x" aria-hidden="true"></i>
                </button>
              <?php elseif($l->jenis_id == 2): ?>
              <button type="button" class="btn btn-outline" data-toggle="tooltip" data-placement="top" title="<?php echo e($l->deskripsi); ?>">
                <i class="fab fa-github-square fa-2x" aria-hidden="true"></i>
              </button>
              <?php elseif($l->jenis_id == 3): ?>
              <button type="button" class="btn btn-outline" data-toggle="tooltip" data-placement="top" title="<?php echo e($l->deskripsi); ?>">
                <i class="fab fa-2x fa-instagram" aria-hidden="true"></i>
              </button>
                
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
              <p>-</p>
            <?php endif; ?>
            
          </div>
        </div>
          
      </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  <div class="col-lg-8">    
    <div class="card shadow mb-4"> 
      <div class="card-header bg-brown">  
            <h6 class="m-0 font-weight-bold text-primary"> <i class="fas fa-tasks"> </i> Project Siswa </h6> 
      </div> 
      <div class="card-body"> 
      </div> 
    </div> 
  </div>   
</div> 
 
 
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Reno\PgwbTaskEz\resources\views/admin/konten/siswa/ShowSiswa.blade.php ENDPATH**/ ?>