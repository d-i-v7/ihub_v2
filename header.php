<div class="my-con">
    <div class="header">
        <?php
        include "admin/conn.php";
        ?>
        <div class="logo">
            <?php
            $read_logo1 = mysqli_query($conn, "SELECT * FROM logo WHERE id=1");
            if (mysqli_num_rows($read_logo1) > 0) {
                while ($row1 = mysqli_fetch_assoc($read_logo1)) {
                    $logo1 = $row1['image'];
                }
            }

            $read_logo2 = mysqli_query($conn, "SELECT * FROM logo WHERE id=2");
            if (mysqli_num_rows($read_logo2) > 0) {
                while ($row2 = mysqli_fetch_assoc($read_logo2)) {
                    $logo2 = $row2['image'];
                }
            }

            $read_logo3 = mysqli_query($conn, "SELECT * FROM logo WHERE id=3");
            if (mysqli_num_rows($read_logo3) > 0) {
                while ($row3 = mysqli_fetch_assoc($read_logo3)) {
                    $logo3 = $row3['image'];
            ?>
                    <a class="dark-logo" href="./"><img src="<?php echo $logo1; ?>" alt></a>
                    <a class="l-s-logo" href="./"><img src="<?php echo $logo2; ?>" alt></a>
                    <a class="l-logo" href="./"><img src="<?php echo $logo3; ?>" alt></a>
        </div>
        <nav>
            <ul>
                <li class="li-active"><a href="./"><i class="fas fa-house"></i>&nbsp; Home</a></li>
                <li  class="sub-btn"><a id="sub-btn" href="#"><i class="fas fa-grip"></i>&nbsp; About&nbsp;<i class="fas fa-chevron-down"></i></a>
           <div id="sub-menu" class="sub-menu">
           <span onclick="document.location=('about-us');"><i class="fas fa-id-card"></i>&nbsp;About-Us</span>
           <span onclick="document.location=('our-team');"><i class="fas fa-people-group"></i>&nbsp;Our Team</span>
           <span onclick="document.location=('our-partners');"><i class="fas fa-sitemap"></i>&nbsp;Our Partners</span>
           <span onclick="document.location=('our-blog');"><i class="fas fa-book"></i>&nbsp;Our Blogs</span>
           </div>
            </li>
                <li><a href="our-programs"><i class="fas fa-gears"></i>&nbsp;Our Programs</a></li>
            <script>
document.addEventListener("DOMContentLoaded", function (e) {
    var subBtn = document.getElementById("sub-btn");
    var subMenu = document.getElementById("sub-menu");
    var icon = document.getElementById("icon");
    

    subBtn.addEventListener("click", function (e) {
        e.preventDefault();  if (subMenu) {
            subMenu.classList.toggle("show");
            if (icon) {
                icon.classList.toggle("rotate");
            }
        }
    });

    document.addEventListener("click", function (e) {
        var target = e.target;

        // Check if the clicked element is not the submenu or the button
        if (subMenu && target !== subBtn && !subMenu.contains(target)) {
            subMenu.classList.remove("show");
            if (icon) {
                icon.classList.remove("rotate");
            }
        }
    });
});
</script>
            <style>
                 .rotate {
            transform: rotate(180deg) !important;
            transition: transform 0.3s ease !important;
        }
                .sub-menu
                {
                    position: absolute;
                    display: none;
                    flex-direction: column;
                    justify-content: start;
                    /* width: 40vh; */
                    padding:40px 25px;
                    border-radius: 7px;
                    height: auto;
                    background-color: #fff;
                    top:90px;
                    box-shadow: -1px 2px 5px rgba(0, 0, 0, 0.28);
                    z-index: 9999;
                   
                }
                .sub-menu.show
                {
                    display: flex !important;
                }
                .sub-menu span
                {
                    color: var(--p-color);
                    cursor: pointer;
                    transition: 0.4s;
                    margin:10px 0px;
                    
                }
                .sub-menu span:hover
                {
                    color:var(--s-color);
                }
            </style>
                <li><a href="  contact-us"><i class="fas fa-phone"></i>&nbsp;Contact Us</a></li>
                <li><button id="light-mode"><i class="fas fa-sun"></i>&nbsp; <span> Light Mode</span></button></li>
            </ul>
        </nav>
    <?php
                }
            }
    ?>
    <button class="menu-btn"><i class="fas fa-bars"></i></button>
    </div>
</div>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Get the current page path
    var currentPage = window.location.pathname;

    // Select all menu items
    var menuItems = document.querySelectorAll(".my-con nav ul li");

    // Loop through each menu item
    menuItems.forEach(function (menuItem) {
        // Check if the menu item has an anchor link
        var anchor = menuItem.querySelector("a");

        if (anchor) {
            var menuItemLink = anchor.getAttribute("href");

            // Check if the current menu item corresponds to the active page
            if (currentPage.includes(menuItemLink)) {
                // Add the "active" class to the menu item
                menuItem.classList.add("active");
            }
        }
    });
});

</script>

