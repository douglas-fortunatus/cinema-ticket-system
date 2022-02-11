<?php include('config.php'); ?>

<?php include(ROOT_PATH . '/app/contollers/post.php'); ?>

<html>

        <?php include(ROOT_PATH . '/app/includes/header.php'); ?>

        <!--==Movie-Banner=========================================-->
        <section class="movie-banner">

            <div class="m-banner-img">
                <img alt="" src="assets/img/banner/banner01.jpg">
            </div>

            <div class="banner-container">
                <div class="title-container">
                    <div class="title-top">
                        <div class="movie-title"><h1 style="font-size: 2.5rem;"> <?php echo $name; ?></h1></div>

                        <div class="more-about-movie my-5">
                            <div class="rating" style="font-size: 2.4rem;"><?php echo $age; ?> </div>
                            
                            &mdash; <span style="font-size: 2.3rem;"> <?php echo $duration . " mins"; ?></span>
                        </div>

                        <div class="language"><span style="font-size: 1.5rem;">English</span></div>
                    </div>

                    <div class="title-bottom mt-4">
                        <a href="#" class="watch-btn">Buy Ticket</a>
                    </div>
                </div>

                <div class="play-btn-container">
                    <div class="play-btn">
                        <a href="<?php echo $link; ?>"><i class="fas fa-play"></i></a>
                    </div>
                </div>
                

                <div id="play" class="play">
                    <a href="javascript:void" class="close-movie"><i class="fas fa-times"></i></a>
                    <div class="play-movie">
                        <video id="m-video" controls>
                            <source src="<?php echo $link; ?>" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </section>
        <!--Banner-end------------->

        <section class="movie-details">
            <!-- movie title -->
            <strong><?php echo $name; ?></strong>
            <p><?php echo $description; ?> </p>
        </section>

        <?php include( ROOT_PATH . '/app/includes/footer.php'); ?>
</body>
</html>
    
    
