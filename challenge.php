<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <!-- Bootstrap -->
    <link rel="shortcut icon" href="Images/Bdv.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="normailize.css" />
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">



</head>

<body>
    <div class="dashboard">
        <div class="sidebar">
            <img src="/Images/DDB_Logo.png" alt="Logo" class="logo">
            <ul class="menu">
                <li><a href="dashboard.php" target="_blank"><i class="fa fa-th-large"></i>Dashboard</a></li>
                <li><a href="leaderboard.php"><i class="fa fa-users"></i>Leaderboard</a></li>
                <li><a href="message.php"><i class="fa fa-folder-open"></i>Message</a></li>
                <li><a href="challenge.php"><i class="fa fa-cog"></i> Challenge</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="title-profile">
                <h1>Leaderboard</h1>
                <p>List Leaderboard</p>
            </div>
            <div class="row">
                <div class="col-md-12 bg-white leader-content ">
                    <div class="mt-4">
                        <h5 class="text-hijau pb-3"> <b> Challenge List Angel Manurang </b></h5>
                        <table class="table mt-2 table-striped table-hover">
                            <thead class="table-leader">
                                <tr>
                                    <th>No</th>
                                    <th>List Challenge</th>
                                    <th>Points</th>
                                    <th>Status</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Datang on time selama satu minggu</td>
                                    <td>5</td>
                                    <td>7/7</td>
                                    <td class="text-primary">Done</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Ucapkan 10 Selamat Ulang Tahun kepada Karyawan</td>
                                    <td>10</td>
                                    <td>2/10</td>
                                    <td class="text-success">On Progress</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Ikuti Kuis Trivia 5 Kali</td>
                                    <td>5</td>
                                    <td>5/5</td>
                                    <td class="text-primary">Done</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Datang Rapat on time selama satu minggu</td>
                                    <td>10</td>
                                    <td>6/7</td>
                                    <td class="text-success">On Progress</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Presentasi Porject On Time 10 Kali</td>
                                    <td>10</td>
                                    <td>10/10</td>
                                    <td class="text-primary">Done</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Ikut Game Event 5 Kali</td>
                                    <td>5</td>
                                    <td>5/5</td>
                                    <td class="text-primary">Done</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Beri Likes 20 Kali kepada Karyawan lain</td>
                                    <td>10</td>
                                    <td>20/20</td>
                                    <td class="text-primary">Done</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content pb-4">
                                    <div class="row p-3">
                                        <div class="col-md-4">
                                            <div class="user2">
                                                <img src="Images/Ellipse.png" class="img-fluid" alt="LauraF">
                                            </div>
                                            <span class="point p-1 text-white ml-3 text-center"><i
                                                    class="fa fa-database text-warning"></i> 82 Point</span>
                                        </div>
                                        <div class="col-md-8">
                                            <h5 class="text-hijau"> <b> Angel Manurung </b></h5>
                                            <p class="text-hijau">Trible NLP</p>
                                            <p class="text-hijau">Front-End Developer</p>
                                            <span class="mt-3"><img src="Images/comment-dots-solid.svg"
                                                    style="color: #12745b;" width="15" height="15" alt=""> Send
                                                Message</span>
                                            <span class="ml-3"><i class="fa fa-thumbs-up text-primary"></i> 123
                                                Likes</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 px-5">
                                            <h5 class="user-name"> <b> Trophy </b></h5>
                                            <p class="user-name2"> <img src="Images/crown.png" width="20" height="20"
                                                    alt=""> Employee of The
                                                Month</p>
                                            <p class="user-name2"> <img src="Images/badge.png" width="20" height="20"
                                                    alt=""> Reach Veteran Level</p>
                                            <p class="user-name">Progress This Month</p>
                                            <li class="user-name2 ml-3">
                                                Hadir Meeting Bulan Ini
                                            </li>
                                            <div class="progress mt-2" style="width: 350px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 72%" aria-valuenow="25" aria-valuemin="0"
                                                    aria-valuemax="100">72%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- JS -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script> -->

</html>