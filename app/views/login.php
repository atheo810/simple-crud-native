<?php include './component/header.php'; ?>
<style>
 body {
    background: rgb(47,11,227);
    background: linear-gradient(90deg, rgba(47,11,227,1) 0%, rgba(29,253,224,1) 50%, rgba(69,252,87,1) 100%);
    font-family: 'Poppins';
 }
    
</style>
<div class="container rounded">

    </div>
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-4 card ">
            <div class="login-wrap  rounded-4">
                <h3 class="my-4 text-center">Log In</h3>
                <form action="#">
                <div class="input-group mb-3">
                    <span class="input-group-text"><b>@</b></span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                        <label for="floatingInputGroup1">Username</label>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                            <span class="input-group-text"><i class='fas fa-key'></i></span>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingInputGroup1" placeholder="Password">
                                <label for="floatingInputGroup1">Password</label>
                            </div>
                            </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="form-control btn btn-success rounded submit px-3">Sign In</button>
                    </div>
                    <div class="form-group d-md-flex">
                    <div class="mx-3 form-group">
                    <input type="checkbox" checked="">
                        <span class="checkmark"></span>
                        <label class="checkbox-wrap checkbox-primary">Remember Me</label>
                    </div>

                    </div>
             </form>
             <hr>
             <div class="container my-3">
        <p class="w-100 text-center">— Didn't Have An Accout? <a href="./register.php">Sign Up</a> —</p>
        </div>
        </div>
    </div>
    </div>
    </div>
</div>

<?php include './component/footer.php'; ?>