<!--Div where the WhatsApp will be rendered-->
<div id="myDiv"></div>
<script type="text/javascript">
$(function () {
    $('#myDiv').floatingWhatsApp({
    phone: '6285102113711',
    size: '70px',
    position: "right"
    });
});
</script>

<!-- Footer Start -->
<div class="container-fluid bg-dark text-body footer mt-0 pt-0 px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-0 mb-md-0">
                    <p class="mb-0">Copyright &copy; <?= date("Y")?> : <a href="{{ route('home.publik') }}"><b>Raihan Interior</b></a> - All Rights Reserved</p>
                </div>
                {{-- <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                    <br> Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
