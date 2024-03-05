<?php 
  require('header.php');
  require('db_operations.php');

  $currentPage = 'a-propos';

  $dbops = new DBOperations();

  // var_dump(count($dbops->getAllActualities()));
?>

  <main id="main">

    <!-- ======= a-propos Section ======= -->
    <section id="a-propos" class="a-propos">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>a-propos</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/img/a-propos-rounded.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>Docteur DESMERGES Jean-claude – Artiste plasticien</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-rounded-right"></i> <strong>Date de naissance : </strong> 1 May 1995</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>site web : </strong> www.desmerges.com</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Tel : </strong> +33 630715580 </li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Ville : </strong> Paris, France</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-rounded-right"></i> <strong>Age : </strong> 30 ans</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Niveau : </strong> Doctorat</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Email : </strong> jc.desmerges@icloud.com</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Freelance : </strong> Disponible</li>
                </ul>
              </div>
            </div>
            <p>
              Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
              Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End a-propos Section -->

    <!-- ======= Skills Section ======= -->
    <!-- Section formations -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Activités</h2>
       <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>  -->
        </div>

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Dessins <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Peintures <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Gravures <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Voyages <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

    </section>
    <!-- Fin de section formation -->
  <!-- End Skills Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>réalisations</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row counters">

          <div class="col-lg-6 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="16" data-purecounter-duration="1" class="purecounter"></span>
            <p>Expositon en France</p>
          </div>

          <div class="col-lg-6 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="39" data-purecounter-duration="1" class="purecounter"></span>
            <p>Exposition à l'étranger</p>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!--=== Section actualité suivant le modèle de portfolio === -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Actualités</h2>
        </div>
          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
              <?php 
                    $i = 0;
                    foreach($dbops->getAllActualities() as $actuality): $i++
              ?>   

                <?php if(count($dbops->getAllActualities()) % 2 == 0) : ?>
                  <div class="col-lg-6 col-md-6 portfolio-item filter-app">
                <?php else : ?>
                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <?php endif;?>
                    <div class="portfolio-wrap">
                      <img src="<?=$actuality['picture_url']?>" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4><?=$actuality['title']?></h4>
                        <p>
                            <?=$actuality['details']?>
                        </p>
                        <div class="portfolio-links">
                          <a href="portfolio-details.php?actuality=<?=$actuality['id']?>" class="" data-glightbox="type: external" title="Details de l'actualité"><i class="bx bx-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
            <?php endforeach; ?>
        </div>

        
      </div>
    </section>
    <!-- FIn de la section actualité -->

    <!-- Performance Section
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Performances</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-red">
              <h4><a href="">Dele Cardo</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
              <div class="portfolio-wrap">
                <div class="ratio ratio-16x9" loop muted>
                  <iframe src="assets/img/portfolio/performances/LernerWorld-spot-2024.mp4" title="YouTube video" type="video/mp4" allowfullscreen></iframe>
                </div>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-red">
              <h4><a href="">Dele Cardo</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
              <div class="portfolio-wrap">
                <div class="ratio ratio-16x9" loop muted>
                  <iframe src="assets/img/portfolio/performances/LernerWorld-spot-2024.mp4" title="YouTube video" type="video/mp4" allowfullscreen></iframe>
                </div>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-red">
              <h4><a href="">Dele Cardo</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
              <div class="portfolio-wrap">
                <div class="ratio ratio-16x9"  loop muted>
                  <iframe src="assets/img/portfolio/performances/LernerWorld-spot-2024.mp4" title="YouTube video" type="video/mp4" allowfullscreen></iframe>
                </div>
                
              </div>
            </div>
          </div>
        </div>

      </div>
    </section> End Services Section -->

    

  </main><!-- End #main -->

<?php 
  require('footer.php');
?>