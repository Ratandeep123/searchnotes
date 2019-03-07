
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header loginhd">				
				<h4 class="modal-title">Sign In</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="home.php" method="post">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" class="form-control" name="uname" placeholder="Username" required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							<input type="password" class="form-control" name="password" placeholder="Password" required="required">
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block btn-lg">Sign In</button>
					</div>
					
				</form>
			</div>
		</div>
	</div>
</div> 
   

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn batan" cursor:"pointer" onclick="closeNav()">&times;</a>
    <button data-toggle="modal" data-target="#myModal" type="button" class="upldBtn btn-sm">
          <span class="glyphicon glyphicon-upload"></span> Upload
    </button><br>
    <button type="button" class="upldBtn btn-sm">
          <a href="info.php"><span class="glyphicon glyphicon-info-sign"></span> Info</a>
    </button><br>
    <button type="button" class="upldBtn btn-sm">
        <a href="contact.php"><span class="glyphicon glyphicon-earphone"></span> Contact</a>
        </button>
</div>

<div id="main">
  <span style="font-size:24px;cursor:pointer;font-weight:700" onclick="openNav()">&#9776; Menu</span>
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
