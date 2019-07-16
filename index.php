<!DOCTYPE html>
<html>

<head>
    <title>NetGain TEST</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
</head>

<body>
    <!-- <?php 
/*** DO NOT DELETE - NEEDED FOR TASK #2 ***/
	class serviceBlock{
	    private $words = array('Lorem ','ipsum ','dolor ','sit ','amet ','consectetur ','adipiscing ','elit ');

	    public function generateTitle($length = 3) {
         $title = "";
         for($i = 0; $i < $length; $i++){
            $title .= $this->words[(mt_rand(0,sizeof($this->words) - 1))];
            
         }	       
         return $title; 
        }
    }

    $serviceBlock = new serviceBlock;
?> -->
    <!----- PUT YOUR LAYOUT CODE BELOW ---->
    <!-- Special banner before navigation bar starts here -->
    <div class="container">
        <header>
            <section class="d-flex bd-highlight">
                <div class="p-2 w-100 bd-highlight">
                    <h1 class="head float-left">ACME</h1>
                    <div class="logoText">
                        <p>Better</p>
                        <p>Hearing Clinic</p>
                    </div>
                </div>
                <div class="p-4 flex-shrink-0 bd-highlight">
                    <div class="justify-content-end">
                        <p class="serving">Serving You City and Surrounding Areas for 20 Years</p>
                    </div>
                    <div class="justify-content-end">
                        <img src="assets/phone_icon.png" class="phone float-left" />
                        <h2 class="tel">705-555-5555</h2>
                    </div>
                </div>
            </section>
        </header>
    </div>
    <!-- Special banner before navigation bar ends here -->
    <!-- navigation bar starts here -->
    <nav class="navbar navbar-expand-lg shadow p-3 mb-5 rounded">
        <div class="container justify-content-end">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" href="#">Menu1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Menu2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Menu3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Menu4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Menu5</a>
                </li>
            </ul>
            <button type="button" class="btn btn-primary">Online Hearing Check</button>
            <button type="button" class="btn btn-primary">Book Appointment</button>
        </div>
    </nav>
    <!-- navigation bar ends here -->
    <!-- main starts here -->
    <main class="container justify-content-center">
        <h2>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
            dolore magna
            aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
            lobortis nisl ut aliquip ex ea
            commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
            vel illum dolore eu
        </p>
        <!-- Three cards with similar size start here(size can change to due to dynamic changes in each block) -->
        <aside class="row">
            <div class="col-sm-4">
                <div class="card text-center align-items-center" style="width: 18rem;">
                    <img src="assets/people.png" class="card-image" alt="" width="75px" height="75px">
                    <div class="card-body">
                        <h3 class="card-title"><?= $serviceBlock->generateTitle();?></h3>
                        <p class="card-text left-text">Lorem ipsum dolor sit amet,
                            consectetuer adipiscing elit</p>
                        <a href="#" class="btn btn-primary">Lorem ipsum dolor</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card text-center align-items-center" style="width: 18rem;">
                    <img src="assets/person.png" class="card-image" alt="" width="75px" height="75px">
                    <div class="card-body">
                        <h3 class="card-title center-title"><?= $serviceBlock->generateTitle();?></h3>
                        <p class="card-text">Lorem ipsum dolor sit amet,
                            consectetuer adipiscing elit. Lorem
                            ipsum dolor sit amet, consectetuer
                            adipiscing elit</p>
                        <a href="#" class="btn btn-primary">Lorem ipsum dolor</a>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-sm-4">
                <div class="card text-center align-items-center" style="width: 18rem;">
                    <img src="assets/question.png" class="card-image" alt="" width="75px" height="75px">
                    <div class="card-body">
                        <h3 class="card-title"><?= $serviceBlock->generateTitle();?></h3>
                        <p class="card-text right-text">Lorem ipsum dolor sit amet,
                            consectetuer adipiscing elit. orem
                            ipsum dolor sit </p>
                        <a href="#" class="btn btn-primary">Lorem ipsum dolor</a>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Three cards end here -->
    </main>
    <!-- main content ends here -->
    <!----- LAYOUT CODE END ---->
    <!---- PUT TASK 3 HERE ----->
    <script type="text/javascript">
        // function to change Background color of body
        // Math.random() method returns the double type number 0 or greater than zero
        // on the other hand, Math.floor() returns the double value that is less than or equal to the argument
        function changeBgColor() {
            var red = Math.floor(Math.random() * 256);
            var blue = Math.floor(Math.random() * 256);
            var green = Math.floor(Math.random() * 256);
            document.body.style.background = "rgb(" + red + "," + blue + "," + green + ")";
        }
        // set interval to 10 seconds and show in console if color changes
        window.setInterval(function () {
            console.log("Color changed");
            changeBgColor();
        }, 10000);
    </script>
</body>

</html>