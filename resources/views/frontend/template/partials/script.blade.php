<script src="{{ asset('assets/backend/js/plugins/popper.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/plugins/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/config.js') }}"></script>
<script src="{{ asset('assets/backend/js/pcoded.js') }}"></script>
<script src="{{ asset('assets/backend/js/plugins/feather.min.js') }}"></script>

<script src="{{ asset('assets/backend/js/plugins/wow.min.js') }}"></script>
<script>
    // Start [ Menu hide/show on scroll ]
    let ost = 0;
    document.addEventListener('scroll', function () {
      let cOst = document.documentElement.scrollTop;
      if (cOst == 0) {
        document.querySelector(".navbar").classList.add("top-nav-collapse");
      } else if (cOst > ost) {
        document.querySelector(".navbar").classList.add("top-nav-collapse");
        document.querySelector(".navbar").classList.remove("default");
      } else {
        document.querySelector(".navbar").classList.add("default");
        document.querySelector(".navbar").classList.remove("top-nav-collapse");
      }
      ost = cOst;
    });
    // End [ Menu hide/show on scroll ]
    var wow = new WOW({
      animateClass: 'animated',
    });
    wow.init();
</script>
<script src="{{ asset('assets/backend/js/customizer.js') }}"></script>