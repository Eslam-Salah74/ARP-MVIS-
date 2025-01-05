(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();


    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });
    
    $(document).ready(function () {
        const $dropdown = $(".dropdown"); // Adjust the selector to match your dropdown elements
        const $dropdownToggle = ".dropdown-toggle"; // Replace with your actual dropdown toggle selector
        const $dropdownMenu = ".dropdown-menu"; // Replace with your actual dropdown menu selector
        const showClass = "show"; // Define the class you want to use for showing the dropdown
    

    $(window).on("load resize", function () {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
                function () {
                    const $this = $(this);
                    $this.addClass(showClass);
                    $this.find($dropdownToggle).attr("aria-expanded", "true");
                    $this.find($dropdownMenu).addClass(showClass);
                },
                function () {
                    const $this = $(this);
                    $this.removeClass(showClass);
                    $this.find($dropdownToggle).attr("aria-expanded", "false");
                    $this.find($dropdownMenu).removeClass(showClass);
                }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });
});

    document.querySelector('.navbar-toggler').addEventListener('click', function () {
        var firstCollapse = document.getElementById('navbarSupportedContent');
        var secondCollapse = document.getElementById('secondNavbarCollapse');

        if (firstCollapse.classList.contains('show') || secondCollapse.classList.contains('show')) {
            // If either collapse is shown, hide both
            firstCollapse.classList.remove('show');
            secondCollapse.classList.remove('show');
        } else {
            // If both are hidden, show both
            firstCollapse.classList.add('show');
            secondCollapse.classList.add('show');
        }
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        dots: true,
        loop: true,
        center: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    });


    (function ($) {
        $('.vendor-carousel').owlCarousel({
            loop: true,
            margin: 25,
            rtl: true, // Enable RTL mode
            dots: false,
            autoplay: false,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 1
                },
                768: {
                    items: 1
                },
                992: {
                    items: 1
                }
            }
        });

        // Add event listeners for custom buttons
        $('.btn-prev').on('click', function () {
            $('.vendor-carousel').trigger('prev.owl.carousel');
        });

        $('.btn-next').on('click', function () {
            $('.vendor-carousel').trigger('next.owl.carousel');
        });

    })(jQuery);


})(jQuery);

// ^==============our team section




//! inputs placeholders



//& Function to move the li elements into the sidebar for small screens start



document.addEventListener('DOMContentLoaded', function () {
    flatpickr("#datepicker", {
        // your options here
    });

    flatpickr("#another-datepicker", {
        // your options here
    });

    flatpickr("#another-datepicker-two", {
        // your options here
    });
    flatpickr("#datepicker-in-cat", {
        // your options here
    });
});
function handleDateInput(event) {
    const inputId = event.target.id;

    if (inputId === 'datepicker') {
        // Handle datepicker input
    } else if (inputId === 'another-datepicker') {
        // Handle another datepicker input
    }
    else if (inputId === 'another-datepicker-two') {
        // Handle another datepicker input
    }
    else if (inputId === 'datepicker-in-cat') {
        // Handle another datepicker input
    }
}
// Initialize Flatpickr
flatpickr("#datepicker-in-cat", {
    // Options for Flatpickr
    dateFormat: "Y-m-d",
    onChange: function (selectedDates, dateStr, instance) {
        handleDateInput(selectedDates, dateStr, instance);
    }
});

// Handle date input changes
function handleDateInput(selectedDates, dateStr, instance) {
    console.log("Selected Date:", dateStr);
    // Add custom logic to handle the date input
}
$(".custom-carousel").owlCarousel({
    autoWidth: true,
    loop: true,
    rtl: true, // Enable RTL mode
    dots: true,
    nav: true, // Enable navigation buttons (Prev/Next)
    navText: ['<i class="fa fa-chevron-left nxt-slide"></i>', '<i class="fa fa-chevron-right  nxt-slide"></i>'], // Custom icons for Prev/Next
});

$(document).ready(function () {
    $(".custom-carousel .item").click(function () {
        $(".custom-carousel .item").not($(this)).removeClass("a");
        $(this).toggleClass("a");
    });
});


document.querySelectorAll('.custom-popUpOpen').forEach(function (button) {
    button.addEventListener('click', function (event) {
        event.preventDefault();
        const link = button.getAttribute('data-link');
        document.getElementById('myInput').value = link;

        // Set up share links
        document.querySelector('.share-icon-ct .bi-facebook').parentNode.href = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(link)}`;
        document.querySelector('.share-icon-ct .bi-whatsapp').parentNode.href = `https://api.whatsapp.com/send?text=${encodeURIComponent(link)}`;
        document.querySelector('.share-icon-ct .bi-instagram').parentNode.href = `https://www.instagram.com/?url=${encodeURIComponent(link)}`;
        document.querySelector('.share-icon-ct .twit').parentNode.href = `https://twitter.com/intent/tweet?url=${encodeURIComponent(link)}`;
        document.querySelector('.share-icon-ct .bi-messenger').parentNode.href = `https://www.messenger.com/t/?link=${encodeURIComponent(link)}`;

        document.getElementById('custom-popup').style.display = 'block'; // Show popup
    });
});

function closeCustomPopup() {
    document.getElementById('custom-popup').style.display = 'none'; // Hide popup
}

function copy() {
    const copyText = document.getElementById('myInput');
    copyText.select();
    document.execCommand('copy');
    alert('Link copied to clipboard!');
}



function copy() {
    // Get the text field
    var copyText = document.getElementById("myInput");

    // Select the text field
    copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices

    // Copy the text inside the text field
    navigator.clipboard.writeText(copyText.value);

    // Alert the copied text
    // alert("Copied the text: " + copyText.value);
}

//   $(window).scroll(function () {
//     if ($(this).scrollTop() > 45) {
//         $('.navbar').addClass('stick-top shadow-sm');
//     } else {
//         $('.navbar').removeClass('stick-top shadow-sm');
//     }
// });
