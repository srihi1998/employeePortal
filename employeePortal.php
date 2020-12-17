<html>

<head>
    <title>Employee Portal</title>
    <link rel="stylesheet" href="employeePortal.css" type="text/css">

    <script>
        window.onload = function() {
            if (document.querySelectorAll("section:target").length == 0) {
                window.location = "#home";
            }
        }
    </script>
</head>

<body>
    <div class="navbar">
        <div class="dropdown">
            <a href="#home">Home</a>
            <button class="dropbtn">Dropdown
            </button>
            <div class="dropdown-content">
                <div class="header">
                    <h2>Mega Menu</h2>
                </div>
                <div class="row">
                    <div class="column">
                        <h3>List</h3>
                        <a href="#listEmployee">Employee</a>
                        <a href="#listProject">Project</a>
                        <a href="#listEmpProj">Project - Employee List</a>
                    </div>
                    <div class="column">
                        <h3>Creation</h3>
                        <a href="#creationEmployee">Employee</a>
                        <a href="#creationProject">Project</a>
                        <a href="#creationEmpProj">Add Employees to Project</a>
                    </div>
                    <div class="column">
                        <h3>Update</h3>
                        <a href="#updateEmployee">Employee</a>
                        <a href="#updateProject">Project</a>
                    </div>
                    <div class="column">
                        <h3>Delete</h3>
                        <a href="#deleteEmployee">Employee</a>
                        <a href="#deleteProject">Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header>
        <h1>KITS Employee Portal</h1>
    </header>

    <div class="content">

            <?php include ('pages/home.php') ?>

        <section id="listEmployee">
            <?php include ('pages/listEmployee.php') ?>
        </section>

        <section id="listProject">
            <?php include ('pages/listProject.php') ?>
        </section>

        <section id="listEmpProj">
            <?php include ('pages/listEmpProj.php') ?>
        </section>
        
        <section id="creationEmployee">
            <?php include ('pages/creationEmployee.php') ?>
        </section>

        <section id="creationProject">
            <?php include ('pages/creationProject.php') ?>
        </section>
        
        <section id="creationEmpProj">
            <?php include ('pages/createEmpProject.php') ?>
        </section>

        <section id="successEmployee">
            <?php include ('pages/insertEmployee.php') ?>
        </section>

        <section id="successProject">
            <?php include ('pages/insertProject.php') ?>
        </section>

        <section id="successEmpProj">
            <?php include ('pages/insertEmpProject.php') ?>
        </section>

        <?php include ('pages/updateEmployee.php') ?>
        
        <?php include ('pages/updateProject.php') ?>

        <?php include ('pages/deleteEmployee.php') ?>
        
        <?php include ('pages/deleteProject.php') ?>
    </div>
</body>

</html>