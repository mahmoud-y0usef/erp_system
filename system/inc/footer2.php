<script src="assets/js/jquery1-3.4.1.min.js"></script>

<script src="assets/js/popper1.min.js"></script>

<script src="assets/js/bootstrap1.min.js"></script>

<script src="assets/js/metisMenu.js"></script>

<script src="assets/vendors/count_up/jquery.waypoints.min.js"></script>

<script src="assets/vendors/chartlist/Chart.min.js"></script>

<script src="assets/vendors/count_up/jquery.counterup.min.js"></script>

<script src="assets/vendors/swiper_slider/js/swiper.min.js"></script>

<script src="assets/vendors/niceselect/js/jquery.nice-select.min.js"></script>

<script src="assets/vendors/owl_carousel/js/owl.carousel.min.js"></script>

<script src="assets/vendors/gijgo/gijgo.min.js"></script>

<script src="assets/vendors/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/vendors/datatable/js/dataTables.responsive.min.js"></script>
<script src="assets/vendors/datatable/js/dataTables.buttons.min.js"></script>
<script src="assets/vendors/datatable/js/buttons.flash.min.js"></script>
<script src="assets/vendors/datatable/js/jszip.min.js"></script>
<script src="assets/vendors/datatable/js/pdfmake.min.js"></script>
<script src="assets/vendors/datatable/js/vfs_fonts.js"></script>
<script src="assets/vendors/datatable/js/buttons.html5.min.js"></script>
<script src="assets/vendors/datatable/js/buttons.print.min.js"></script>
<script src="assets/js/chart.min.js"></script>

<script src="assets/vendors/progressbar/jquery.barfiller.js"></script>

<script src="assets/vendors/tagsinput/tagsinput.js"></script>

<script src="assets/vendors/text_editor/summernote-bs4.js"></script>
<script src="assets/vendors/apex_chart/apexcharts.js"></script>

<script src="assets/js/custom.js"></script>

<script src="assets/js/active_chart.js"></script>
<script src="assets/vendors/apex_chart/radial_active.js"></script>
<script src="assets/vendors/apex_chart/stackbar.js"></script>
<script src="assets/vendors/apex_chart/area_chart.js"></script>

<script src="assets/vendors/apex_chart/bar_active_1.js"></script>
<script src="assets/vendors/chartjs/chartjs_active.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(function () {
        $(".inner ul").hide(); // Initially hide all UL elements
        $(".inner a").click(function (e) {
            e.preventDefault(); // Prevent the default behavior of anchor tags

            var $parent = $(this).parent(); // Get the parent .inner element
            var $ul = $parent.find("ul"); // Get the UL element within the clicked .inner element

            // Close all UL elements except the one within the clicked .inner element
            $(".inner ul").not($ul).hide();
            // Toggle the visibility of the UL element within the clicked .inner element
            $ul.show();
        });

        $(".btn-close").click(function () {

            $('.modal').hide();
            $('.modal-backdrop').remove();
            $('body').removeClass('modal-open');
        });

        $active = false;
        $('#sidebar_menu').hide();
        $('.managers').click(function () {
            if ($active == false) {
                $('#sidebar_menu').show();
                $active = true;
            } else {
                $('#sidebar_menu').hide();
                $active = false;
            }


        })

        $('.top-menu').click(function () {
            $(this).find('.dropdown-toggle').toggleClass('arrow-left');
        });



    });

    function validateForm() {
        var employeeName = document.getElementById("employeeName").value;
        var jobTitle = document.getElementById("jobTitle").value;
        var serviceOption = document.getElementById("option").value;

        if (employeeName.trim() == "" || jobTitle.trim() == "" || fileInput.trim() == "" || serviceOption == "إختر خدمة") {
            alert("يرجى تعبئة جميع الحقول واختيار الخدمة المطلوبة.");
            return false;
        }

        window.location.href = 'notify.html';
        localStorage.setItem('name', employeeName);

    }

    $('.dropdown-submenu a.test').on("click", function (e) {
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
    });



    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");
    let bar = document.querySelector(".nav_list");
    let namejobs = document.querySelector(".name_job");
    // التعامل مع النقر على زر الشريط الجانبي
    btn.onclick = function () {
        sidebar.classList.toggle("active");
        namejobs.classList.toggle("active");
        closeAllDropdowns();
    }
    
    // التعامل مع النقر على الشريط الجانبي
    bar.onclick = function () {
        sidebar.classList.add("active");
        namejobs.classList.add("active");
    }

    // دالة لإغلاق جميع القوائم المنسدلة
    function closeAllDropdowns() {
        let dropdowns = document.querySelectorAll(".toggle-menu.active");
        dropdowns.forEach(function (dropdown) {
            dropdown.classList.remove("active");
        });
    }




</script>
</body>

</html>