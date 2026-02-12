<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Me Contacter - Portfolio</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/navbar.css">
    <link rel="stylesheet" href="CSS/contact.css">
    <link rel="stylesheet" href="CSS/footer.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Section Contact -->
    <section id="contact" class="contact" style="margin-top: 80px;">
        <div class="container">
            <h2 class="section-title">Me Contacter</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Restons en contact</h3>
                    <p>N'hésitez pas à me contacter pour discuter de vos projets ou opportunités de collaboration.</p>
                    <div class="contact-details">
                        <div class="contact-item">
                            <span class="icon">📧</span>
                            <span>email@exemple.com</span>
                        </div>
                        <div class="contact-item">
                            <span class="icon">📱</span>
                            <span>+33 6 00 00 00 00</span>
                        </div>
                        <div class="contact-item">
                            <span class="icon">📍</span>
                            <span>Paris, France</span>
                        </div>
                    </div>
                </div>

                <form class="contact-form">
                    <div class="form-group">
                        <input type="text" placeholder="Votre nom" required>
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Votre email" required>
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Votre message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>
