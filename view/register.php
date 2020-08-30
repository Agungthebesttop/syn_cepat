    <!-- yes Page -->
    <section class="yes">
        <div class="container">
            <div class="bg-yes">
                <div class="row">
                    <div class="col-lg-5" id="left">
                        <img src="./Assets/img/kurir2.jpg" alt="kurir2" class="kurir2">
                    </div>
                    <div class="col">
                        <div class="form-ongkir-yes">
                            <form action="?page=act-register" method="POST">
                                <?= isset($_SESSION['notif']) ? $_SESSION['notif'] : '';
                                unset($_SESSION['notif']);
                                ?>
                                <br><br>
                                <h5>Login<b> (Your Account)</b> </h5>
                                <p>
                                    <h6>Does'nt have acoount ? <a href="?page=register">Register</a></h6>
                                </p>
                                <p>
                                    <input class="form-control" type="text" name="firstName" placeholder="Enter First Name">
                                </p>
                                <p>
                                    <input class="form-control" type="text" name="lastName" placeholder="Enter Last Name">
                                </p>
                                <p>
                                    <input class="form-control" type="text" name="username" placeholder="Enter Username">
                                </p>
                                <p>
                                    <input class="form-control" type="password" name="password" placeholder="Enter Password">
                                </p>
                                <p>
                                    <input type="radio" name="jk" value="Pria" id="pria"> <label for="pria">Pria</label> &nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="jk" value="Wanita" id="wanita"> <label for="wanita">Wanita</label>
                                </p>
                                <p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="submit" name="btn-register" class="btn btn-success">Register</button>
                                        </div>
                                    </div>
                                </p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-- Akhir Yes -->
