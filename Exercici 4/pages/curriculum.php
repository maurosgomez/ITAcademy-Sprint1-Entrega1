<?php include('header.php')?>

<body>
    <div class="container">

 <!-- HEADER -->
 
    <header>
        <div class="logo">
            <img src="../images/logo.png" alt="logo" width="100%">
        </div>
        <div class="social-icon">
            <span>
                <img src="../images/instagram.png" alt="instagram" width="100%">
            </span>
            <span>
                <img src="../images/linkedin.png" alt="linkedin" width="100%">
            </span>
            <span>
                <img src="../images/facebook.png" alt="facebook" width="100%">
            </span>
        </div>
    </header>

    <!-- NAVBAR -->

    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="curriculum.php">Curriculum</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <!-- SECTION -->

    <main> <!--CORRECCION -->
        <section class="images">
            <article>
                <img src="../images/laptop.jpg" alt="laptop">
                <p>UX/UI Design</p>
            </article>
            <article>
                <img src="../images/seo.jpg" alt="seo">
                <p>SEO</p>
            </article>
            <article>
                <img src="../images/code.jpg" alt="code">
                <p>Web Development</p>
            </article>
        </section>

    <!-- CONTENT -->

        <section class="content">
            <div class="content-article">
                <article class="curriculum">
                    <div class="align-items">
                        <h1>Curriculum Vitae</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi veritatis facilis mollitia, dignissimos suscipit ducimus repudiandae dolorem ea?</p>
                        <img src="../images/curriculum.jpg" alt="curriculum" width="50%">
                        <button><a href="../index.php">Return to home page</a></button>
                    </div>
                </article>
                <article>
                </article>
            </div>     
        </section>
    </main> <!--CORRECCION -->

<?php include('footer.php')?>

    </div>
</body>
</html>