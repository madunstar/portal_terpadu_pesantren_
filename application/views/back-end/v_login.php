<html>
<meta content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" name="viewport"></meta>
<title>
    Login Admin Portal Terpadu Pesantren
</title>
 <link href="<?php echo base_url() ?>/assets/css/materialize.css" rel="stylesheet" type="text/css" media="all">
 <script type="text/javascript" src="<?php echo base_url()?>/assets/js/jquary-1.11.1.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url()?>/assets/js/materialize.js"></script>
 <body bgcolor="#006064">
 <div id="index-banner" class="section no-pad-bot cyan darken-4">
    <div class="container center" style="padding-top:50px;">
	<div id="index-banner" class="section no-pad-bot cyan darken-4">
    </div> 
			<form class="col s12 center light center grey-text text-lighten-4" style="padding-left:37%;" action="<?php echo base_url();?>index.php/admin/login/loginhalaman" method="post" name="login">
				<div class="row">
				<div class="input-field col s5">
				<i class="mdi-action-account-circle prefix"></i>
				<input placeholder="Username" type="text" name="username" maxlength="25" onkeyup="this.value=this.value.replace(/[^A-Z,^a-z,^0-9]/g,'')" value="<?php echo set_value('username');?>">
				<div class="validate"> <?php echo form_error('username');?> </div>
			</div>
			</div>
				<div class="row">
				<div class="input-field col s5">
				<i class="mdi-communication-vpn-key prefix"></i>
				<input placeholder="Password" type="password" name="password" maxlength="25" onkeyup="this.value=this.value.replace(/[^A-Z,^a-z,^0-9]/g,'')" value="<?php echo set_value('password');?>">
				<div class="validate"> <?php echo form_error('password');?> </div>
			</div>
			</div>
			<div class="row">
			<div class="input-field col s6">
            <input id="download-button" class="btn-large waves-effect waves-light" type="submit" name="login" value="Login"> </td>
			</div>
			</div>
           </form>
		   </div>
        </div>
	</div>	
</body>
</html>