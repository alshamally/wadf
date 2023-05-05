<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Web Developer Job</title>
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="jobStyle.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
</head>

<body>

   <?php
   session_start();

   // تحقق مما إذا كان المستخدم قد سجل الدخول أم لا
   if (!isset($_SESSION['user_id'])) {
      // إذا لم يكن المستخدم قد سجل الدخول، قم بإعادته إلى صفحة تسجيل الدخول
      header('Location: login.php');
      exit;
   }
   ?>
   <!-- Header -->
   <header>
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h1 class="text-center">Web Developer Job</h1>
            </div>
         </div>
      </div>
   </header>
   <!-- Main Content -->
   <main>
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <h2>Job Description</h2>
               <p>We are looking for a skilled web developer to join our team. The ideal candidate should have experience with HTML, CSS, JavaScript, and PHP, and be able to work independently as well as part of a team. The job is located in our New York office.</p>
               <h2>Requirements</h2>
               <ul>
                  <li>Bachelor's degree in Computer Science or a related field</li>
                  <li>3+ years of experience in web development</li>
                  <li>Proficiency in HTML, CSS, JavaScript, and PHP</li>
                  <li>Experience with Bootstrap and other front-end frameworks</li>
                  <li>Experience with WordPress and other CMS platforms</li>
                  <li>Strong problem-solving and analytical skills</li>
                  <li>Excellent communication and teamwork skills</li>
               </ul>
               <h2>Salary</h2>
               <p>The monthly salary for this position is $6,000 - $8,000.</p>
               <h2>Location</h2>
               <p>The job is located at 123 Main St, New York, NY 10001.</p>
               <h2>Apply Now</h2>
               <form method="post" action="submit-form.php" enctype="multipart/form-data">
                  <div class="form-group">
                     <label for="full-name">Full Name</label>
                     <input type="text" class="form-control" id="full-name" name="full-name" required>
                  </div>
                  <div class="form-group">
                     <label for="email">Email</label>
                     <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                  <div class="form-group">
                     <label for="resume">Upload Your Resume</label>
                     <input type="file" class="form-control-file" id="resume" name="resume" required>
                  </div>
                  <div class="form-group">
                     <label for="message">Message</label>
                     <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
               </form>
               <a href="home.php" class="btn btn-secondary mt-4"><i class="fas fa-arrow-left"></i> Back to Home</a>
            </div>
            <div class="col-md-4">
               <h2>Contact Information</h2>
               <ul>
                  <li><i class="fas fa-map-marker-alt"></i> 123 Main St, New York, NY 10001</li>
                  <li><i class="fas fa-envelope"></i> info@company.com</li>
               </ul>
            </div>
         </div>
      </div>
   </main>
   <!-- Footer -->
   <footer>
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <p class="text-center">&copy; 2023 Web Developer Job. All rights reserved.</p>
            </div>
         </div>
      </div>
   </footer>
   <!-- Bootstrap JS -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

   <!--Start of Tawk.to Script-->
   <script type="text/javascript">
      var Tawk_API = Tawk_API || {},
         Tawk_LoadStart = new Date();
      (function() {
         var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
         s1.async = true;
         s1.src = 'https://embed.tawk.to/6453bd8aad80445890eb1e0f/1gvjhopin';
         s1.charset = 'UTF-8';
         s1.setAttribute('crossorigin', '*');
         s0.parentNode.insertBefore(s1, s0);
      })();
   </script>
   <!--End of Tawk.to Script-->
</body>

</html>