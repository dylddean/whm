<?php
    session_start();

    // echo $_SESSION["useruid"];
    // die;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>

    </title>
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->

    <link rel="icon" href="house1.png" type="image/icon type">


    <meta charset="UTF-8">
    <title>Search Box Design</title>
    <!-- <link rel="stylesheet" href="rent1.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
</head>

<body class="leading-normal tracking-normal" style="font-family: 'Source Sans Pro', sans-serif;">

    <div class="main_wrapper">

        <!-- Header Start-->
        <div class="main-header">
            <div class="container">
                <div class="header-wrapper">
                    <header>
                        <div class="menu-main">
                            <a class="toggleColour no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="index.php">
                                WheneverHome
                            </a>
                        </div>
                        <div class="menu">
                            <ul class="menu_inner">
                              
                                <?php
                                if (isset($_SESSION["userid"])) {
                                    echo "<li><a href='buy.php'>Finance</a></li>";
                                    echo "<li><a href='rent.php'>Rent</a></li>";
                                    echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
                                    echo "<li><a href='dash.php'>Profile Page</a></li>";
                                  }
                                  else {
                                    echo "<li class='sign'><a span href='login.php'>Sign in</a></span></li>";
                                    echo "<li class='sign'><a span href='signup.php'>Sign Up</a></span></li>";
                                }
                                ?>
                            
                            </ul>
                            <div id="toggle" class="toggle">
                                <div class="one"></div>
                                <div class="two"></div>
                                <div class="three"></div>
                            </div>
                        </div>
                    </header>
                </div>
            </div>
        </div>
        <!-- Header Close -->

        <!-- Main-contain Start -->
        <div class="main-contain">

            <!-- How it Works Section Start -->
            <div class="how_its_work_section">
                <div class="container">
                    <div class="how_its_work_inner_section">
                        <div class="common_title text-center">
                            <h2>Welcome back</h2>
                        </div>
                        <div class="how_its_work_info">
                            <div class="row">
                                <div class="col-sm-6 work_details">
                                    <div class="work_details">
                                        <h3>Make a Payment</h3>
                                        <p>Pay Rent or Mortgage.</p>
                                        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="pk_test_51Ml7I8SATVmSqdDf0y1DUOBEr4RUrFgZZG3hNXpw8WAnYxTcNnxzqEU0G7O5F1Ht5vqM55JCH9uncv3ylNYBvWJr007xivDKCu" data-amount="10000" data-name="Wheneverhome" data-description="Make a payment" \
                                    data-image="house1.png" data-currency="usd" data-email="info@wheneverhome">
                                    </script>
                                      
                                    </div>
                                </div>
                                <div class="col-sm-6 work_details_img">
                                    <div class="work_img">
                                        <img src="pay1.png" alt="work_img">
                                    </div>
                                </div>
                            </div>
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- How it Works Section End -->
        </div>
        <!-- Main-contain End -->

        <!-- Footer Start -->
        <div class="ready_to_find_svg">
            <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
                        <g class="wave" fill="#f8fafc">
                            <path d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"></path>
                        </g>
                        <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
                            <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
                                <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
                                <path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path>
                                <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
            </div>
        <div class="footer_wrapper">
            <div class="container">
                <div class="footer_inner">
                    <div class="footer_row">
                        <div class="footer_col">
                            <div class="footer_info">
                               
                                <ul>
                                    <li>
                                        <a href="contact.php">Contact</a>
                                    </li>
                                
                                </ul>
                            </div>
                        </div>
                        <div class="footer_col">
                            <div class="footer_info">
                            <ul>
                                    <li>
                                        <a href="https://www.facebook.com/WheneverHome">Facebook</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="footer_col">
                            <div class="footer_info">
                            <ul>
                                    <li>
                                        <a href="https://www.linkedin.com/company/wheneverhome">Linkedin</a>
                                    </li>
                            <ul>
                            
                            </div>
                        </div>
                        <div class="footer_col">
                            <div class="footer_info">
                                <h3></h3>
                                <ul>
                                <li>
                                        <a href="https://twitter.com/WheneverHome">Twitter</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./custom.js"></script>
    <script>

          // $('.stripe-button-el').hide();
        $(".stripe-button-el").html("Fullfill Payment");
        $(".stripe-button-el").addClass("common_btn black_btn paybtn");
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, navMenu)) {
                    // click on the link
                    if (navMenuDiv.classList.contains("hidden")) {
                        navMenuDiv.classList.remove("hidden");
                    } else {
                        navMenuDiv.classList.add("hidden");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    navMenuDiv.classList.add("hidden");
                }
            }
        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }
    </script>
</body>

</html>