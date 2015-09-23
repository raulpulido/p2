<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Password Generator</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="all"/>
    <?php require('logic.php'); ?>
</head>
	<body id="main_body" >
        <div id="form_container">
            <div id="title"><h1>Password Generator</h1></div>
            <form id="form_password" class="passwordGenerator"  method="post" action="index.php">
                <div class="form_description">
                    <p><h2>This form captures some parameters used to generate a  xkcd style security password.</h2></p>
					<div>
						<img src="password_strength.png" alt="xyc Style Password" height="420" width="800">
					</div>
                </div>	
                <div class="displayPassword">
                    <input id="newpassword" name="newpassword" class="result" type="text" maxlength="255" value="<?php echo $newPassword; ?> "/> <strong>Lenght :<?php echo $lenghtNewPassword; ?></strong>
                </div>	
                
                <div class="options">						
                    <ul>
                            <li id="minWords" >
                                <label class="description" for="minWords">Minimum Words </label>
                                <div>
                                    <select class="select small" id="minWords" name="minWords"> 
                                        <option value="2" >2</option>
                                        <option value="3" >3</option>
                                        <option value="4" selected="selected">4</option>
                                        <option value="5" >5</option>
                                        <option value="6" >6</option>
                                        <option value="7" >7</option>
                                        <option value="8" >8</option>
                                        <option value="9" >9</option>
                                    </select>
                                </div> 
                            </li>
                            <li id="separator" >
                                <label class="description" for="separator">Separator</label>
                                <div>
                                    <select class="select small" id="separator" name="separator"> 
                                        <option value="" selected="selected"></option>
                                        <option value="-" >-</option>
                                        <option value=" " >(space)</option>
                                    </select>
                                </div> 
                            </li>
                            <li id="checkOptions" >
                        <label class="description" for="options">Options </label>
                        <span>
                            <input id="ckFirstLetterUppercase" name="ckFirstLetterUppercase" class="checkbox" type="checkbox" value="1" />
                            <label class="choice" for="ckFirstLetterUppercase">Make First Letter Uppercase</label>
                            <input id="ckAddNumber" name="ckAddNumber" class="checkbox" type="checkbox" value="1" />
                            <label class="choice" for="ckAddNumber">Add randon number to the end</label>
                            <input id="ckSpecialChar" name="ckSpecialChar" class="checkbox" type="checkbox" value="1" />
                            <label class="choice" for="ckSpecialChar">Add (Random Special characters !@#$%^&*()
                            </label>
                        </span> 
                        </li>
                        <li class="buttons">
                            <input id="generatePassword" class="button_text" type="submit" name="generatePassword" value="Generate Password" />
                        </li>
                    </ul> 
                </div>
            </form>
			
        </div>
	</body>
</html>
