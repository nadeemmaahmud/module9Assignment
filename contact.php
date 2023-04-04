<?php $title = "My Personal Blog - Contact"?>
<?php include('./headerfooter/header.php'); ?>

    <?php if (isset($_GET['status']) && $_GET['status'] == 'success') { ?>
      <p style="text-align: center;"><b>Thank you for your message! We will get back to you soon.</b></p>
    <?php } else { ?>
      <form method="post" action="contact.php">
        <input type="text" id="name" name="name" placeholder="Name" required><br>
        <input type="email" id="email" name="email" placeholder="E-mail" required><br>
        <input type="text" id="subject" name="subject" placeholder="Subject" required><br>
        <textarea id="message" name="message" rows="5" cols="40" placeholder="Write your message here..." required></textarea><br>
        <button class="button button1" type="submit">Send Message</button>
      </form>
    <?php } ?>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        header('Location: contact.php?status=error');
        exit;
        }

        $to = 'youremail@example.com';
        $headers = "From: $name <$email>";
        $body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";
        mail($to, $subject, $body, $headers);

        header('Location: contact.php?status=success');
        exit;
    }
    ?>

<?php include('./headerfooter/footer.php'); ?>