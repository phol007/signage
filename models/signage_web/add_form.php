<!Doctype>
<html>
<head>

	<title>index</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">

<body>
<!-- =========================================== HEADER =================================================== -->
<div class="navbar navbar-fixed-top">
 <div class="container-fluid">
   <div class="navbar-header">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
     </button>     
    <a href="setting.php"><img src="images/logo.jpeg" width="150"></a>
 </div>      
 </div>
</div>
<div id='header'></div>
<!-- ========================================================================================================= -->

<div class='content' style="background: #fff; border-radius: 9px; margin: 2%; padding: 2%;">
    <h2>เพิ่มข้อมูล การโฆษณา</h2>
          <form action="add.php" method="POST" enctype="multipart/form-data">           

        <select data-inline="true" name="type" onchange="return insert(this)">
                <option value="P">ป้ายโฆษณา</option>
                <option value="T">ข้อความ</option>
          </select><br><br>
          <script>
          function insert(type) {
             if(type.value=="P"){
              document.getElementById("text").style.display = "none";
              document.getElementById("picture").style.display = "block"; 
             }else if(type.value=="T"){
              document.getElementById("picture").style.display = "none"; 
              document.getElementById("text").style.display = "block";   
             }
          }
          </script>
          
                       
                <div id="text" style="display: none;">
                    <div class="form-group">
                      <label class="control-label col-sm-2">ข้อความ:</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" rows="4" cols="50" name="data"></textarea>
                      </div><br>
                    </div>
                </div>
          

                <div id="picture">          
                  <div class="form-group">
                  <label class="control-label col-sm-2">ไฟล์ป้ายโฆษณา :</label>
                  <div class="col-sm-10">
                    <input type="file" name="Pic" />
                  </div><br>
                  </div>
                </div>

                <div class="form-group"> 
                  <div class="col-sm-offset-2 col-sm-10">
                    <br><button type="submit" class="btn btn-default">Submit</button>
                  </div>
                </div>
                
          </form>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
</div>


</body>
</html>
