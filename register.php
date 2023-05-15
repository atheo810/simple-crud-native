<?php include './component/header.php'; ?>

<div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center h-100 p-5 vh-100" style="background-color: rgb(219,219,219);">
        <div class="col-lg-6 col-md-8 col-sm-10 col-10 border-dark rounded-4 bg-white shadow-lg">
            <div class="border-bottom">
                <h1 class="text-center py-3"> Register </h1>
            </div>
            <br>
            <form action="post">

                <!-- Bagian Input data -->
                <div class="mx-3 mx-4">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="@gmail.com" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                    </div>

                    <div class="mb-2">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>

                        <input class="form-check-input mt-2" onclick="showPassword()" type="checkbox" id="showpass">
                        <label class="form-check-label mt-1" for="exampleCheckbox"> Show Password </label>
                        <script>let pass = document.getElementById('password');
                                let conPass = document.getElementById('confirm_password')
                        function showPassword(){
                            if (pass.type === "password" && conPass.type === "password") {
                                pass.type = "text";
                                conPass.type = "text";
                            }
                            else {
                                pass.type = "password";
                                conPass.type = "password";
                            }
                        }
                    </script>
                    </div>

                    <!-- Tombol register -->
                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" class="btn btn-primary w-50">Register</button>
                    </div>

                </div>
                <div class="align-items-center">
                    <p class="text-center mt-3"> Sudah punya akun? <a href="Log-In.html">Log In</a> </p>
                </div>
                <div class="border-top">
                    <p class="text-center mt-2 py-2"> Copyright by harjo </p>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include './component/footer.php'; ?>