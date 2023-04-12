<?php
    require "header.php";
?>


<title>Portefolio | CV </title>
<body>
    <div class="ecranCV">
        <header>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="#parcours">Parcours</a></li>
                    <li><a href="#experience">Expérience</a></li>
                    <li><a href="#loisir">Loisirs</a></li>
                    <li><a href="#contacteCV">Contact</a></li>
                </ul>
            </nav>
        </header>


        <img src="media/Maxime.jpeg" class="image" style="width: 100%;">

        <div id="parcours"></div>
        <div class="titre">
            <h1>
                Mon parcours
            </h1>
        </div>

        <section class="parcours">
            <div class="parcoursGauche">
                <p> 
                    Bonjour je suis Lucas Arredondo. J'ai 19 ans et j'ai commencé mon parcours professionnel au lycée St-Croix-St-Euverte
                    où j'ai suivis une année de 3ème préparatoire professionnel. Suite à l'obtention de mon brevet professionnel je me suis
                    dirigé naturellement dans le domaine de l'informatique. J'ai donc réalisé un Baccalauréat professionnel Système Numérique
                    au lycée St-Paul-Bourdon-Blanc. Actuellement dans ce même lycée où j'étudie pour avoir mon BTS SIO
                    option SLAM (Solution Objet Applicatif Métiers).

                </p>
            </div>
            
            <div id="container">
                <div id="spooky">
                    <div id="body">
                        <div id="eyes"></div>
                        <div id="mouth"></div>
                        <div id="feet">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div id="shadow"></div>
            </div>
        </section>

        <section name="etudes">
            <div class="cardCV" style="width: 50%; margin-left: 23%;">
            
                <h2> Formation 3ème Préparatoire Professionnel <br> Option INDUSTRIEL</h2>
                    <h3> de 2017 à 2018 </h3>
                    <img src="media/st_Croix_Image.png" alt="Image Saint-Croix-Saint-Euverte"  class="imgEtude">
            </div>


            <div class="cardCV infoCarte"  style="width: 50%; margin-left: 23%; margin-top: 50px;">
                <h2> Formation Baccalauréat Professionnel SN <br> Option RISC</h2>
                    <h3> de 2018 à 2021 </h3>
                    <img src="media/StPaulBourdon_Image.jpg" class="imgEtude" alt="Image Saint-Paul-Bourdon-Blanc">
            </div>
        

            <div class="cardCV infoCarte" style="width: 50%; margin-left: 23%; margin-top: 50px;">
                <h2> Formation Brevet Technicien Supérieur SIO <br> Option SLAM</h2>
                    <h3> de 2021 à 2023 </h3>
                    <img src="media/StPaulBourdon_Image.jpg" class="imgEtude" alt="Image Saint-Paul-Bourdon-Blanc">
            </div>
        </section>

        <div id="experience"></div>
        <section class="experiences" style="margin-top: 50px;">
            <div class="titre">
                <h1>
                    Mon expérience
                </h1>
            </div>


            <div class="cardCV" style="width: 50%; margin-left: 23%; margin-top: 50px;">
                <h2> Plus de 36 semaines de stage professionnels<br> <br>
                    5 semaines dans différents métiers manuels<br> 
                    31 semaines dans le metier de l'informatique</h2>
                    <h3> de 2017 à 2023 </h3>
                    <img src="media/developpeur_image.webp" class="imgExp" alt="illustration informatique">
            </div>

            <div style="display: flex;">
                <div style="width: 80%;">
                    <div class="cardExp">
                        <h2> 11 semaine de stage dans le domaine de l'infrastructure réseau <br> <br>
                            5 semaines en tant qu'assistant DSI à RRG Boigny-sur-Bionne <br>
                            6 semaines en tant qu'assistant DSI à RRG Fleury-les-Aubrais.
                        </h2>
                    </div>
                </div>

                <div style="width: 80%;">
                    <div class="cardExp">
                        
                        <h2> 20 semaine de stage dans le domaine du développement applicatif et web <br> <br>
                            8 semaines en tant qu'assistant développeur à RRG Boigny-sur-Bionne <br>
                            12 semaines en tant développeur en autoformation au CHRO.
                        </h2>
                    </div>
                </div>
            </div>

        </section>

        <section class="loisir" id="loisir">
            <div class="titre" style="margin-top: 50px;">
                <h1>
                    Mes loisirs
                </h1>
            </div>

            <div class="containerLoisir">
                <img src="media/muscu_image.jpg" alt="Lucas Musculation" class="imgLoisir">
                <div class="place">
                    <div class="overlayLoisir">
                        <div class="textLoisir">
                            <h3>
                                Musculation Haltérophilie <br> <br>
                                Commencé en Septembre 2019
                            </h3>
                        </div>
                    </div>
                </div>
              </div>

              <div class="containerLoisir" style="margin-left: 50%;">
                <img src="media/volley_image.PNG" alt="Lucas Volley" class="imgLoisir">
                    <div class="place">
                        <div class="overlayLoisir">
                            <div class="textLoisir">
                                <h3>
                                    VolleyBall BeachVolley <br> <br>
                                    Commencé en Janvier 2021 <br> <br>
                                    Compétition M21 et Sénior
                                </h3>
                            </div>
                        </div>
                    </div>
              </div>

              <div class="containerLoisir" style="margin-left: 23%;">
                <img src="media/NES_image.jpg" alt="Logo Nantes Esport" class="imgLoisir">
                <div class="place">
                    <div class="overlayLoisir">
                        <div class="textLoisir">
                            <h3>
                                Ex Joueur Semi professionnel <br> <br>
                                Commencé en janvier 2018 <br> <br>
                                Compétition Européen dans la structure Nantes Esport
                            </h3>
                        </div>
                    </div>
                </div>
              </div>

        </section>

        
        <div class="titre" style="margin-top: 50px;">
            <h1>
                Contact
            </h1>
        </div>

        <section id="contacteCV">
            <div class="cardContacte" style="width: 70%; margin-left: 12%; margin-top: 50px;">
                <div style="display: flex;">
                    <div style="width: 33%;">
                        <span class="material-symbols-outlined" style="margin-left: 10%;">
                            mail
                        </span>
                        <p> lucasarredondo@outlook.fr</p>
                    </div>
                    <div style="width: 33%;">
                        <span class="material-symbols-outlined">
                            call
                        </span>
                        <p> 06-24-65-29-49 </p>
                    </div>
                    <div style="width: 33%;">
                        <span class="material-symbols-outlined">
                            house
                        </span>
                        <p> 32 rue Rodolphe Richard <br>
                                45160 Olivet </p>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div style="display:flex;">
                <img src="media/copyright_image.png" alt="icon copyright" class="imgContacte">
                <p class="pConctacte">
                    Lucas Arredondo | 2023
                </p>
            </div>
        </footer>
    </div>

    
</body>

</html>