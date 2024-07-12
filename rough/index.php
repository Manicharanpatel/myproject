<?php include './includes/header.php' ?> 
    <section id="section4">
        <div class="class">
            <h1 class="text-center">Testimonials</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-12">
                    <div class="card">
                        <div class="cardbody">
                            <a href="" style="color: white;"><i class="fa-solid fa-quote-left"></i></a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus voluptas facere, non ab soluta iusto laborum eaque vero, vel quisquam asperiores porro, inventore aperiam deleniti consequatur ea incidunt dolorem dolor!Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="card-footer">
                            <div class="row d-flex">
                                <div class="col-md-4">
                                    <div class="parent">
                                        <img src="./images/image.avif" alt="John Doe" class="mr-3 mt-1 rounded-circle">
                                    </div>
                                </div>
                                <div class="col-md-8 mt-1 mr-3">
                                    <h4>Mary Jane</h4>
                                    <p>-March13 2018</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-12">
                    <div class="card">
                        <div class="cardbody">
                            <a href="" style="color: white;"><i class="fa-solid fa-quote-left"></i></a>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio tempora quisquam minus illo deleniti. Aspernatur asperiores voluptate minima nisi repellat consectetur ab cupiditate! Laboriosam autem nostrum facilis reprehenderit aliquam quam sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="card-footer">
                            <div class="row d-flex">
                                <div class="col-md-4">
                                    <div class="parent">
                                        <img src="./images/image.avif" alt="John Doe" class="mr-3 mt-1 rounded-circle">
                                    </div>
                                </div>
                                <div class="col-md-8 mt-1 mr-3">
                                    <h4>Mary Jane</h4>
                                    <p>-March13 2018</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-12">
                    <div class="card">
                        <div class="cardbody">
                            <a href="" style="color: white;"><i class="fa-solid fa-quote-left"></i></a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus voluptas facere, non ab soluta iusto laborum eaque vero, vel quisquam asperiores porro, inventore aperiam deleniti consequatur ea incidunt dolorem dolor!Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="card-footer">
                            <div class="row d-flex">
                                <div class="col-md-4">
                                    <div class="parent">
                                        <img src="images/image.avif" alt="John Doe" class="mr-3 mt-1 rounded-circle">
                                    </div>
                                </div>
                                <div class="col-md-8 mt-1 mr-3">
                                    <h4>Mary Jane</h4>
                                    <p>-March13 2018</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container text-center">
    <h2>Contact Form</h2>
    <form action="contact.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
    </div>



<?php include './includes/footer.php' ?> 
