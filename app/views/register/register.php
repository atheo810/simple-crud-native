<style>
    body {
        background: rgb(34, 193, 195);
        background: linear-gradient(95deg, rgba(34, 193, 195, 1) 0%, rgba(253, 187, 45, 1) 100%);
        font-family: 'Poppins';
    }
</style>
<div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center h-100 p-5 vh-100">
        <div class="col-lg-6 col-md-8 col-sm-10 col-10 border-dark rounded-4 bg-white shadow-lg">
            <div class="border-bottom">
                <h3 class="text-center py-3"><b> Sign Up </b></h3>
            </div>
            <br>

            <form action="" method="post">

                <!-- Bagian Input data -->
                <div class="mx-3 mx-4">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <label class="form-label" for="fname">First Name</label>
                                <input type="text" id="fname" name="fname" class="form-control" placeholder="John" aria-label="First name" required>
                            </div>
                            <div class="col">
                                <label for="lname" class="form-label">Last Name</label>
                                <input type="text" name="Lname" class="form-control" placeholder="Doe" aria-label="Last name" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username </label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter Your Username Here" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email Here " required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter Your Password" required>
                    </div>

                    <div class="mb-2">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" onkeyup="check()" id="confirm_password" name="confirm_password" placeholder="Confirm Your Password" required>
                        <p id="message"></p>
                        <input class="form-check-input mt-2" onclick="showPassword()" type="checkbox" id="showpass">
                        <label class="form-check-label mt-1" for="showpass"> Show Password </label>

                    </div>

                    <!-- Tombol register -->
                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" id="signup" class="btn btn-success w-20">Sign Up</button>
                        <button type="reset" class="btn btn-danger mx-3 w-20">Clear All</button>
                    </div>

                </div>
                <div class="align-items-center">
                    <p class="text-center mt-3"> Already Have An Account? <a href="./login">Log In</a> </p>
                </div>
                <div class="border-top">
                    <p class="text-center mt-2 py-2"> Copyright by Yuka Honjo </p>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    let pass = document.getElementById('password');
    let conPass = document.getElementById('confirm_password');
    let message = document.getElementById('message');
    let btn = document.getElementById('signup');

    function showPassword() {
        if (pass.type === "password" && conPass.type === "password") {
            pass.type = "text";
            conPass.type = "text";
        } else {
            pass.type = "password";
            conPass.type = "password";
        }
    }

    function check() {
        if (pass.value === conPass.value) {
            message.innerHTML = "Password Match!";
            message.style.color = "green";
            btn.disabled = false;
            message.style.display = "";
        } else if (conPass.value === "") {
            message.style.display = "none";
            btn.disabled = true;
        } else {
            message.innerHTML = "Password Didn't Match";
            message.style.color = "red";
            message.style.display = "";
            btn.disabled = true;
        }
    }
</script>