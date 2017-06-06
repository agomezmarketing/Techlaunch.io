<?php $rootPath = '../'; $page = "location"; include('../parts/head.php'); ?>
<body>
    <?php include('../parts/navbar.php'); ?>

    <section class="above-the-fold">
        <div class="container">
            <img src="../images/logos/techlaunch-whitebg.svg" alt="Techlaunch logo" class="logo">
            <h1 class="page-title">location</h1>
        </div>
    </section>

    <section class="request-more-info">
        <div class="container">
            <div class="main">
                <h2 class="section-title">request more information</h2>
                <form>
                    <div class="form-input">
                        <div>
                            <label>First Name</label>
                            <input type="text" name="first_name">
                        </div>
                        <div>
                            <label>Last Name</label>
                            <input type="text" name="last_name">
                        </div>
                    </div>
                    <div class="form-input">
                        <div>
                            <label>Email</label>
                            <input type="tel" name="email">
                        </div>
                        <div>
                            <label>Phone</label>
                            <input type="tel" name="phone">
                        </div>
                    </div>
                    <div class="form-input">
                        <div>
                            <label>City</label>
                            <input type="text" name="zip">
                        </div>
                        <div>
                            <label>Zip</label>
                            <input type="number" name="zip">
                        </div>
                    </div>
                    <p>Cafe con leche vizcaya basel doral. Sall-mon Dolphins hialeah cocowalk gramps, cafecito miami time arroz con mango basel JWB dale art deco vizcaya.</p>
                    <button type="submit">submit info</button>
                </form>
            </div>
            <aside>
                <h3>Contact Us</h3>
                <p>Super booty bass Ultra literally, cafe con leche vizcaya basel doral. Sall-mon Dolphins hialeah cocowalk gramps, cafecito miami time arroz con mango basel JWB dale art deco vizcaya.</p>
                <p class="contact"><strong>Email:</strong> <a href="mailto:info@fvi.edu">info@fvi.edu</a></p>
                <p class="contact"><strong>Phone:</strong> <a href="tel:786-574-9511">786-574-9511</a></p>
                <img src="../images/people/students.jpeg" alt="">
            </aside>
        </div>
    </section>

    <?php $rootPath = '../'; include('../parts/footer.php') ?>

    <script src="../js/bundle.js"></script>
</body>
</html>