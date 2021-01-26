<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    
    <!-- JS -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    

     <!-- Bootstrap -->
    <link rel="shortcut icon" href="Images/Bdv.png" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
     <link rel="stylesheet" href="normailize.css"/>
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
            <h1>Home</h1>
            <p>Profile</p>
          </div>
          <div class="columns row">
            <div class="col1 col-md-6">
              <div class="box row">
                <div class="col-md-4">
                  <div class="user text-center justify-content-center">
                    <p><span class="user-name">Halo</span><br><span class="text-faded"></span></p> <br>
                    <img src="Images/Ellipse.png" class="img-fluid" alt="LauraF">
                    <br>
                    <div class="point p-1 text-white mt-2 ml-3 text-center"><i class="fa fa-database"></i> 82 Point</div>
                  </div>
                </div>
                <div class="col-md-8">
                  <p><span class="user-name">Angel Manurung</span><br><span class="text-faded"></span></p>
                  <p class="user-name2">Trible NLP</p>
                  <p class="user-name2">Front-End Developer</p>
                  <p class="user-name"><b>Achievement</b></p>
                  <p class="user-name"><img src="Images/crown.png" alt="Crown" width="20" height="20"> Employee of The Month</p>
                </div>
                <div class="">
                  <p class="user-name">Progress This Month</p>
                  <li class="user-name2 ml-3">
                    Hadir Meeting Bulan Ini
                  </li>
                  <div class="progress mt-2" style="width: 350px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 72%" aria-valuenow="25" aria-valuemin="0"
                      aria-valuemax="100">72%</div>
                  </div>
                </div>
              </div>
              <!--/box-->
            </div>
            <div class="col2 col-md-6">
              <div class="box comments">
                <div class="comment-wrap">
                    <p><span class="user-name">Mission</span><br><span class="text-faded"></span></p>
                    <li class="user-name2 ml-3">
                      Datang Tepat Waktu Dalam Satu Minggu
                      <div class="progress mt-2" style="width: 350px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0"
                          aria-valuemax="100">100%</div>
                      </div>
                    </li>
                    <li class="user-name2 ml-3 mt-2">
                      Ucapkan Selamat Ulang Tahun Ke 10 Karyawan
                      <div class="progress mt-2" style="width: 350px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 72%" aria-valuenow="25" aria-valuemin="0"
                          aria-valuemax="100">72%</div>
                      </div>
                    </li>
                    <p class="mt-2"><span class="user-name">Task</span><br><span class="text-faded"></span></p>
                    <table style="width: 100%;">
                      <tr>
                        <td>
                          <li class="user-name2 ml-3">
                            Zoom Meeting 18, January
                          </li>
                        </td>
                        <td>
                          <button class="btn btn-primary btn-sm" disabled>Done</button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <li class="user-name2 ml-3">
                            Presentasi Prototype 30, January
                          </li>
                        </td>
                        <td>
                          <button class="btn btn-warning btn-sm">Attend</button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <li class="user-name2 ml-3">
                            Zoom Meeting 28, January
                          </li>
                        </td>
                        <td>
                          <button class="btn btn-warning btn-sm">Attend</button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <li class="user-name2 ml-3">
                            Zoom Meeting 8, January
                          </li>
                        </td>
                        <td>
                          <button class="btn btn-primary btn-sm" disabled>Done</button>
                        </td>
                      </tr>
                    </table>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
</body>
</html>