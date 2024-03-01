<script>
var prevScrollPos = window.pageYOffset;

window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;

    if (prevScrollPos > currentScrollPos) {
        document.getElementById("site-header").style.transform = "translateY(0)";
    } else {
        document.getElementById("site-header").style.transform = "translateY(-100%)";
    }

    prevScrollPos = currentScrollPos;
}


    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    </body>

    </html>