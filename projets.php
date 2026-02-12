<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Projets - Portfolio</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/navbar.css">
    <link rel="stylesheet" href="CSS/projects.css">
    <link rel="stylesheet" href="CSS/footer.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Section Projets -->
    <section id="projets" class="projects" style="margin-top: 80px; min-height: calc(100vh - 140px);">
        <div class="container">
            <h2 class="section-title">Mes Projets</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-image">
                        <div class="image-placeholder">Projet 1</div>
                    </div>
                    <div class="project-info">
                        <h3>Projet E-commerce</h3>
                        <p>Site de vente en ligne avec panier et système de paiement intégré.</p>
                        <div class="project-tags">
                            <span class="tag">HTML</span>
                            <span class="tag">CSS</span>
                            <span class="tag">JavaScript</span>
                        </div>
                        <a href="#" class="btn btn-primary" style="margin-top: 1rem; font-size: 0.9rem; padding: 0.7rem 1.5rem;">Voir le projet</a>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-image">
                        <div class="image-placeholder">Projet 2</div>
                    </div>
                    <div class="project-info">
                        <h3>Application Météo</h3>
                        <p>Application web interactive affichant les prévisions météorologiques en temps réel.</p>
                        <div class="project-tags">
                            <span class="tag">API</span>
                            <span class="tag">CSS3</span>
                            <span class="tag">JavaScript</span>
                        </div>
                        <a href="#" class="btn btn-primary" style="margin-top: 1rem; font-size: 0.9rem; padding: 0.7rem 1.5rem;">Voir le projet</a>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-image">
                        <div class="image-placeholder">Projet 3</div>
                    </div>
                    <div class="project-info">
                        <h3>Portfolio Designer</h3>
                        <p>Portfolio créatif pour un designer graphique avec galerie interactive.</p>
                        <div class="project-tags">
                            <span class="tag">HTML5</span>
                            <span class="tag">CSS Grid</span>
                            <span class="tag">Animation</span>
                        </div>
                        <a href="#" class="btn btn-primary" style="margin-top: 1rem; font-size: 0.9rem; padding: 0.7rem 1.5rem;">Voir le projet</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>
