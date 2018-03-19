<!DOCTYPE html>
<html lang="en">

  <head>

    <script type="text/JavaScript">

    function Next() {

      var myAnchor = document.getElementById("$quotient1");

    }

    </script>

    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO -->
    <meta name="description" content="150 words">
    <meta name="author" content="uipasta">
    <meta name="url" content="http://www.yourdomainname.com">
    <meta name="copyright" content="company name">
    <meta name="robots" content="index,follow">


    <title>DevBlog - Personal Blog Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="images/favicon/apple-touch-icon.png">

    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="css/plugin.css">

    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">


    <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


  </head>

 <body>

   <?php


      $number = $_POST['number'];


       $binString = base_convert($number,10,2);
       $remainder = (int)$number % 2;
       $remainder1 = (int)$quotient3 %2;
       $quotient = (int)($number/2)

   ?>



	 <!-- Preloader Start -->
     <div class="preloader">
	   <div class="rounder"></div>
      </div>
      <!-- Preloader End -->




    <div id="main">
        <div class="container">
            <div class="row">







                 <!-- Contact (Right Sidebar) Start -->
                 <div class="col-md-12">
                    <div class="col-md-12 page-body">
                    	<div class="row">



                            <div class="sub-title">
                           		<h2>Decimal to Binary</h2>
                             </div>
                            <div class="col-md-12 content-page">
                              <div class="col-md-12 blog-post">
                                <div class="row margin-top-30">
                                  <div class="col-md-12">

                                  <div class="row">
                                   <form action="dd.php" method="POST">
					                <div class="col-sm-6">
						              <div class="form-group">
						               <input type="text" name="number" class="form-control" placeholder="Number Decimal">
						              </div>
                                     </div>

                                     </div>

                                    <div class="col-sm-6">
					                  <div class="form-group">
					                 <textarea class="textarea-message form-control" placeholder="Your Binary" rows="6"><?php echo "$binString"; ?></textarea>
						            </div>
                                   </div>


                                <div class="text-center">
		                         <button type="submit"  name="submit" class="load-more-button" >طبق </button>

	                             </div>

                                                              <table class="table">
                                                                  <thead>

                                                                    <tr>


                                                                    <th>Division by 2 </th>
                                                                    <th> Quotient</th>
                                                                    <th> Remainder</th>

                                                                    </tr>
                                                                  </thead>
                                                                  <tbody>
                                                                    <tr>


                                                                    <td><?php echo $bin_nr = $_POST['number']; ?>/2</td>
                                                                   <td><?php echo (int)$quotient ?></td>
                                                                   <td><?php echo $remainder ?></td>
                                                                    </tr>
                                                                    <tr class="active">
                                                                    <td><?php echo $quotient ?>/2</td>
                                                                    <td><?php echo (int)$quotient1 = $quotient/2 ?></td>
                                                                    <td><?php echo $remainder1 = (int)$quotient %2; ?></td>

                                                                    </tr>
                                                                    <tr class="active">
                                                                    <td><?php echo $quotient1 ?>/2</td>
                                                                    <td><?php echo (int)$quotient2 = (int)$quotient1/2 ?></td>
                                                                    <td><?php echo $remainder2 = (int)$quotient1 %2; ?></td>
                                                                    </tr>

                                                                    <tr class="active">
                                                                    <td><?php echo (int)$quotient2 ?>/2</td>
                                                                    <td><?php echo (int)$quotient3 = (int)$quotient2/2 ?></td>
                                                                    <td><?php echo $remainder3 = (int)$quotient2 %2; ?></td>
                                                                    </tr>
                                                                    <tr class="active">
                                                                    <td><?php echo (int)$quotient3 ?>/2</td>
                                                                    <td><?php echo (int)$quotient4 = (int)$quotient3/2 ?></td>
                                                                    <td><?php echo $remainder4 = (int)$quotient3 %2; ?></td>
                                                                    </tr>
                                                                    <tr class="active">
                                                                    <td><?php echo (int)$quotient4 ?>/2</td>
                                                                    <td><?php echo (int)$quotient5 = (int)$quotient4/2 ?></td>
                                                                    <td><?php echo $remainder5 = (int)$quotient4 %2; ?></td>

                                                                    </tr>
                                                                    <tr class="active">
                                                                    <td><?php echo (int)$quotient5 ?>/2</td>
                                                                    <td><?php echo (int)$quotient6 = (int)$quotient5/2 ?></td>
                                                                    <td><?php echo $remainder6 = (int)$quotient5 %2; ?></td>

                                                                    </tr>
                                                                    <tr class="active">
                                                                    <td><?php echo (int)$quotient6 ?>/2</td>
                                                                    <td><?php echo (int)$quotient7 = (int)$quotient6/2 ?></td>
                                                                    <td><?php echo $remainder7 = (int)$quotient7 %2; ?></td>

                                                                    </tr>


                                                                  </tbody>
                                                                </table>

                                 </form>
                                </div>
                              </div>
                             </div>
                             <!-- Contact Me End -->


                         </div>
                        </div>
                       </div>




                         </div>


                         <!-- new -->
                         <!-- Preloader Start -->
      </div>

    </div>


                               <!-- Footer Start -->
                               <div class="col-md-12 page-body margin-top-50 footer">
                                  <footer>
                                  <ul class="menu-link">
                                       <li><a href="index.php">Home</a></li>
                                    </ul>

                                  <p>© ICS 252 - UOH - Abdulaiz Al-abduli  </p>


                      <!-- UiPasta Credit Start -->
                                  <div class="uipasta-credit">Contact <i class="fa fa-love"></i><a href="https://twitter.com/_ccse">twitter</a></div>
                                  <!-- UiPasta Credit End -->


                                 </footer>
                               </div>
                               <!-- Footer End -->


    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
    <!-- Back to Top End -->


    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugin.js"></script>

    <!-- Main Javascript File  -->
    <script type="text/javascript" src="js/scripts.js"></script>


   </body>
 </html>
