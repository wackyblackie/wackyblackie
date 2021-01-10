<html>
<head>
    <title>Confirmation</title>
    <link rel="shortcut icon" href="https://apache.org/icons/unknown.gif" />
</head>
<body>

<div style="display: inline;"><span style="display:inline;"><h1 style="white-space: nowrap; display: inline;">Confirm Order</h1><img src="https://apache.org/icons/unknown.gif" alt="?" style="white-space: nowrap; vertical-align: center; display: inline; padding-left: 1.25%;"></span><br><br></div>
<form action="javascript:submit()">
Your name: <input type="text" readonly value='<?php echo $_POST["parent_name"]; ?>'><br>
Your email address is: <input type="email" readonly value='<?php echo $_POST["email"]; ?>'><br>
Your Child's name is: <input type="text" readonly value='<?php echo $_POST["child_name"]; ?>'><br>
Your Child's grade is: <input type="text" readonly value='<?php echo $_POST["select_grade"]; ?>'><br>
Allergies/food restrictions: <textarea readonly rows="1"><?php echo $_POST["comment"]; ?></textarea><br>
Does your child want the food provided: <input type="text" readonly value='<?php echo $_POST["select_food"]; ?>'><br>
How you want your receipt: <input type="text" readonly value='<?php echo $_POST["select_receipt"]; ?>'><br>
</form>
<br>
<p><b>If all of this information looks, correct press "Submit". Otherwise, press "Go Back".</b></p><br>

<input type="submit" value="Submit"><input type="button" value="Go Back" onclick="history.back">

</body>
</html>