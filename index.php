<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Website</title>
    <link rel="stylesheet" href="homeStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smX/Kp2L1Qib9K6x3lV9jq0sN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">وظفني</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">تسجيل الدخول</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">الانضمام</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="hero-heading">مرحبًا بك في موقعنا</h1>
                    <p class="lead">نحن نقدم خدمات التوظيف عبر الإنترنت لتسهيل عملية البحث عن الوظيفة المناسبة لك. يمكنك البحث عن وظائف حسب الموقع ونوع الوظيفة.</p>
                </div>
                <div class="col-md-6">
                    <form class="form-inline hero-form">
                        <div class="form-group mr-2">
                            <input type="text" class="form-control" placeholder="ابحث عن وظيفة">
                        </div>
                        <div class="form-group mr-2">
                            <select class="form-control">
                                <option>نوع الوظيفة</option>
                                <option>تقنية المعلومات</option>
                                <option>التسويق</option>
                                <option>المبيعات</option>
                                <option>الموارد البشرية</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">ابحث</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="jobs">
        <h1>الوظائف المتاحة</h1>
        <div class="job-cards">
            <div class="job-card">
                <img src="https://dummyimage.com/300x200/000/fff" alt="Job Image">
                <h2>مطور ويب</h2>
                <p class="job-type">دوام كامل</p>
                <p class="job-location">New York, NY</p>
                <p class="job-salary"><span>المرتب:</span> $80,000 - $100,000 في السنة</p>
                <p class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae commodo ante.</p>
                <a href="jobs.php" target="_blank"><button>التقديم</button></a>
            </div>
            <div class="job-card">
                <img src="https://dummyimage.com/300x200/000/fff" alt="Job Image">
                <h2>مصمم جرافيك</h2>
                <p class="job-type">دوام جزئي</p>
                <p class="job-location">Los Angeles, CA</p>
                <p class="job-salary"><span>المرتب:</span> $40 - $50 في الساعة</p>
                <p class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae commodo ante.</p>
                <a href="jobs.php" target="_blank"><button>التقديم</button></a>
            </div>
            <div class="job-card">
                <img src="https://dummyimage.com/300x200/000/fff" alt="Job Image">
                <h2>مدير مبيعات</h2>
                <p class="job-type">دوام كامل</p>
                <p class="job-location">San Francisco, CA</p>
                <p class="job-salary"><span>المرتب:</span> $120,000 - $150,000 في السنة</p>
                <p class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae commodo ante.</p>
                <a href="jobs.php" target="_blank"><button>التقديم</button></a>
            </div>
            <div class="job-card">
                <img src="https://dummyimage.com/300x200/000/fff" alt="Job Image">
                <h2>ادارة منتجات</h2>
                <p class="job-type">دوام كامل</p>
                <p class="job-location">Seattle, WA</p>
                <p class="job-salary"><span>المرتب:</span> $100,000 - $120,000 في السنة</p>
                <p class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae commodo ante.</p>
                <a href="jobs.php" target="_blank"><button>التقديم</button></a>
            </div>
            <div class="job-card">
                <img src="https://dummyimage.com/300x200/000/fff" alt="Job Image">
                <h2>مدير مبيعات</h2>
                <p class="job-type">دوام كامل</p>
                <p class="job-location">San Francisco, CA</p>
                <p class="job-salary"><span>المرتب:</span> $120,000 - $150,000 في السنة</p>
                <p class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae commodo ante.</p>
                <a href="jobs.php" target="_blank"><button>التقديم</button></a>
            </div>
            <div class="job-card">
                <img src="https://dummyimage.com/300x200/000/fff" alt="Job Image">
                <h2>ادارة منتجات</h2>
                <p class="job-type">دوام كامل</p>
                <p class="job-location">Seattle, WA</p>
                <p class="job-salary"><span>المرتب:</span> $100,000 - $120,000 في السنة</p>
                <p class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae commodo ante.</p>
                <a href="jobs.php" target="_blank"><button>التقديم</button></a>
            </div>
            <div class="job-card">
                <img src="https://dummyimage.com/300x200/000/fff" alt="Job Image">
                <h2>مدير مبيعات</h2>
                <p class="job-type">دوام كامل</p>
                <p class="job-location">San Francisco, CA</p>
                <p class="job-salary"><span>المرتب:</span> $120,000 - $150,000 في السنة</p>
                <p class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae commodo ante.</p>
                <a href="jobs.php" target="_blank"><button>التقديم</button></a>
            </div>
            <div class="job-card">
                <img src="https://dummyimage.com/300x200/000/fff" alt="Job Image">
                <h2>ادارة منتجات</h2>
                <p class="job-type">دوام كامل</p>
                <p class="job-location">Seattle, WA</p>
                <p class="job-salary"><span>المرتب:</span> $100,000 - $120,000 في السنة</p>
                <p class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae commodo ante.</p>
                <a href="jobs.php" target="_blank"><button>التقديم</button></a>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="about-content">
            <h2>About My Job Search</h2>
            <p>We are a job search website that helps job seekers find their dream jobs. Our platform provides access to thousands of job listings from various industries and locations. We also offer a range of resources and tools to help job seekers improve their resumes, prepare for interviews, and advance their careers.</p>
            <p>At My Job Search, we are committed to making the job search process easier and more efficient for job seekers. Our user-friendly interface and advanced search capabilities allow job seekers to quickly find relevant job listings and apply to them with ease.</p>
            <a href="#" class="about-button">Learn More</a>
        </div>
    </section>


    <main>
        <section>
            <h2>About</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel lorem sed libero malesuada vehicula a at mauris. Donec sollicitudin justo quis enim ullamcorper, non tempor neque faucibus.</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 My Website</p>
    </footer>

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