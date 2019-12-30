<?
function getIP() {
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forwarded = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if (filter_var($client, FILTER_VALIDATE_IP)) {
                return $client;}
        elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
                return $forward;}
        else {
                return $remote;}
} 
?>

<form action="https://app.hatchbuck.com/onlineForm/submit.php" method="post" name="form_999999123458">
        <input name="q4_email" type="email" placeholder="Email Address" />
        <?php
	        # Calling function to populate the variable, then creating a hidden input and populating it
	        $ip = getIP();
	        echo '<input name="whatever_hatchbuck_generates" type="hidden" value="' . $ip . '" />';
        ?>
        <!-- Hatchbuck boilerplate -->
        <input type="hidden" name="formID" value="12345678910">
        <input type="hidden" name="enableServerValidation" value="1">
        <input type="hidden" name="enable303Redirect" value="0">
        <input type="hidden" id="simple_spc" name="simple_spc" value="12345678910-12345678910">
        <button type="submit">Submit</button>
</form> 