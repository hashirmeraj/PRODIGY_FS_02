<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./src/output.css" rel="stylesheet">
    <script src="./src/script/script.js"></script>
    <!-- Icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <div class="main flex">
        <!-- Sidebar -->
        <?php
        include './particles/sidebar.php'; ?>


        <!-- Main Content Area -->
        <div class="flex flex-col w-4/5">
            <!-- Header -->
            <?php
            include './particles/header.php';
            ?>


            <!-- New Div for Main Content -->
            <div class="content bg-slate-400 flex-grow ">

                <div class=" bg-slate-700 h-12 w-max ab">akjaihsihsi</div>

            </div>
        </div>
    </div>
</body>

</html>