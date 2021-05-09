<?php

    include('submission.php'); 

?>

<head>
    <title>justice-Dev | Contact Me</title>
</head>

    <?php include('template/header.php'); ?>

    <div id="contact">
    <div class="contact_img_holder">
        <h3>I'm happy to connect, listen and help. Let's work together and build something awesome. Let's turn your idea to an even greater product. <i>Don't <b>hesitate</b> to contact me</i></h3>
        <img src="assets/src/images/contact.png" alt="contact_illustration">
    </div>  

    <form action="" id="contact_form" method="POST">
        
    <?php if (!$res) : ?>
        <p></p>
    <?php elseif ($res['message'] === 'Your message has been sent, I\'ll get Back to you shortly!') : ?>
        <p id="successResponse" class="response"><?php echo $res['message']; ?></p>
    <?php elseif ($res['message'] === 'ERROR! your message wasn\'t Sent, Please try again') : ?>
        <p id="errMsgResponse" class="response"><?php echo $res['message']; ?></p>
    <?php endif ?>    

      <input type="text" name="firstname" id="firstname" placeholder="Enter your Firstname" value="<?php echo htmlspecialchars($firstname); ?>">
      <p class="Err" id="fNameErr"><?php echo $err['firstname']; ?></p>
      <input type="text" name="lastname" id="lastname" placeholder="Enter your Lastname" value="<?php echo htmlspecialchars($lastname); ?>">
      <p class="Err" id="lNameErr"><?php echo $err['lastname']; ?></p>
      <input type="email" name="email" id="email" placeholder="Email Address" value="<?php echo htmlspecialchars($email); ?>">
      <p class="Err" id="emailErr"><?php echo $err['email']; ?></p>
      <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"><?php echo htmlspecialchars($message); ?></textarea>
      <p class="Err" id="msgErr"><?php echo $err['message']; ?></p>
      <input type="submit" name="submit">
    </form>
    </div>


    <?php include('template/footer.php'); ?>
    