<?php 
include 'db.php';
if ($_SERVER["REQUEST_METHOD"]==="POST") {
$_name = $_POST["name"];
$_email = $_POST["email"];
$_pass = password_hash($_POST["password"],PASSWORD_BCRYPT);
$_phone = $_POST["phone"];

$sql =$conn->prepare("insert into Users(full_name,email,password_hash,phone) values(?,?,?,?)");
$sql->bind_param('ssss',$_name,$_email,$_pass,$_phone);

if($sql-> execute()){
    echo "<script> alert ('Register successfully')</script>";
}else{
    echo "<script> alert(Registraion Failed.Please Try again')</script>";
}

if(empty($email)){
    echo "<script> alert('Please Entere  Email Field')</script>";
}

if(empty($_pass)){
    echo "<script> alert('Please Entere pass Field')</script>";
}

if(header("Location:login.php"));

}

?>



<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <div class="container border rounder ps-5 m-4">
                <form action="" method="POST">
            <h3> Registration Page</h3>
             <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input
                    type="text"
                    class="form-control form-control-sm"
                    name="name"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input
                    type="text"
                    class="form-control form-control-sm"
                    name="email"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
            </div>
            
                        <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input
                    type="text"
                    class="form-control form-control-sm"
                    name="password"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
            </div>

                <div class="mb-3">
                <label for="" class="form-label">Phone No</label>
                <input
                    type="text"
                    class="form-control form-control-sm"
                    name="phone"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
            </div>

            <button
                type="submit"
                class="btn btn-primary"
            >
                Submit
            </button>
</form>
</div>


        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
