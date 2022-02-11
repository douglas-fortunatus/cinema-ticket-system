
<?php include('config.php'); ?>

<?php include(ROOT_PATH . '/app/contollers/post.php'); ?>

<!DOCTYPE html>
<html lang="en">
    
        
        <?php include(ROOT_PATH . '/app/includes/header.php'); ?>


        <!-- slider -->
        <section id="main-slider">

            <!-- Swiper -->
            <div class="swiper mySwiper">

                <div class="swiper-wrapper">

                    <?php foreach($sliders as $slide): ?>
                        <div class="swiper-slide">
                            <div class="main-slider-box">
                                <a href="#" class="main-slider-overlay"><i class="fas fa-play"></i></a>
                
                                <div class="main-slider-img">
                                    <img src="<?php echo BASE_URL . "/assets/img/poster" . $slide['image']; ?>" alt="poster">
                                </div>
                
                                <div class="main-slider-text">
                                    <span class="quality"><?php echo $slide['quality']?></span>

                                    <div class="bottom-text">
                                        <div class="movie-name">
                                            <span> <?php echo date('F j, Y', strtotime($slide['date'])); ?></span>
                                            <strong><?php echo $slide['movie_name']?></strong>
                                        </div>

                                        <div class="category-time">
                                            <div class="time">
                                                <i class="fa fa-clock"></i> <?php echo $slide['start_time']?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
                
            </div>
            
        </section>

        <div class="slider-btns">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <!-- !slider -->


        <!--==Latest-Movies==================================-->
        <section id="latest">

            <!--heading-------->
            <div class="latest-heading"><h1>🍿 Now Showing</h1></div>

            <!--container------->
            <div class="post-container">

                <?php foreach($schedule as $movie): ?>
                    <div class="post-box">

                        <div class="post-img"><img alt="" src="<?php echo BASE_URL . "/assets/img/poster" . $movie['image']; ?>"/></div>

                        <div class="main-slider-text">
                            <span class="quality"><?php echo $movie['quality']?></span>
        
                            <!-- bottom text -->
                            <div class="bottom-text">
                                <div class="movie-name">
                                    <span> &mdash; <?php echo date('F j, Y', strtotime($movie['date'])); ?> | <i class="fa fa-clock"></i> <?php echo $movie['start_time']?></span>
                                    
                                    <a href="about.php?id=<?php echo $movie['movie_id']; ?>"> <strong><?php echo $movie['movie_name']?></strong> </a>
                                </div>

                                <?php if (isset($_SESSION['id'])): ?>
                                    <div class="category-time">
                                        <div class="ticket">
                                            <a href="<?php echo BASE_URL . '/seats.html' ?>" class="btn-ticket">Buy Ticket</a>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="category-time">
                                        <div class="ticket">
                                            <a href="<?php echo BASE_URL . '/access.php' ?>" class="btn-ticket">Buy Ticket</a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
            <!--container-end--->
            
        </section>
        <!--latest-post-end------->

        <?php include( ROOT_PATH . '/app/includes/footer.php'); ?>
    </body>
</html>