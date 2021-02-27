<?php

	$name   = $GET['nama'];
  $email  = $GET['email'];  

  global $wpdb; 
  $table_name = $wpdb->prefix . "subscriber";
  $wpdb->insert($table_name, array('subs_name' => $name, 'subs_email' => $email) );
  }
    //setting up the form
    function insertuser() {

      $name   = $_POST['subs_name'];
      $email  = $_POST['subs_email'];  

      global $wpdb; 
      $table_name = $wpdb->prefix . "subscriber";
      $wpdb->insert($table_name, array('subs_name' => $name, 'subs_email' => $email) );
      }

if( isset($_POST['submitForm']) ) insertuser();

?>