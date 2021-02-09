<?php include('pages/header.php')?>

<body>
    <div class="container">

        <!-- HEADER -->

        <header>
            <div class="logo">
                <img src="images/logo.png" alt="logo" width="100%">
            </div>
            <div class="social-icon">
                <span>
                    <img src="images/instagram.png" alt="instagram" width="100%">
                </span>
                <span>
                    <img src="images/linkedin.png" alt="linkedin" width="100%">
                </span>
                <span>
                    <img src="images/facebook.png" alt="facebook" width="100%">
                </span>
            </div>
        </header>

        <!-- NAVBAR -->

        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="pages/curriculum.php">Curriculum</a></li>
                <li><a href="pages/portfolio.php">Portfolio</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>

        <!-- SECTION -->

        <main> <!--CORRECCION -->
            <section class="images">
                <article>
                    <img src="images/laptop.jpg" alt="laptop">
                    <p>UX/UI Design</p>
                </article>
                <article>
                    <img src="images/seo.jpg" alt="seo">
                    <p>SEO</p>
                </article>
                <article>
                    <img src="images/code.jpg" alt="code">
                    <p>Web Development</p>
                </article>
            </section>

            <!-- CONTENT -->

            <section class="content">
                <div class="content-article">
                    <article>
                        <img src="images/imac.jpg" alt="imac" width="50%">
                        <div class="align-items">
                            <h1>Web Design</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi veritatis facilis mollitia, dignissimos suscipit.?</p>
                            <button>continue</button>
                        </div>
                    </article>
                    <article>
                        <img src="images/function.jpg" alt="function" width="50%">
                        <div class="align-items">
                            <h2>E-commerce</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi veritatis facilis mollitia, dignissimos suscipit.</p>
                            <button>continue</button>
                        </div>
                    </article>
                </div>     
            </section>
        </main> <!--CORRECCION -->


        <?php include('pages/footer.php')?>

    </div>
</body>
</html>
