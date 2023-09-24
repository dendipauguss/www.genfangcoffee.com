                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title mb-3">Profil</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <img width="60%" class="rounded-circle mx-auto d-block" src="../img/avatar/<?php echo $_SESSION['foto']; ?>" alt="Card image cap">
                                            <br>
                                            <h3 class="text-sm-center mt-2 mb-1">
                                                    <?php echo $_SESSION['nama_user']; ?>
                                            </h3>
                                            <div class="location text-sm-center">
                                                <div>
                                                <?php echo $_SESSION['user']; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="card-text">
                                        <table>
                                            <tr>
                                                <td width="150px">Id User</td><td>: <?php echo $_SESSION['id_user']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nama</td><td>: <?php echo $_SESSION['nama_user']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Username</td><td>: <?php echo $_SESSION['user']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Password</td><td>:  ********</td>
                                            </tr>
                                        </table>
                                        </div>
                                    </div>
                                </div>
                            </div>