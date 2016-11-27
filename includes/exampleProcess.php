<?php

   // declare and initialize vars

   $hasErrors = false;

   $orderDate = $fullname = $phone = $emailAddr = $orderLoc = $caffeine = $roast = 
       $grind = $weight = $quantity = $specInstr = "";

   $referral = array("","","","","");

   $orderDateErr = $fullnameErr = $phoneErr = $emailAddrErr = 
       $quantityErr = $specInstrErr = "";


   // check if data posted
   // clean & validate data
   // print data

   if ( $_SERVER['REQUEST_METHOD'] == 'POST' && $_POST ) {

      $orderDate   = cleanData($_POST['orderDate']);         // Order Date - REQUIRED
      $orderDateErr = validate( $orderDate, 'orderDate' );
      if ( !empty($orderDateErr) ) $hasErrors = true; 


      $fullname    = cleanData($_POST['fullname']);          // Name - REQUIRED
      $fullnameErr = validate( $fullname, 'fullname' );
      if ( !empty($fullnameErr) ) $hasErrors = true;


      $phone       = cleanData($_POST['phoneNum']);          // Phone
      $phoneErr   = validate( $phone, 'phone' );
      if ( !empty($phoneErr) ) $hasErrors = true;


      $emailAddr   = cleanData($_POST['emailAdd']);          // Email Address - REQUIRED
      $emailAddrErr = validate( $emailAddr, 'emailAddr' );
      if ( !empty($emailAddrErr) ) $hasErrors = true;


      $orderLoc    = $_POST['orderLoc'];                     // Order Location
      $caffeine    = $_POST['caffeine'];                     // Caffeine choice
      $roast       = $_POST['roast'];                        // Roast choice
      $grind       = $_POST['grind'];                        // Grind choice
      $weight      = $_POST['lbs'];                          // Weight choice


      $quantity    = cleanData($_POST['qty']);               // Quantity - REQUIRED
      $quantityErr = validate( $quantity, "quantity" );
      if ( !empty($quantityErr) ) $hasErrors = true;

      $specInstr   = cleanData($_POST['specInstr']);         // Special Instructions

      // How did you hear about us?

      $referral = $_POST['referral'];

   } 


   // Basic clean data function...

   function cleanData( $data ) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
   }


   // Simple data validation

   function validate( $data, $field ) {

      switch ( $field ) {

         case 'emailAddr' : {
              if ( !empty($data) ) {
	         if ( !filter_var($data, FILTER_VALIDATE_EMAIL) ) {
	            return "Invalid Email Address.  Please Re-enter";
		 }
              } else {
                    return "Email Address is required";
              }
	      return "";
	 }


         case 'fullname' : {
	      if ( !empty($data) ) {
		 $regex = "/^[a-zA-Z\s]+$/";                            // $regex = "/^[\pL\s-'.]+[\pNd]{0,1}$/";
	         if ( !preg_match($regex, $data) ) {
	               return "Please enter name using only letters and spaces";
		 }
	      } else {
                return "Name is required";
              }
	      return "";
         }


         case 'orderDate' : {
	      if ( !empty($data) ) {
	         $dateChk = date_parse($data);
	         if ( !checkdate($dateChk[month], $dateChk[day], $dateChk[year]) ) {
	            return "Invalid Order Date.  Please Re-enter";
	         }
              } else { 
                    return "Order Date is required";
              }
	      return "";
	 }


         case 'phone' : {
              if ( !empty($data) && !preg_match("/^[0-9]{10}$/", $data) ) {
	           return "Invalid Phone Number. Please Re-enter";
	      } 
	      return "";
	 }


	 case 'quantity' :  {
	       if ( !empty($data) ) {
	          if ( !preg_match("/\d+/",$data) || ( $data <1 || $data > 10 ) )  {
	                return "Invalid Quantity.  Please enter a number between 1 and 10";
		  }
	       } else {
	          return "Quantity is required";
	       }
	       return "";
         }


         default :   break;
      }

   }

?>
