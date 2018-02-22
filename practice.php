<?php

$page_title = "Assignment 1";
include('includes/header.html');
//require('includes/header.html');


?>
<form action="PHP Final/assignment1.php" method="post">
    <label for="fName">First Name:</label>
    <input type="text" id="fName" name="fName"/><br/>
    <label for="lName">Last Name:</label>
    <input type="text" id="lName" name="lName"/><br/>
    <label for="address">Street Address:</label>
    <input type="text" id="address" name="address"/><br/>
    <label for="city">City:</label>
    <input type="city" id="city" name="city"/><br/>
    <label for="state">State:</label>
    <?php
    $states = array (
        'AL'=>'Alabama', 'AK'=>'Alaska', 'AZ'=>'Arizona', 'AR'=>'Arkansas', 'CA'=>'California', 'CO'=>'Colorado',
        'CT'=>'Connecticut', 'DE'=>'Delaware', 'FL'=>'Florida', 'GA'=>'Georgia', 'HI'=>'Hawaii', 'ID'=>'Idaho',
        'IL'=>'Illinois', 'IN'=>'Indiana', 'IA'=>'Iowa', 'KS'=>'Kansas', 'KY'=>'Kentucky', 'LA'=>'Louisiana', 'ME'=>'Maine',
        'MD'=>'Maryland', 'MA'=>'Massachusetts', 'MI'=>'Michigan', 'MN'=>'Minnesota', 'MS'=>'Mississippi', 'MO'=>'Missouri',
        'MT'=>'Montana', 'NE'=>'Nebraska', 'NV'=>'Nevada', 'NH'=>'New Hampshire', 'NJ'=>'New Jersey', 'NM'=>'New Mexico',
        'NY'=>'New York', 'NC'=>'North Carolina', 'ND'=>'North Dakota', 'OH'=>'Ohio', 'OK'=>'Oklahoma', 'OR'=>'Oregon',
        'PA'=>'Pennsylvania', 'RI'=>'Rhode Island', 'SC'=>'South Carolina', 'SD'=>'South Dakota', 'TN'=>'Tennessee', 'TX'=>'Texas',
        'UT'=>'Utah', 'VT'=>'Vermont', 'VA'=>'Virginia', 'WA'=>'Washington', 'WV'=>'West Virginia', 'WI'=>'Wisconsin', 'WY'=>'Wyoming',);

    echo '<select name="state">';
    foreach ($states as $value) {
        echo '<option value="' . $value . '">' . $value . '</option>';
    } echo '</select>';
    ?><br/>
    <label for="zip">Zip Code:</label>
    <input type="text" id="zip" name="zip"/>


</form>



<?php


include('includes/footer.html');
?>