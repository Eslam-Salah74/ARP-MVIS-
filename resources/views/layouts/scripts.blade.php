 <!--! scripts for the nationality dropdown -->

 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


 <!--! scripts for the nationality dropdown end-->

 <!-- JavaScript Libraries -->
 <script src="{{asset('assets/js/bootstrap.bundle.min.js') }}"></script>
 <!-- <script src="assets/js/bootstrap.min.js"></script> -->
 <script src="{{asset('assets/lib/wow/wow.min.js') }}"></script>
 <script src="{{asset('assets/lib/easing/easing.min.js') }}"></script>
 <script src="{{asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
 <script src="{{asset('assets/lib/counterup/counterup.min.js') }}"></script>
 <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
 <script src="{{asset('assets/js/bootstrap.js') }}"></script>
 <!-- Template Javascript -->
 <script src="{{asset('script.js') }}"></script>
 <script src="{{asset('assets/js/main.js') }}"></script>


 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>


 @if ($errors->any())
     <script>
         window.onload = function() {
             @foreach ($errors->all() as $error)
                 Swal.fire({
                     icon: 'error',
                     title: 'Oops...',
                     text: "{{ $error }}",
                 });
             @endforeach
         };
     </script>
 @endif

 @if (session('success'))
     <script>
         window.onload = function() {
             Swal.fire({
                 icon: 'success',
                 title: 'نجاح',
                 text: "{{ session('success') }}",
             });
         };
     </script>
 @endif
