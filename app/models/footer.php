<?php
require_once 'coming-soon-modal.php';
?>
<!-- footer -->
<section id="footer" class="pb-2">
    <div class="rounded container-xl my-footer">
        <footer class="pt-5">
            <div class="row justify-content-center text-center">
                <!-- Our Pages Section -->
                <div class="col-6 col-md-2 mb-3">
                    <h5>Our Pages</h5>
                    <ul class="nav nav-pills nav-fill flex-column">
                        <li class="nav-item mb-2"><a href="homepage.php"
                                class="active nav-link p-0 text-body-secondary" aria-current="page">Home</a></li>
                        <li class="nav-item mb-2"><a href="about.php"
                                class="nav-link p-0 text-body-secondary">About</a></li>
                        <li class="nav-item mb-2"><a href="fellowships.php"
                                class="nav-link p-0 text-body-secondary">Fellowships & Events</a></li>
                        <li class="nav-item mb-2"><a href="ministries.php"
                                class="nav-link p-0 text-body-secondary">Ministries</a></li>
                        <li class="nav-item mb-2"><a href="eveteams.php"
                                class="nav-link p-0 text-body-secondary">Evangelistic Teams</a></li>
                        <li class="nav-item mb-2"><a href="leadership.php"
                                class="nav-link p-0 text-body-secondary">Leadership</a></li>
                        <li class="nav-item mb-2"><a href="#"
                                class="nav-link p-0 text-body-secondary">Noticeboard</a></li>
                    </ul>
                </div>

                <!-- Resources Section -->
                <div class="col-6 col-md-2 mb-3">
                    <h5 id="resources">Resources</h5>
                    <ul class="nav flex-column nav-pills nav-fill">
                        <li class="nav-item mb-2"><a href="blogs.php"
                                class="nav-link p-0 text-body-secondary">Blogs</a></li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-body-secondary btn-readmore" data-bs-toggle="modal"
                                data-bs-target="#comingSoonModal">E-Library</a>
                        </li>
                        <li class="nav-item mb-2"><a href="gallery.php"
                                class="nav-link p-0 text-body-secondary">Gallery</a></li>
                        <li class="nav-item mb-2"><a href="sermons.php"
                                class="nav-link p-0 text-body-secondary">Sermons & Notes</a></li>
                    </ul>
                </div>

                <!-- Reach Out Section -->
                <div class="col-6 col-md-2 mb-3">
                    <h5 id="reachout">Reach Out</h5>
                    <ul class="nav flex-column nav-pills nav-fill">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary" data-bs-toggle="modal"
                        data-bs-target="#comingSoonModal">Need Jesus?</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary" data-bs-toggle="modal"
                        data-bs-target="#comingSoonModal">Prayer Request</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary" data-bs-toggle="modal"
                        data-bs-target="#comingSoonModal">Get Support</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary" data-bs-toggle="modal"
                        data-bs-target="#comingSoonModal">Online Giving</a></li>
                    </ul>
                </div>

                <!-- Follow Us Section -->
                <div class="col-6 col-md-2 mb-3">
                    <h5>Follow Us</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <a class="nav-link p-0" href="https://www.facebook.com/Masenocu/" target="_blank">
                                <svg class="bi text-body-primary" width="20" height="20">
                                    <use xlink:href="assets/icons.svg#facebook"></use>
                                </svg> Facebook
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="nav-link p-0" href="https://whatsapp.com/channel/0029VaCqwFSIt5ryXrSNeN3w"
                                target="_blank">
                                <svg class="bi text-body-secondary" width="20" height="20">
                                    <use xlink:href="assets/icons.svg#whatsapp"></use>
                                </svg> WhatsApp
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="nav-link p-0" href="http://www.youtube.com/@maseno_cu" target="_blank">
                                <svg class="bi text-body-secondary" width="20" height="20">
                                    <use xlink:href="assets/icons.svg#youtube"></use>
                                </svg> YouTube
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="nav-link p-0" href="https://www.instagram.com/maseno_cu/" target="_blank">
                                <svg class="bi text-body-secondary" width="20" height="20">
                                    <use xlink:href="assets/icons.svg#instagram"></use>
                                </svg> Instagram
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="nav-link p-0" href="https://twitter.com/Maseno_CU" target="_blank">
                                <svg class="bi text-body-secondary" width="20" height="20">
                                    <use xlink:href="assets/icons.svg#twitter-x"></use>
                                </svg> X
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Newsletter Section -->
                <div class="col-md-4 mb-3">
                    <form>
                        <h5>Subscribe to our newsletter</h5>
                        <p class="text-body-secondary">Stay up to date with the latest features by joining our newsletter.</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Footer Bottom Section -->
            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 mt-4 mb-0 border-top">
                <p>© 2024 MUCU, Inc. We love our members!</p>
                <ul class="list-unstyled d-flex">
                    <li class="nav-item"><a href="#" class="nav-link p-0 text-body-secondary">Privacy Policy</a></li>
                    <li class="nav-item mx-4"><a href="#" class="nav-link p-0 text-body-secondary">Terms of Service</a></li>
                </ul>
            </div>
        </footer>
    </div>
</section>

<!-- Coming Soon Modal -->
<div class="modal fade" id="comingSoonModal" tabindex="-1" aria-labelledby="comingSoonModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="comingSoonModalLabel">Coming Soon</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                The E-Library is currently under development and will be available soon. Stay tuned!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and Popper.js for Modal functionality -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
