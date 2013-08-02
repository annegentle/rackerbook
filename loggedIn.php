<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="fbootstrapp/js/jquery-1.7.min.js"></script>
	<script src="fbootstrapp/js/bootstrap-alerts.js"></script>
	<script src="fbootstrapp/js/bootstrap-buttons.js"></script>
	<script src="fbootstrapp/js/bootstrap-dropdown.js"></script>
	<script src="fbootstrapp/js/bootstrap-modal.js"></script>
	<script src="fbootstrapp/js/bootstrap-popover.js"></script>
	<script src="fbootstrapp/js/bootstrap-scrollspy.js"></script>
	<script src="fbootstrapp/js/bootstrap-tabs.js"></script>
	<script src="fbootstrapp/js/bootstrap-twipsy.js"></script>
    <link href="fbootstrapp/css/bootstrap.css" rel="stylesheet">
	<link href="fbootstrapp/css/bootstrap-glyphicons.css" rel="stylesheet">	
    <style type="text/css">
      /* Override some defaults */
      html, body {
        background-color: #eee;
      }
      body {
        padding-top: 40px; /* 40px to make the container go all the way to the bottom of the topbar */
      }
      .container > footer p {
        text-align: center; /* center align it with the container */
      }
      .container {
        width: 860px; /* downsize our container to make the content feel a bit tighter and more cohesive. NOTE: this removes two full columns from the grid, meaning you only go to 14 columns and not 16. */
      }

      /* The white background content wrapper */
      .container > .content {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px; /* negative indent the amount of the padding to maintain the grid system */
        -webkit-border-radius: 0 0 6px 6px;
           -moz-border-radius: 0 0 6px 6px;
                border-radius: 0 0 6px 6px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }

      .topbar .btn {
        border: 0;
      }
    </style>
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
  </head>
  <body>
    <div class="topbar">
      <div class="fill">
        <div class="container">
		  <a class="brand" style="padding: 0px; margin-right: 25px; margin-left: -5px;">
			<img src="images/rackspace-logo.png" />
		  </a>
          <a class="brand" href="#">rackerbook</a>
          <ul class="nav">
            <li class="active"><a href="#">
				<span class="glyphicon glyphicon-home"></span></a>
			</li>
            <li>
				<a href="about.php">
					<span class="glyphicon glyphicon-question-sign"></span>
				</a>
			</li>
			<li>
				<div class="input-append">
					<input type="text" size="16" name="appendedInput" id="appendedInput" class="mini topbar-search"
					placeholder="Search for groups, people, things">
					<span class="add-on topbar-search">
						<span class="glyphicon glyphicon-search">
						</span>
					</span>
				</div>
			</li>
          </ul>
		  <ul class="nav" id="userMenus">
            <li class=""><a href="profile.php">
				<span class="glyphicon glyphicon-user"></span></a>
			</li>		  
            <li class="dropdown" data-dropdown="dropdown">
				<a id="notification-btn" class="racker-dropdown menu twipsy-below" href="#" rel="twipsy" data-original-title="You have 2 notifications">
				<span class="glyphicon glyphicon-bell"></span>
				<span id="notification-count">2</span>
				</a>
				<ul class="menu-dropdown">
					<li><a href="#">Joe Racker Invited you to tennis!</a></li>
					<li class="divider"></li>
					<li><a href="#">Jane Racker challenged you to foosball.</a></li>
					<li class="divider"></li>
					<li><center><a href="#">My Inbox</a></center></li>
				</ul>
			</li>		  
            <li class="dropdown" data-dropdown="dropdown">
				<a href="#" id="settingsDropdown" class="racker-dropdown menu">
				<span class="glyphicon glyphicon-cog"></span>
				</a>
				<ul class="menu-dropdown">
					<li><a href="editAccount.php">Edit Account</a></li>
					<li class="divider"></li>
					<li><a href="index.php">Logout</a></li>
				</ul>
			</li>			
		  </ul>
        </div>
      </div>
    </div>

    <div class="container">
	<!-- CONTENT: THIS IS WHERE THE VIEWS FOR EACH PAGE WILL BE DIFFERENT-->
      <div class="content" style="min-height: 500px;">
        <div class="page-header">
          <h1>
		  <small>
		    Rackerbook makes it easy to organize events/activities with 
			other rackers.
		  </small>
		  </h1>
        </div>
		<div class="row" style="min-height: 500px;">
		  <div class="span3 rackerbook-column" style="border-right: 1px solid #e0e0e0; min-height: 500px;">
			<h3>My Groups</h3>
			<div class="row" style="padding: 10px;">
				<div class="span3">
					<ul class="unstyled group-list">
					<li><a href="group.php">Tennis</a></li>
					<li><a href="#ping-pong">Ping pong</a></li>
					<li><a href="#foosball">Foosball</a></li>
					<li><a href="#baseball">Baseball</a></li>
					<li><a href="#lunch-with-rackers">Lunch-with-rackers</a></li>			
					</ul>
					<a class="btn small" href="#more-groups" style="margin-left: 5px;">More</a>
				</div>
			</div>
			<br/>
			<h3>All Groups</h3>
			<div class="row" style="padding: 10px;">
				<div class="span3">
					<ul class="unstyled group-list">
					<li><a href="group.php">Tennis</a></li>
					<li><a href="#ping-pong">Ping pong</a></li>
					<li><a href="#foosball">Foosball</a></li>
					<li><a href="#baseball">Baseball</a></li>
					<li><a href="#lunch-with-rackers">Lunch-with-rackers</a></li>	
					<li><a href="#womenDeveloperMeetUps">Women Developer Meet-ups</a></li>
					<li><a href="#lunch-with-rackers">Lunch-with-rackers</a></li>
					<li><a href="#activity1">Activity1</a></li>
					<li><a href="#activity2">Activity2</a></li>
					<li><a href="#activity3">Activity3</a></li>
					<li><a href="#activity4">Activity4</a></li>
					<li><a href="#activity5">Activity5</a></li>
					<li><a href="#activity6">Activity6</a></li>					
					</ul>
					<a class="btn small" href="#more-groups" style="margin-left: 5px;">More</a>					
				</div>
			</div>
			<br/>
			<div class="row">
				<div class="span3" style=""> 
				<a class="btn danger small" href="createGroup.php">
					<span class="glyphicon glyphicon-plus-sign">
					Create Group
					</span>
				</a>
				</div>
			</div>
		  </div>
		  
		  <div class="span8 rackerbook-column" style="min-height: 500px; border-right: 1px solid #E0E0E0; padding-right: 10px;"><!-- start of rackerbook-column -->
			<h3>Recent Posts (My Groups)</h3>
			<!-- post 1-->
			<br/>			
			<div class="row">
				<div class="span2">
					<span style="margin-left: 15px;" class="glyphicon glyphicon-user rackerbook-profile-pic"></span><!-- 50 x 50 -->
				</div>
				<div class="span6">
					<!-- POST FROM-> TO -->
					<a href="#joe.racker" class="racker-profile-link">Joe Racker</a>
					&nbsp;
					<span class="glyphicon glyphicon-play"></span>
					&nbsp;
					<a href="group.php" class="racker-group-link">Tennis</a>
					<!-- POST FROM-> TO -->
					<br/><br/>
					<div class="conversation">
						<div class="inline-input when-where">
							<span class="help-block">When: (Central Standard Time)</span>
							<input class="medium" value="8/3/2013 12:00PM" type="text" disabled>
							<!--<input value="12:00PM" style="width: 45px;" type="text">-->
							to
							<input class="medium" value="8/3/2013 1:00PM" type="text" disabled>
							<!--<input value="1:00PM" style="width: 45px;" type="text">-->					
						</div>
						<div class="inline-input when-where">
							<span class="help-block">Where:</span>
							<input class="xlarge" value="Austin Tennis Center" type="text" disabled>					
						</div>						
<pre>hello rackers I'd like to play tennis this friday. 
Anyone care to join?
</pre>
						<a href="#join-event1">Join</a>&nbsp;&nbsp;<a href="#invite-event1">Invite</a>&nbsp;&nbsp;
						<span class="timestamp">Posted on 11:00 PM 7/30/2013</span>
						<br/><br/>
						<ul class="breadcrumb racker-post">
							<li>
								<a href="#join-event1">
									<span class="glyphicon glyphicon-ok"></span>
								</a>
								<a>
									&nbsp;Jane Racker
								</a>Joined this.
							</li>
						</ul>
						<!-- comment 1-->
						<ul class="breadcrumb racker-post">
							<li>
								<div class="row">
									<div class="span1">
										<span class="glyphicon glyphicon-user rackerbook-profile-pic-small"></span>
									</div>
									<div class="span4">
										<a href="#racker1">racker1</a>
										I've never played tennis before and would like to learn.
										Can noobs join too?
										<br/><span class="timestamp">11:05 PM 7/30/2013</span>
									</div>
								</div>
							</li>
						</ul>
						<!-- comment 1-->
						<!-- comment 2-->
						<ul class="breadcrumb racker-post">
							<li>
								<div class="row">
									<div class="span1">
										<span class="glyphicon glyphicon-user rackerbook-profile-pic-small"></span>
									</div>
									<div class="span4">
										<a href="#racker2">racker2</a>
										If we can get enough rackers to join, we could match players appropriately.
										<br/><span class="timestamp">11:07 PM 7/30/2013</span>
									</div>
								</div>
							</li>
						</ul>
						<!-- comment 2-->	
						<!-- new comment to be added -->
						<ul class="breadcrumb racker-post">
							<li>
								<div class="row">
									<div class="span1">
										<span class="glyphicon glyphicon-user rackerbook-profile-pic-small"></span>
									</div>
									<div class="span4">
										<textarea class="new-post" id="post1" name="post1"></textarea>
										<div style="margin-top: 5px;">
											<center>
											<a class="btn danger">Comment</a>
											</center>
										</div>									
									</div>
								</div>							
							</li>
						</ul>
						<!-- new comment to be added -->
					</div>
				</div>
			</div>
			<!-- post 1-->
								
		  </div><!-- end of rackerbook-column -->
		  
		  <div class="span8 rackerbook-column" style="min-height: 500px;"><!-- start of rackerbook-column -->
			<h3>Recent Posts (All)</h3>
			<!-- post 1-->
			<br/>			
			<div class="row">
				<div class="span2">
					<span style="margin-left: 15px;" class="glyphicon glyphicon-user rackerbook-profile-pic"></span><!-- 50 x 50 -->
				</div>
				<div class="span6">
					<!-- POST FROM-> TO -->
					<a href="#joe.racker" class="racker-profile-link">Joe Racker</a>
					&nbsp;
					<span class="glyphicon glyphicon-play"></span>
					&nbsp;
					<a href="group.php" class="racker-group-link">Tennis</a>
					<!-- POST FROM-> TO -->
					<br/><br/>
					<div class="conversation">
						<div class="inline-input when-where">
							<span class="help-block">When: (Central Standard Time)</span>
							<input class="medium" value="8/3/2013 12:00PM" type="text" disabled>
							<!--<input value="12:00PM" style="width: 45px;" type="text">-->
							to
							<input class="medium" value="8/3/2013 1:00PM" type="" disabled>
							<!--<input value="1:00PM" style="width: 45px;" type="text">-->				
						</div>
						<div class="inline-input when-where">
							<span class="help-block">Where:</span>
							<input class="xlarge" value="Austin Tennis Center" type="text" disabled>					
						</div>						
<pre>hello rackers I'd like to play tennis this friday. 
Anyone care to join?
</pre>
						<a href="#join-event1">Join</a>&nbsp;&nbsp;<a href="#invite-event1">Invite</a>&nbsp;&nbsp;
						<span class="timestamp">Posted on 11:00 PM 7/30/2013</span>
						<br/><br/>
						<ul class="breadcrumb racker-post">
							<li>
								<a href="#join-event1">
									<span class="glyphicon glyphicon-ok"></span>
								</a>
								<a>
									&nbsp;Jane Racker
								</a>Joined this.
							</li>
						</ul>
						<!-- comment 1-->
						<ul class="breadcrumb racker-post">
							<li>
								<div class="row">
									<div class="span1">
										<span class="glyphicon glyphicon-user rackerbook-profile-pic-small"></span>
									</div>
									<div class="span4">
										<a href="#racker1">racker1</a>
										I've never played tennis before and would like to learn.
										Can noobs join too?
										<br/><span class="timestamp">11:05 PM 7/30/2013</span>
									</div>
								</div>
							</li>
						</ul>
						<!-- comment 1-->
						<!-- comment 2-->
						<ul class="breadcrumb racker-post">
							<li>
								<div class="row">
									<div class="span1">
										<span class="glyphicon glyphicon-user rackerbook-profile-pic-small"></span>
									</div>
									<div class="span4">
										<a href="#racker2">racker2</a>
										If we can get enough rackers to join, we could match players appropriately.
										<br/><span class="timestamp">11:07 PM 7/30/2013</span>
									</div>
								</div>
							</li>
						</ul>
						<!-- comment 2-->	
						<!-- new comment to be added -->
						<ul class="breadcrumb racker-post">
							<li>
								<div class="row">
									<div class="span1">
										<span class="glyphicon glyphicon-user rackerbook-profile-pic-small"></span>
									</div>
									<div class="span4">
										<textarea class="new-post" id="post1" name="post1"></textarea>
										<div style="margin-top: 5px;">
											<center>
											<a class="btn danger">Comment</a>
											</center>
										</div>									
									</div>
								</div>							
							</li>
						</ul>
						<!-- new comment to be added -->
					</div>
				</div>
			</div>
			<!-- post 1-->
			
			<!-- post 2-->
			<hr/>
			<div class="row">
				<div class="span2">
					<span style="margin-left: 15px;" class="glyphicon glyphicon-user rackerbook-profile-pic"></span><!-- 50 x 50 -->
				</div>
				<div class="span6">
					<!-- POST FROM-> TO -->
					<a href="#joe.racker" class="racker-profile-link">racker3</a>
					&nbsp;
					<span class="glyphicon glyphicon-play"></span>
					&nbsp;
					<a href="group.php" class="racker-group-link">BBQ-Cookout</a>
					<!-- POST FROM-> TO -->
					<br/><br/>
					<div class="conversation">
						<div class="inline-input when-where">
							<span class="help-block">When: (Central Standard Time)</span>
							<input class="medium" value="8/3/2013 12:00PM" type="text" disabled>
							<!--<input value="12:00PM" style="width: 45px;" type="text">-->
							to
							<input class="medium" value="8/3/2013 1:00PM" type="text" disabled>
							<!--<input value="1:00PM" style="width: 45px;" type="text">-->					
						</div>
						<div class="inline-input when-where">
							<span class="help-block">Where:</span>
							<input class="xlarge" value="Anywhere" type="text" disabled>					
						</div>					
						<pre>Anyone down for some BBQ and beer this weekend?
						</pre>
						<a href="#join-event1">Join</a>&nbsp;&nbsp;<a href="#invite-event1">Invite</a>&nbsp;&nbsp;
						<span class="timestamp">Posted on 11:30 PM 7/30/2013</span>
						<br/><br/>
						<!-- new comment to be added -->
						<ul class="breadcrumb racker-post">
							<li>
								<div class="row">
									<div class="span1">
										<span class="glyphicon glyphicon-user rackerbook-profile-pic-small"></span>
									</div>
									<div class="span4">
										<textarea class="new-post" id="post2" name="post2"></textarea>
										<div style="margin-top: 5px;">
											<center>
											<a class="btn danger">Comment</a>
											</center>
										</div>
									</div>
								</div>							
							</li>
						</ul>
						<!-- new comment to be added -->
					</div>
				</div>
			</div>
			<!-- post 2-->	

			<!-- post 3-->
			<hr/>
			<div class="row">
				<div class="span2">
					<span style="margin-left: 15px;" class="glyphicon glyphicon-user rackerbook-profile-pic"></span><!-- 50 x 50 -->
				</div>
				<div class="span6">
					<!-- POST FROM-> TO -->
					<a href="#joe.racker" class="racker-profile-link">racker3</a>
					&nbsp;
					<span class="glyphicon glyphicon-play"></span>
					&nbsp;
					<a href="group.php" class="racker-group-link">BBQ-Cookout</a>
					<!-- POST FROM-> TO -->
					<br/><br/>
					<div class="conversation">				
<pre>This is just a comment/discussion, not invitation. Users may comment on this,
but since this is just a discussion, there is no need to "Join".
</pre>
						&nbsp;&nbsp;
						<span class="timestamp">Posted on 11:30 PM 7/30/2013</span>
						<br/><br/>
						<!-- new comment to be added -->
						<ul class="breadcrumb racker-post">
							<li>
								<div class="row"> 
									<div class="span1">
										<span class="glyphicon glyphicon-user rackerbook-profile-pic-small"></span>
									</div>
									<div class="span4">
										<textarea class="new-post" id="post2" name="post2"></textarea>
										<div style="margin-top: 5px;">
											<center>
											<a class="btn danger">Comment</a>
											</center>
										</div>
									</div>
								</div>							
							</li>
						</ul>
						<!-- new comment to be added -->
					</div>
				</div>
			</div>
			<!-- post 3-->				
		  </div><!-- end of rackerbook-column -->		  
		</div>
      </div><!-- CONTENT: THIS IS WHERE THE VIEWS FOR EACH PAGE WILL BE DIFFERENT-->

      <footer>
		<center>
			<img src="images/rackerpowered.png" class="rackerpowered"/>
		</center>
      </footer>

    </div> <!-- /container -->  
  </body>
  
<script language="javascript">
$(document).ready(function(){
	setColumnHeights();
	$('.racker-dropdown').each(function(){
		$(this).dropdown();
	})
	$('.twipsy-below').each(function(){
		$(this).twipsy({ placement: "below"});
	})	
})

function setColumnHeights()
{
	var maxHeight = 500; //minumum height should be at least 500px;
	$("div.rackerbook-column").each(function(){
		var curHeight = $(this).height();
		if(curHeight > maxHeight)
		{
			maxHeight = curHeight;
		}
	})
	
	$('div.rackerbook-column').each(function(){
		$(this).css('height', maxHeight);
	})
}
</script>
</html>