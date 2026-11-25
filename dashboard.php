<?php

    include "db.php";
    $result = $conn -> query("Select * from Books");

?>

<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
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
                                <a class="nav-link" href="insert.php">Insert</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="update.php">Update</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="delete.php">Delete</a>
                            </li>
                            
                        </ul>
                            <a
                                name=""
                                id=""
                                class="btn btn-primary"
                                href="logout.php"
                                role="button"
                                >Logout</a
                            >
                            
                        </form>
                    </div>
                </div>
            </nav>
            
            <div
                class="container"
            >
            <br>
            <h1> Hello <?php echo $_SESSION['email'] ?> </h1>
            </div>
            <br>
            
                    <div
                        class="container col-5"
                    >
                        <table border=1 cellpadding=15 style="background:linear-gradient()" >
                        <tr>
                            <td>ID</td>
                            <td>Book Tile</td>
                            <td>Author</td>
                            <td>Category</td>
                            <td>Price</td>
                            <td>Quantity</td>
                        </tr>
                         <?php while ($row = $result -> fetch_assoc() ) { ?>
                        <tr>
                            <td> <?php echo $row['id'] ?></td>
                            <td> <?php echo $row['book_title'] ?></td>
                            <td> <?php echo $row['author'] ?></td>
                            <td> <?php echo $row['category'] ?></td>
                            <td> <?php echo $row['price'] ?></td>
                            <td> <?php echo $row['quantity'] ?></td>
                        </tr>
                    <?php } ?>
                </table>
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