<?php 
include 'db.php';

if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $title = $_POST["book_title"];
    $author = $_POST["author"];
    $cat = $_POST["category"];
    $price = $_POST["price"];
    $quant= $_POST["quantity"];

    $sql=$conn->prepare("insert into Books (book_title,author,category,price,quantity) values(?,?,?,?,?)");

    $sql->bind_param ('sssdi',$title,$author,$cat,$price,$quant);
    if($sql->execute()){
        echo "Data inserted Successfully";
    }
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
            <nav
                class="navbar navbar-expand-sm navbar-light bg-light"
            >
                <div class="container">
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="dashboard.php" aria-current="page"
                                    >Home
                                    <span class="visually-hidden">(current)</span></a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="update.php">Update</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="delete.php">Delete</a>
                            </li>

                            </li>
                        </ul>
        
                    </div>
                </div>
            </nav>
            
        </header>
        <main>
            <div class="container border rounder ps-5 m-4">
                <form action="" method="POST">
            <h3> Insert Books</h3>
             <div class="mb-3">
                <label for="" class="form-label">BookTitle</label>
                <input
                    type="text"
                    class="form-control form-control-sm"
                    name="book_title"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Author</label>
                <input
                    type="text"
                    class="form-control form-control-sm"
                    name="author"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
            </div>
            
                        <div class="mb-3">
                <label for="" class="form-label">Category</label>
                <input
                    type="text"
                    class="form-control form-control-sm"
                    name="category"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
            </div>

                <div class="mb-3">
                <label for="" class="form-label">Price</label>
                <input
                    type="text"
                    class="form-control form-control-sm"
                    name="price"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
            </div>

                        <div class="mb-3">
                <label for="" class="form-label">Quantity</label>
                <input
                    type="text"
                    class="form-control form-control-sm"
                    name="quantity"
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
