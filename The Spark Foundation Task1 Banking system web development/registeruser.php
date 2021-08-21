<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Gabriela&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="responsive.css">
	<title>New User</title>
</head>
<body style="background: rgb(18, 176, 204);">

	<nav class="navbar background1 h-nav-resp">
        <ul class="nav-list v-class-resp">
            <div class="logo"><span>TSF Bank</span></div>
            <li><a href="bankingsystem.php">Home</a></li>
            <li><a href="exisitinguser.php">Existing User</a></li>
            <li><a href="passbook.php">Passbook</a></li>
            <li><a href="money.php">Transfer</a></li>
            <li><a href="#">New User</a></li>
        </ul>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>
	<section class="login py-4 bg-light">
        <div class="container pt-2">
            <div class="row g-0 pt-5">
                
                <div class="col-lg-7 text-center py5">
                    <h1>New User</h1>
                    <form action="createuserdb.php" method="post">
                        <div class="form-row py-3 pt-5">
                            <div class="offset-1 col-lg-10">
                                <input type="text" name="name" class="inp px-3" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-row pt-4">
                            <div class="offset-1 col-lg-10">
                                <input name="email" type="email" class="inp px-3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-row pt-5 ">
                            <div class="  offset-1 col-lg-10">
                                <select name="gender" class="inp px-3 form-selec " aria-label="Default select example">
                                    <option selected>Select Gender</option>
                                    <option value="F">Female</option>
                                    <option value="M">Male</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row pt-5">
                            <div class="offset-1 col-lg-10">
                                <input id="phone" name="phone" type="text" class="inp px-3" placeholder="Phone">
                            </div>
                            
                        </div>
                        <div class="form-row pt-5 ">
                            <div class="offset-1 col-lg-10">
                                <input id="balance" name="balance" type="text" class="inp px-3" placeholder="Balance">
                            </div>
                        </div>
                        <div class="form-row pt-5 pb-5">
                            <div class="offset-1 col-lg-10">
                                <button type="submit" name="insert" class="btn1">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="background">
        <p class="text-footer">
            Copyright &copy; 2028 - Basudev Sharma - The Spark Foundation.
        </p>

    </footer>
    <script src="resp.js"></script>
</body>
</html>