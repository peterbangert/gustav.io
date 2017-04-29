
<?php 


include("templates/header.html");   

// Set the default name 
$action = 'home'; 
// Specify some disallowed paths 
$disallowed_paths = array('header', 'footer'); 
if (!empty($_GET['action'])) { 
    $tmp_action = basename($_GET['action']); 
    // If it's not a disallowed path, and if the file exists, update $action 
    if (!in_array($tmp_action, $disallowed_paths) && file_exists("templates/{$tmp_action}.html")) 
        $action = $tmp_action; 
} 
// Include $action 
include("templates/$action.html"); 

include("templates/footer.html");

?>
