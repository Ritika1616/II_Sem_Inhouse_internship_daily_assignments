<?php
session_start();
if(!isset($_SESSION['user_name'])){
    header("location:login.php");
    exit();
}
?>
<!DOCTYPE html>
 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
     <a class="navbar-brand" href="bgmi.jpg">PRAVAH-2026</a>
    
        <button class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#menu">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
         <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a  class="nav-link" href="#">home</a>
        </li>
        <li class="nav-list">
            <a  class="nav-link" href="#">events</a>
        </li>
         <li class="nav-list">
            <a  class="nav-link" href="#">gallery</a>
        </li>
        <li class="nav-list">
            <a  class="nav-link" href="#">contact</a>
        </li>
        <li class="nav-list">
            <a  class="nav-link" href="#">register</a>
        </li>
     </ul>
    </nav>
    <button type="submit" class="btn btn-primary">logout</button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
