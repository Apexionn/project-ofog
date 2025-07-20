<div id="footer" class="wrapper-dark">
    <div class="container" style="padding: 3rem 1.5rem;">
        <div class="d-md-flex || flex px-0 sm:px-4 lg:px-12 flex-wrap">
            <div class="w-100 w-md-50 d-sm-flex || w-full md:w-1/2 sm:flex">
                <div class="ul-container w-50 || w-1/2 text-left">
                    <p class="ul-label fw-bold fs-5 || font-bold text-xl" style="margin-bottom: 1rem;">Explore</p>
                    <ul class="ps-0 || pl-0" style="list-style: none;">
                        <?php require_once('./components/menu-items.php');
                            foreach($MENU_ITEMS as $menu): ?>
                        <?php if ($menu['category'] == "page"): ?>
                        <li><a href="<?= $menu['href'] ?>"><?= $menu['label'] ?></a>
                        <li>
                            <?php endif; ?>
                            <?php endforeach ?>
                    </ul>
                </div>
                <div class="ul-container w-50 || w-1/2 text-left">
                    <p class="ul-label fw-bold fs-5 || font-bold text-xl" style="margin-bottom: 1rem;">Latest events</p>
                    <ul class="ps-0 || pl-0" style="list-style: none;">
                        <?php require_once('./components/menu-items.php');
                            foreach($MENU_ITEMS as $menu): ?>
                        <?php if ($menu['category'] == "event"): ?>
                        <li><a href="<?= $menu['href'] ?>"><?= $menu['label'] ?></a>
                        <li>
                            <?php endif; ?>
                            <?php endforeach ?>
                    </ul>
                </div>
            </div>
            <div class="w-md-50 d-flex justify-content-md-between || md:w-1/2 flex md:justify-between flex-wrap" 
                style="margin-bottom: 1.5rem">
                <div>
                <p class="ul-label fw-bold fs-5 || font-bold text-xl" style="margin-bottom: 1rem; text-align:start">Supported By</p>
                <a href="https://www.dewaweb.com" target="_blank">
    <img src="assets/img/dewaweb/dewaweb.webp" alt="DewaWeb" style="width: 250px !important">
</a>

                </div>
                <div>
                <img src="assets/img/organization-logo/himti-logo.svg" alt="HIMTI BINUS University">
                </div>
            </div>
        </div>
        <hr class="mx-0 sm:mx-4 lg:mx-12 opacity-30" style="margin-top: 1rem; margin-bottom: 1rem;">
        <div
            class="d-sm-flex align-items-center justify-content-between || sm:flex items-center justify-between px-0 sm:px-4 lg:px-12">
            <div class="footer-social d-flex gap-2 || flex" style="width: fit-content;">
                <a href="https://www.facebook.com/himtibinus/"><i class="bi bi-facebook"></i></a>
                <a href="https://x.com/himtibinus"><i class="bi bi-twitter-x"></i></a>
                <a href="https://www.youtube.com/user/HimtiBinus"><i class="bi bi-youtube"></i></a>
                <a href="https://instagram.com/himti_binus"><i class="bi bi-instagram"></i></a>
                <a href="https://github.com/himtibinus/"><i class="bi bi-github"></i></a>
                <a href="https://www.tiktok.com/@himtibinus"><i class="bi bi-tiktok"></i></a>
            </div>
            <p class="m-0 text-center sm:text-left">© 2021–<?php echo date("Y"); ?> HIMTI BINUS University</p>
        </div>
    </div>
</div>