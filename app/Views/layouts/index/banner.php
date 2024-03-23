<main class="carousel-container">
    <div class="carousel">
        <?php $i = 0; foreach($banners as $key => $banner): $i++; ?>
        <div class="item <?php $i == 1? "active": "" ?>">
            <img src="<?= base_url('asset/banner/') . $banner->image ?>" alt="<?= $banner->title ?>" title="<?= $banner->title ?>">
            <a class="caption">
                <?= $banner->description ?>
            </a>
        </div>
        <?php endforeach ?>
    </div>
    <button class="btn prev">
        <svg height="35px" version="1.1" viewBox="0 0 512 512" width="35px" xmlns="http://www.w3.org/2000/svg">
            <path d="M327.3,98.9l-2.1,1.8l-156.5,136c-5.3,4.6-8.6,11.5-8.6,19.2c0,7.7,3.4,14.6,8.6,19.2L324.9,411l2.6,2.3c2.5,1.7,5.5,2.7,8.7,2.7c8.7,0,15.8-7.4,15.8-16.6h0V112.6h0c0-9.2-7.1-16.6-15.8-16.6C332.9,96,329.8,97.1,327.3,98.9z" />
        </svg>


    </button>
    <button class="btn next">
        <svg height="35px" viewBox="0 0 512 512" width="35px" xmlns="http://www.w3.org/2000/svg">
            <path d="M184.7,413.1l2.1-1.8l156.5-136c5.3-4.6,8.6-11.5,8.6-19.2c0-7.7-3.4-14.6-8.6-19.2L187.1,101l-2.6-2.3  C182,97,179,96,175.8,96c-8.7,0-15.8,7.4-15.8,16.6h0v286.8h0c0,9.2,7.1,16.6,15.8,16.6C179.1,416,182.2,414.9,184.7,413.1z" />
        </svg>

    </button>
    <div class="dots"></div>
</main>