<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Magnaflow Test</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="./styles/style.css">
    </head>
    <body>
        <a name="top"></a>
        <section class="top">
            <header>
                <img class="logo" src="assets/logo.png" alt="logo">
                <nav>
                    <ul class="nav_links">
                        <li><a href="#" class="currentNav">Home</a></li>
                        <li><a href="#">Destination</a></li>
                        <li><a href="#">Near me</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </nav>
                <div class="login">
                <a class="signup" href="#">Sign up</a>
                <a class="signin" href="#"><button>Sign In</button></a>
                </div>
            </header>
            <div class="callToAction">
                <h1>Find Yourself Outside.</h1>
                <p>Book unique camping experiences on over 300,000 campsites, cabins, RV Parks, public parks and more.</p>
                <p><a class="discover" href="#"><button>Discover</button></a></p>
            </div>
            <div class="outsideStuff">
                <div class="outsideThing">
                    <div class="outsideThingImg">
                        <img src="assets/bonfire.png" alt="Camping">
                    </div>
                    <h4>Camping & Day Use</h4>
                    <p>Return to your favorite spot or discover a new one that's right for you.</p>
                </div>
                <div class="outsideThing">
                    <div class="outsideThingImg">
                        <img src="assets/tickets.png" alt="Camping">
                    </div>
                    <h4>Tours & Tickets</h4>
                    <p>Reserve tours and tickets to participate in events.</p>
                </div>
                <div class="outsideThing">
                    <div class="outsideThingImg">
                        <img src="assets/permits.png" alt="Camping">
                    </div>
                    <h4>Permits</h4>
                    <p>Obtain permits for access to high demand locations.</p>
                </div>
                <div class="outsideThing">
                    <div class="outsideThingImg">
                        <img src="assets/fishing.png" alt="Camping">
                    </div>
                    <h4>Recreation Activities</h4>
                    <p>Find the best spots for hunting, fishing & recreational shooting.</p>
                </div>


            </div>

        </section>
        
        <section class="explore">

            <div class="exploreHeader">
                <div class="exploreHeaderImg"><img src="assets/map.png" alt="Explore Destinations & Activities"></div>
                <h1>Explore Destinations & Activities</h1>
            </div>

            <div class="exploreStuff">
                <script src="hipScripts.js"></script>

        <?
            // READ JSON file
            $api_url = 'destinations.json';
            $json_data = file_get_contents($api_url);

            // Decode JSON data into a PHP array
            $response_data = json_decode($json_data);

            // All destination data exists in the "destinations" object
            $destinations = $response_data->destinations;

            foreach($destinations as $destination) {
                $destinationName = $destination->destinationName;
                $destinationImage = $destination->destinationImage;

                echo "
                                <script>
                                    function like".$destinationImage."()
                                    {
                                        var theImgObj = document.getElementById('destinationImage".$destinationImage."');
                                        var currentImg = theImgObj.src;
                                        if(currentImg.includes('empty'))
                                        {
                                           theImgObj.src = 'assets/heart-filled.png';
                                        }
                                        else
                                        {
                                           theImgObj.src = 'assets/heart-empty.png';
                                        }
                                    }

                                </script>
                        <div class=\"exploreThing\">
                         <div class=\"exploreThingImg\">
                                <img src=\"assets/image-K-" . $destinationImage . ".png\" alt=\"" . $destinationName . "\"\>
                                <p class=\"exploreThingPrice\">$35/night</p>
                                <div class=\"exploreThingLike\">
                                    <a href=\"javascript:void(0)\" onclick=\"like" .$destinationImage . "();\" alt=\"Like\">
                                        <!--
                                        <img id=\"destinationImage" . $destinationImage . "\" src=\"assets/heart-empty.png\" onmouseover=\"this.src='assets/heart-filled.png'\" onmouseout=\"this.src='assets/heart-empty.png'\" onclick=\"this.src='assets/heart-filled.png'\">
                                        -->
                                        <img id=\"destinationImage" . $destinationImage . "\" src=\"assets/heart-empty.png\"> 
                                    </a>
                                </div>
                            </div>
                            <h3>" . $destinationName . "</h3>
                            <div class=\"exploreThingDetails\">
                                <p>Book unique camping experiences on over 300,000 campsites.</p>
                                <p class=\"readMore\"><a href=\"#\" alt=\"Read More\"><button>Read More</button></a></p>
                            </div>
                      </div>
                      ";
            }
        ?>
            </div>
            <div class="exploreFooter">
                <p class="viewAllDestinations"><a href="#" alt="View All"><button>View all</button></a>
            </div>

        </section>

        <section class="stayInTouch">
            <div class="stayInTouchContainer">
                <div class="stayInTouchLeft">
                    <h1>Let's Stay in Touch</h1>
                    <p>Get travel planning ideas, helpful tips, and stories from our visitors delivered right to your inbox.</p>
                    <form action="">
                        <input type="email" placeholder="Email Address"><button type="submit" class="submitButton"><span class="submitButtonIcon"><img src="assets/submit.png"></span></button>
                    </form>
                    <div class="emailIcon"><img src="assets/email-icon.png"></div>

                </div>
                <div class="stayInTouchRight">
                    <img src="assets/tent.png">
                </div>

            </div>
    


        </section>

        <footer>
            <div class="footerColumns">
                <div class="hipCampDescription">
                    <h4>Hipcamp is everywhere you want to camp.</h4>
                    <p>Discover unique experiences on ranches, natural preserves, farms, vineyards, and public campgrounds across the U.S. Book tent camping, treehouses, cabins, yurts, primitive backcountry sites, car camping, airstreams, tiny houses, RV camping, glamping tents and more.</p>
                    <h4>Download Our App</h4>
                    <a href="https://apps.apple.com/us/app/hipcamp-camping-rvs-cabins/id1440066037" alt="appStore"><img src="assets/worst-app.png"></a>
                    <a href="https://play.google.com/store/apps/details?id=com.hipcamp.pocketknife" alt="googlePlay"><img src="assets/best-app.png"></a>
                </div>
                <div class="getToKnowUs">
                    <h4>Get to Know Us</h4>
                    <ul>
                        <li>About Us</li>
                        <li>Rules & Reservation Policies</li>
                        <li>Accessibility</li>
                        <li>Media Center</li>
                        <li>Site Map</li>
                    </ul>
                </div>
                <div class="planWithUs">
                    <h4>Plan with Us</h4>
                    <ul>
                        <li>Plan Trip Inspiration</li>
                        <li>Build a Trip</li>
                        <li>Buy a Pass</li> 
                        <li>Enter a Lottery</li>
                    </ul>
                </div>
                <div class="letUsHelpYou">
                    <h4>Let Us Help You</h4>
                    <ul>
                        <li>Your Account</li>
                        <li>Your Reservations</li>
                        <li>Contact Us</li>
                        <li>Help Center</li>
                        <li>Submit Feedback</li>
                    </ul>
                </div>
            </div>

            <div class="copyright">
                <p>&copy; 2020. All rights reserved.</p>
            </div>

            <div class="footerUp">
                <a href="#top"><img src="assets/up.png" alt="Back to Top"></a>
            </div>
        </footer>
    </body>
</html>