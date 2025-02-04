<?php include './header.php'; ?>


<!-- Search -->
<div class="left-row clearfix">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <input type="text" class="form-control" name="search" id="search" placeholder="Search">
            <button type="submit" class="button-index-one btn-search">GO!</button>
        </div>
    </form>
    <!-- Salutation -->
    <div class="salutation">
        <h1>Hello, <?php echo $_SESSION['username']; ?>!</h1>
    </div>
    <!-- Left Section -->
    <section class="left-section">

        <!-- Count -->
        <div class="count">
            <div class="countit patient-count">
                <h3>Patients <?php echo $number_of_patients; ?></h3>
            </div>

            <div class="countit doctor-count">
                <h3>Doctors <?php echo $number_of_doctors; ?></h3>
            </div>

            <div class="countit appointment-count">
                <h3>Appointment <?php echo $number_of_appointments; ?></h3>
            </div>
        </div>

        <!-- Image here -->
        <div class="image-here">
            <img src="./" alt="IMAGE RE-->>> Remove hight width">
        </div>

        <!-- Lists -->
        <div class="lists">
            <div class="countit list-item-bottom">
                <a href="./doctors_list.php">Doctor's List</a>
            </div>

            <div class="countit list-item-bottom">
                <a href="./patient_list.php">Patient's List</a>
            </div>

            <div class="countit list-item-bottom">
                <a href="./appointment_list.php">Appointment List</a>
            </div>
        </div>

    </section>

</div>

<div class="right-row clearfix">
    <?php
    echo 'Today: '.date('Y-m-d');
    ?>

    <!-- Right Section -->
    <section class="right-section">
        <!-- Title -->
        <div class="right-section-title">
            <h1> Recent Activity</h1>
        </div>
        <!-- List of items -->
        <div class="list-right">
            <!-- I don't know what the heck I should do here  -->
            <!-- Now I know shall we make list of blocks -->
            <!-- We will repeat this with php but for now -->
            <ul>
                <li>
                    <div class="countit right-list-items">
                        <h1>
                            One
                        </h1>
                        <p>Here goes the description.</p>
                    </div>
                </li>
                <li>
                    <div class="countit right-list-items">
                        <h1>
                            One
                        </h1>
                        <p>Here goes the description.</p>
                    </div>
                </li>
                <li>
                    <div class="countit right-list-items">
                        <h1>
                            One
                        </h1>
                        <p>Here goes the description.</p>
                    </div>
                </li>
                <li>
                    <div class="countit right-list-items">
                        <h1>
                            One
                        </h1>
                        <p>Here goes the description.</p>
                    </div>
                </li>
            </ul>
        </div>

    </section>
</div>






<?php include './footer.php'; ?>