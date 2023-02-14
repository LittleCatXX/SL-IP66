<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>เข้าสู่ระบบ</title>
    <a href="login-page.php">This is a link</a>
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #fe965a;">
      <div class="container">
        <a class="navbar-brand text-light" href="login-page.php">ระบบลงทะเบียนเรียน</a>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item <?=$active_admin?>">
          <a class="nav-link text-light" href="course-structure.php">หลักสูตร</a>
          </li>
          
          
      </ul>
      </div>
    </nav>
  </div>
  <br><br><br><br><br>
  <div class="container">
        <div class="row">
          <div class="col col-lg-3">
          </div>
          <div class="col-lg-6">
           <center><h2 class="display-5 " style="color: #fe965a;">เข้าสู่ระบบ</h2></center><br>
          <table border="0" cellspacing="0" cellpadding="7" style="width: 500px">
            <tbody>
      <tr>
        <td>รหัสประจำตัว</td>
        <td>
                <input name="username" type="text" id="username" class="form-control " placeholder="username" name="username"  required>
        </td>
      </tr>
      <tr>
        <td> รหัสผ่าน</td>
        <td>
                <input name="password" type="password" id="password" class="form-control " placeholder="password" name="username"  required><br>
        </td>
      </tr>
      <tr>
        <td> </td>
        <td>  
              <center><button style="border-color: #fe965a; color: #fe965a; border-radius: 5px;"  type="submit" name="submit">ตรวจสอบ</button></center>
        </td>
        </tr>
        </tbody>
        </table>
      </form>
        </center>
          </div>
        </div>
      </div>
  </div>
  
  
  </body>
</html>