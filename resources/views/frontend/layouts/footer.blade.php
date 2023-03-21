 <!-- ======= Footer ======= -->
 <footer id="footer">

     <div class="footer-top">
         <div class="container">
             <div class="row">

                 <div class="col-lg-4 col-md-6 footer-contact">
                     <h3>Fishtail Overseas</h3>
                     <p>
                         Samakhusi-10<br>
                         Tokha, Kathmandu<br>
                         Nepal<br><br>
                         <strong>Phone:</strong> +977 01-4386382, 01-4385664<br>
                         <strong>Email:</strong> info@fishtailjobs.com<br>
                     </p>
                 </div>

                 <div class="col-lg-4 col-md-6 footer-links">
                     <h4>Useful Links</h4>
                     <ul>
                         <li><i class="bx bx-chevron-right"></i> <a href="https://my.nepalembassy.gov.np/"
                                 target="_blank">Embassy of Nepal, Malaysia</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="https://ae.nepalembassy.gov.np/"
                                 target="_blank">Embassy of Nepal, Abu Dhabi</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="https://qa.nepalembassy.gov.np/"
                                 target="_blank">Embassy of Nepal, Qatar</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="https://dofe.gov.np/"
                                 target="_blank">Department of Foreign Employement-DOFE </a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="https://nepalpassport.gov.np/"
                                 target="_blank">Department of Passports</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="https://www.ilo.org/global/lang--en/index.htm"
                                 target="_blank">ILO</a></li>
                     </ul>
                 </div>
                 <div class="col-lg-4 col-md-6 footer-newsletter" style="text-align: justify;">
                     <p>
                         We strive to provide exceptional service by supplying skilled, unskilled, professional, and
                         specialized labor across various industries. Our experienced team is dedicated to
                         providing personalized solutions to help you achieve your business goals. We take pride in our
                         strict adherence to ethical and legal standards and offer competitive rates without
                         compromising on quality. We value your satisfaction and are committed to building long-lasting
                         relationships. Choose us for your employment needs and experience reliable and efficient
                         services.
                     </p>
                 </div>

             </div>
         </div>
     </div>
 </footer><!-- End Footer -->

 <div id="preloader"></div>
 <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
         class="bi bi-arrow-up-short"></i></a>
 {{-- jquery Cdn --}}
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
     integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
     crossorigin="anonymous" referrerpolicy="no-referrer"></script>

 <!-- Vendor JS Files -->
 <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
 <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
 <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
 <script src="assets/vendor/php-email-form/validate.js"></script>
 <script src="assets/js/owl.carousel.min.js"></script>

 <!-- Template Main JS File -->
 <script src="assets/js/main.js"></script>

 {{-- Init Owl Carousel --}}
 <script>
     $('.owl-carousel').owlCarousel({
         margin: 10,
         loop: true,
         autoplay: true,
         autoplayTimeout: 2000,
         autoplayHoverPause: true,
         dots: false,
         //  nav: true,
         //  navText: ["<div class='owl-prev'><i class='bx bx-chevron-left'></i></div>", "<div class='owl-next'><i class='bx bx-chevron-right'></i></div>"],
         responsive: {
             0: {
                 items: 1
             },
             600: {
                 items: 2
             },
             1000: {
                 items: 3
             }
         }
     });
 </script>
 <script>
     function showModal() {
         document.getElementById('addTeamMemberModal').classList.remove('hidden');
         document.getElementsByTagName('html')[0].classList.add('overflow-y-hidden');
     }
 </script>

 </body>

 </html>
