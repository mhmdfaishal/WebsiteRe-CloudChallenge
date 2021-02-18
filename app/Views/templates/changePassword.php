<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/glacial-indifference" type="text/css" />
    <link rel="stylesheet" href="/assets/style/changepassword.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/assets/img/logo1.png">
    <title>CAMPOU</title>
</head>
<body>
    <header>
        <nav class="navigasi">
            <a href="/dashboard"><img src="/assets/img/logo1.png" alt="Logo Campou"></a>
            <ul>
                <li>
                    <p class="btn-profile-pic" onclick="myFunction()"><i class="fas fa-chevron-down"></i><img src="/assets/img_cust/<?= $customer->foto; ?>" alt="profile-pic" class="profile-pic"></p>
                    <ul class="dropdown-content" id="dropdown-menu">
                        <li><a href="/editprofile/<?= $customer->username_cust; ?>"><i class="fas fa-user"></i> Edit Profile</a></li>
                        <li><a href="/daftarpenyewaan"><i class="fas fa-info-circle"></i> Daftar Pemesanan</a></li>
                        <li><a href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </li>
                <li>
                    <p>hi,<br><?= $customer->username_cust; ?></p>
                </li>
                <li class="btnNav"><a href="/dashboard#about-us"><i class="fas fa-address-card"></i> Tentang Kami</a></li>
                <li class="btnNav"><a href="/dashboard#lapangan"><i class="fas fa-th-list"></i> Lapangan</a></li>
                <li class="btnNav"><a href="/dashboard#"><i class="fas fa-home"></i> Home</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <a href=""><img src="/assets/img_cust/<?= $customer->foto; ?>" alt="profilepic"></a>
        <?php if(session()->get('failed')) : ?>
                <h4 role="alert" style="text-align: center; color:red;">
                    <?= session()->get('failed')?>
                </h4>
        <?php endif;?>
        <form method="post" action="/savepassword">
            <table>
                <tr>
                    <td><label for="password">New Password</label></td>
                    <td>
                    <input type="hidden" name="username_cust" class="input-data" value="<?= $customer->username_cust; ?>">
                    <input type="password" name="password" class="input-data"></td>
                </tr>
                <tr>
                    <td><label for="password">Confirm Password</label></td>
                    <td><input type="password" name="password_confirm" class="input-data"></td>
                </tr>
                <tr>
                    <td colspan="10">
                        <input type="submit" value="SIMPAN" class="btn-update">
                    </td>
                </tr>
                
            </table>
            
        </form>
    </main>
    <script>
        function myFunction() {
            document.getElementById("dropdown-menu").classList.toggle("show");
        }
        window.onclick = function(e) {
            if (!e.target.matches('.btn-profile-pic.')) {
                var dropdown_menu = document.getElementById("dropdown-menu");
                if (dropdown_menu.classList.contains('show')) {
                    dropdown_menu.classList.remove('show');
                }
            }
        }
    </script>
</body>

</html>