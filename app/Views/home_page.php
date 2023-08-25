<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->

</head>

<body>

    <!-- THis below is file is included for navbar -->
    <?php include(APPPATH . 'Views/header/navbar.php'); ?>
    <!-- *************** -->



    <!-- The below html is to list the courses  -->
    <div class="container my-5 py-5 ">


        <?php if (session()->has('isLoggedIn')) : ?>
            <h2>Hey, " <?= session()->get('name') ?> "  Welcome to Course Lelo.com </h2>
        <?php else : ?>
            <h2>Hey, Welcome</h2>
        <?php endif; ?>

        <div class="row">
            <?php foreach ($course as $course_item) : ?>

                <div class="col-md-3 my-3">
                    <div class="card">
                        <img src="<?= esc($course_item['course_img']) ?>" class="card-img-top px-3 py-3" alt="..." height="250px" width="250px">
                        <hr class="divider">
                        <div class="card-body">
                            <h5 class="card-title fw-bold"><?= esc($course_item['course_title']) ?></h5>
                            <p class="card-text"><?= esc($course_item['course_author']) ?></p>
                            <p class="card-text fw-bold"><?= '₹' . esc($course_item['course_price']) ?></p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?= esc($course_item['id']) ?>">
                                Add to cart
                            </button>

                            <!-- <a href="#" class="btn btn-primary">Add to cart</a> -->
                        </div>
                    </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal<?= esc($course_item['id']) ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Your Courses</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?php if (session()->has('isLoggedIn')) : ?>
                                    <h3 class="modal-title fs-5" id="exampleModalLabel"><?= esc($course_item['course_title']) ?></h3>
                                    <h3 class="modal-title fs-5" id="exampleModalLabel"><?= '₹' . esc($course_item['course_price']) ?></h3>
                                <?php else : ?>
                                    <p>You are not signed in, please sign in to purchase.</p>
                                <?php endif; ?>
                            </div>
                            <div class="modal-footer">
                                <?php if (session()->has('isLoggedIn')) : ?>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Proceed to checkout</button>
                                <?php else : ?>
                                    <a href="<?= base_url('signin') ?>" class="btn btn-primary">Sign in</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>





            <?php endforeach ?>







            <!-- Repeat the following card code block for each card -->

            <!-- Repeat the card code block above for each card -->
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>