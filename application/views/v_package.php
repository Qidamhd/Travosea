<section class="package" id="package">
    <h1>Where to?..</h1>
    <p>Top destinations for your next vacation</p>
    <div class="container-package">
        <?php foreach ($images as $gmbr) : ?>
            <a href="<?php echo base_url() ?><?php echo $gmbr->url ?>">
                <img src="<?php echo base_url() ?>assets/img/<?php echo $gmbr->img; ?>" alt="<?php echo $gmbr->img ?>" width="300px">
                <span><?php echo $gmbr->nama_pulau ?></span>
            </a>
        <?php endforeach; ?>
        <div class="ct">
            <a href="<?php echo base_url() ?>travosea/macan">
                <img src="<?php echo base_url() ?>assets/img/macan.jpeg" alt="Pulau Macan" width="310px" style="border-radius: 7%;">
                <span>Pulau Macan</span>
            </a>
            <a href="<?php echo base_url() ?>travosea/pelangi">
                <img src="<?php echo base_url() ?>assets/img/pelangi.jpeg" alt="Pulau Pelangi" width="300px" height="232px" style="border-radius: 7%;">
                <span>Pulau Pelangi</span>
            </a>

        </div>
    </div>
    <div class="btn-more">See More</div>
</section>