const extenderSections = document.querySelectorAll(".extender-section");

extenderSections.forEach((section) => {
  section.addEventListener("click", () => {
    const span = section.querySelector("span");
    const paragraphs = section.querySelectorAll("p");

    paragraphs.forEach((paragraph) => {
      if (paragraph.style.display === "block") {
        paragraph.style.display = "none";
        span.innerText = "+";
      } else {
        paragraph.style.display = "block";
        span.innerText = "-";
      }
    });
  });
});

// Get all the tab links
const tabLinks = document.querySelectorAll('.tab-main a');

// Get all the tab content sections
const tabContents = document.querySelectorAll('.tab-box1');

// Add a click event listener to each tab link
tabLinks.forEach((tabLink) => {
    tabLink.addEventListener('click', (e) => {
        e.preventDefault(); // Prevent the default link behavior

        // Hide all tab content sections
        tabContents.forEach((tabContent) => {
            tabContent.style.display = 'none';
        });

        // Show the corresponding tab content section
        const dataRel = tabLink.getAttribute('data-rel');
        const correspondingTab = document.getElementById(dataRel);
        if (correspondingTab) {
            correspondingTab.style.display = 'block';
        }
    });
});


// Select all image containers with the class "image-container" within the "web" section
const imageContainers = document.querySelectorAll(
    ".img.filter.web .image-container"
);

// Loop through each image container and add event listeners
imageContainers.forEach((container) => {
    const image = container.querySelector("img");

    container.addEventListener("mouseover", () => {
        const imageHeight = image.offsetHeight;
        const containerHeight = container.offsetHeight;

        if (imageHeight > containerHeight) {
            image.style.transition = "transform 5s ease-in-out 0s";
            image.style.transform = `translateY(-${
                imageHeight - containerHeight
            }px)`;
        }
    });

    container.addEventListener("mouseout", () => {
        image.style.transition = "transform 5s ease-in-out 0s";
        image.style.transform = "translateY(0)";
    });
});

$(document).ready(function () {
    // Set the "web" category button as active by default
    $(".filter-button[data-filter='web']").addClass("active");

    // Show only the "web" items by default
    $(".filter").not(".web").hide();
    $(".filter.web").show();

    $(".filter-button").click(function () {
        var value = $(this).attr("data-filter");

        // Remove the active class from all buttons and add it to the clicked button
        $(".filter-button").removeClass("active");
        $(this).addClass("active");

        if (value == "all") {
            $(".filter").show("1000");
        } else {
            $(".filter")
                .not("." + value)
                .hide("3000");
            $(".filter")
                .filter("." + value)
                .show("3000");
        }
    });

    $(".testwraper").slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 500,
        fade: true,
        infinite: true,
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        cssEase: "linear",
    });
    $(".partnerslider").slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        dots: false,
        prevArrow: false,
        nextArrow: false,
        autoplaySpeed: true,
        speed: 1500,
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
        ],
    });
});
$(window).on("scroll", function() {
    if($(window).scrollTop() > 100) {
        $("header").addClass("active");
    } else {
       $("header").removeClass("active");
    }
});
