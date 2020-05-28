<article class="container ptitecarte">
            <div class="row">
              <div class="col-md-3 col-lg-3 col-sx-12 col-sm-12">
                 <br>

                <div class="panel panel-default" >
                   <div class="panel-heading">
                     <h2 class="th2"style="color:#196331;">Reebook <em>rbk-001</em></h2>

                    <div class="card" >
                         <img class="card-img-top" src="imageSenegal/shoep1.jpg" alt="Card image" >
                         <br>
                         <br>
  <a  class="btn btn-default btn-sy"  id="myBtn" data-toggle="modal" data-target="#modalAppointment" onclick="showDiv('welcomeDiv')">LIRE PLUS</a>
                          <a  class="btn btn-default btn-sy" id="myBtn2" href="" data-toggle="collapse">ACHETER</a>

                   </div>
                   </div>


                   <div id="myModal" class="modal">

                     <!-- Modal content -->
                     <div class="modal-content">
                       <div class="modal-header">
                         <span class="close">&times;</span>

                         <h2>veuillez vous inscrire s'il vous plait</h2>

                       </div>
                       <div class="modal-body">
                         <div class="row">
                           <div class="col-md-6">
                            <!-- code pour s'inscrire -->
                            <div class="wrapper"  id="welcomeDiv" style="display:block;" >
    <form class="" action="recup.php" method="POST" onsubmit=" return validate()" name="vform">
      <div>
        <input type="text" name="username" class="textinput" placeholder="entrez votre nom">
         <div id="name_error" class="val_error" ></div>
      </div>
      <div>
        <input type="text" name="user-sirname" class="textinput" placeholder="entrez votre prenom">
         <div id="sirname_error" class="val_error" ></div>
      </div>
      <div>
        <select class="textinput" name="selection" id="select">
          <option value="0">veuillez choisir svp</option>
        <option value="AMI">Ami(e)</option>
        <option value="FAMILLE">Famille</option>

        </select>
             <div id="select_error" class="val_error"></div>
      </div>
      <div>
        <input type="text" name="town" class="textinput" placeholder="entrez votre ville">
         <div id="town_error" class="val_error" ></div>
      </div>
      <div>
        <input type="text" name="contact" class="textinput" placeholder="entrez votre contact">
         <div id="contact_error" class="val_error" ></div>
      </div>
      <div>
        <input type="password" name="mdp" class="textinput" placeholder="sasir mot de passe">
         <div id="mdp_error" class="val_error" ></div>
      </div>
      <div>
        <input type="password" name="Cmdp" class="textinput" placeholder="comfirmer le mot de passe">
         <div id="confmdp_error" class="val_error" ></div>
      </div>
       <div>
      <a href="recup.php">  <input type="submit" name="valider" class="btn btn-success" value="valider"></a>
        <br>
        <input type="reset" name="modifier" class="btn btn-danger" value="Annuler">
       </div>
    </form>
  </div>
                           </div>
                           <div class="col-md-6">
                             <img src="imageSenegal/shoep1.jpg" alt="image">
                           </div>
                         </div>
                       </div>
                       <div class="modal-footer">
                         <button class="btn  btn-primary" type="button" name="button"> ACHETER</button>
                       </div>
                     </div>
                   </div>
                   </div>
                   <div id="myModal2" class="modal">

                     <!-- Modal content -->
                     <div class="modal-content">
                       <div class="modal-header">
                         <span class="close2">&times;</span>
                         <h2>FAIRE  UN CALCUL</h2>
                       </div>
                       <div class="modal-body">
                         <form class="formulaire_de_calcul" action="" method="post">
                                <center>
                           <h4>formulaire d'achat d'articles</h4>
                           <table class="tableau">
                           <tr>
                             <td> <label for="list"> Faites votre choix:</label>  </td>
                             <td>
                               <select class="maSelection" name="listarticle" id="article" onchange="PrixU()" required>
                                 <option value="">  choisir selon le motif et la couleur </option>
                                 <option value="1"> motif en dein-rouge bordeau</option>
                                 <option value="2"> motif en sky-noir fumée</option>
                                 <option value="3">  motif en peau-bleu ciel</option>
                                 <option value="4"> motif en cuir-noir optimale</option>
                                 <option value="5"> motif en stresh-toute couleur </option>
                               </select>
                             </td>
                           </tr>

                     <tr>
                       <td> <label for="seller">prix unitaire</label></td>
                       <td> <input type="text" name="pu" disabled="disabled" id="pu" /></td>
                     </tr>

                     <tr>
                       <td>   <label for="seller"> combien en-voulez vous?</label></td>
                       <td> <input type="text" name="seller" id="nombre" onkeyup="PrixU()" value="" required></td>
                     </tr>
                     </table>
                     <br><br><br>

                        <label for="seller">total achat</label>
                          <input type="text" name="totalachat" id="total" disabled="disabled" />

                       </center>



                       </div>
                       <div class="modal-footer">
                          <button class="btn btn-primary" type="submit" name="button" onclick="validation()"> VALIDER</button>

                           <button class="btn btn-danger" type="reset" name="button"> ANNULER</button>
                       </div>
                       </form>
                     </div>

                   </div>

                   </div>

             <div class="col-md-3 col-lg-3 col-sx-12 col-sm-12">
                <br>
                <div class="panel panel-default" >
                  <div class="panel-heading">
                    <h2 class="th2"style="color:#196331;">MKraus- <em>MK10</em></h2>

                   <div class="card">
                        <img class="card-img-top" src="imageSenegal/shoep2.jpg" alt="Card image" >
                        <br>
                        <br>
              <a  class="btn btn-default btn-sy"  id="myBtn3" data-toggle="modal" data-target="#modalAppointment">LIRE PLUS</a>
              <a  class="btn btn-default btn-sy" id="myBtn31" href="" data-toggle="collapse">ACHETER</a>
                  </div>
                  </div>


                     <div id="myModal3" class="modal">

                       <!-- Modal content -->
                        <div class="modal-content">
                           <div class="modal-header">
                              <span class="close3">&times;</span>

                                <h2>Description de la chaussure <em>  MARKUS KRAUS MK10</em></h2>
                            </div>
                            <div class="modal-body">
                             <div class="row">
                             <div class="col-md-6">
                               <p><em> LA markus kraus MK10 </em> cree par le celebre ceateur MARKUS KRAUS ,<br>
                                        est l'une des merveilles dans le monde des Hommes.</p>
                                        <p> MARKUS KRAUS vient d'une famille d'ouvrier et <br>
                                           lui a voulu faire un peut de difference. </p>
                               <p> Une difference tout en restant non loin de ses siens.... <br></p>
                               <p>reebook rbk-001 est reputer pour sa multiplicite en theme de couleur, <br>
                                 et aussi de matiere . Eh oui,<br>
                                  de matiere car elle est un remede pour les maux de pieds,elle masse nos pieds<br>
                                 tandis que nous effectuons nos tache ou que nous soyons...</p>
                             </div>
                              <div class="col-md-6">
                              <img src="imageSenegal/DAKARG1.jpg" alt="image">
                              </div>
                              </div>
                             </div>
                              <div class="modal-footer">
                               </div>
                               </div>
                              </div>
                  <!-- <div  class="panel-body collapse" id="pikine">
                    <div class="card-body">
                         <h4 class="card-title">Le ville de PIKINE.</h4>
                         <p class="card-text"> Avec 1,2 millions d'habitants,mais avec  PIKINE est donc la deuxieme plus grande ville
                           du pays. Elle est située non loin de DAKAR. Elle s'etend sur 95km carrée et a une densité de 12.300 habitants
                           au km carrée. La croissance de la ville est dementielle,car PIKINE est tres convoité par les senegalais
                           qui quittent les campagnes pour la ville.
                           L'exode rurale dope donc la population de la ville.</p>

                    </div>
                  </div> -->
                  </div>
                  <div id="myModal31" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                      <div class="modal-header">
                        <span class="close31">&times;</span>
                        <h2>FAIRE  UN CALCUL</h2>
                      </div>
                      <div class="modal-body">
                        <form class="formualaire_de_calcul" action="" method="post">

                          <h4>formulaire d'achat d'article</h4>
                          <table>
                          <tr>
                            <td>  <label for="list"> veuillez choisir votre article:</label>  </td>
                            <td>
                              <select class="" name="listarticle" id="article" onchange="PrixU1()">
                                <option value="0">choisir le plat</option>
                                <option value="1"> attieke poisson braisé</option>
                                <option value="2">attieke poisson grillé</option>
                                <option value="3"> attieke poisson thon</option>
                                <option value="4">attieke poisson mouillé</option>
                                <option value="5">attieke poisson operé</option>
                              </select>
                            </td>
                          </tr>

                    <tr>
                      <td> <label for="seller">prix unitaire</label></td>
                      <td> <input type="text" name="pu" disabled="disabled" id="pu" /></td>
                    </tr>

                    <tr>
                      <td>   <label for="seller"> combien en-voulez vous?</label></td>
                      <td> <input type="number" name="seller" id="nombre" onkeyup="PrixU1()" value="listarticle"></td>
                    </tr>
                    </table>
                    <br><br><br>
                    <center>
                       <label for="seller">total achat</label>
                         <input type="text" name="totalachat" id="total" disabled="disabled" />

                      </center>


                        </form>
                      </div>
                      <div class="modal-footer">
                        <h3>Modal Footer</h3>
                      </div>
                    </div>

                  </div>

                  </div>

                <div class="col-md-3 col-lg-3 col-sx-12 col-sm-12">
                   <br>
                   <div class="panel panel-default" >
                     <div class="panel-heading">
                       <h2 class="th2"style="color:#196331;">D&G  <em>YounBoys</em> </h2>

                      <div class="card">
                           <img class="card-img-top" src="imageSenegal/shoep7.jpg" alt="Card image" >
                           <br>
                           <br>
                           <a  class="btn btn-default btn-sy"  id="myBtn" data-toggle="modal" data-target="#modalAppointment">LIRE PLUS</a>
                           <a  class="btn btn-default btn-sy" id="myBtn2" href="" data-toggle="collapse">ACHETER</a>
                     </div>
                     </div>


                     <div  class="panel-body collapse" id="touba">
                       <div class="card-body">
                            <h4 class="card-title">DOLCE GABBANA YOUNG-BOYS</h4>
                            <p class="card-text"> </p>

                       </div>
                     </div>
                     </div>

                     </div>

             <div class="col-md-3 col-lg-3 col-sx-12 col-sm-12">
                <br>
                <div class="panel panel-default" >
                  <div class="panel-heading">
                    <h2 class="th2"style="color:#196331;">BOOT <em>Actor</em></h2>

                   <div class="card"  >
                        <img class="card-img-top" src="imageSenegal/shoep6.jpg" alt="Card image" >
                        <br>
                        <br>
                        <a  class="btn btn-default btn-sy"  id="myBtn" data-toggle="modal" data-target="#modalAppointment">LIRE PLUS</a>
                        <a  class="btn btn-default btn-sy" id="myBtn2" href="" data-toggle="collapse">ACHETER</a>
                  </div>
                  </div>


                  <div  class="panel-body collapse" id="GD">
                    <div class="card-body">
                         <h4 class="card-title">Les villes de GUEDIAWAYE et THIES .</h4>
                         <p class="card-text">  300 000 habitants environ vivent a GUEDIAWAYE,la quatrieme plus grande ville du senegal.</p>
                         <p class="card-text"> Avec son agglomeration la ville de THIES atteint 2,1 million de personnes. Mais dans la ville
                           c'est seulement 263 000 habitants que l'on recense</p>


                    </div>
                  </div>
                  </div>

                  </div>
         </div>
         </article>
         <article class="container ptitecarte">
             <div class="row">
               <div class="col-md-3 col-lg-3 col-sx-12 col-sm-12">
                  <br>

                 <div class="panel panel-default" >
                    <div class="panel-heading">
                      <h2 class="th2"style="color:#196331;">SOULIER <em> TtNic</em></h2>

                     <div class="card" >
                          <img class="card-img-top" src="imageSenegal/shoe7.jpg" alt="Card image">
                          <br>
                          <br>
                       <a  class="btn btn-default btn-sy"  id="myBtn" data-toggle="modal" data-target="#modalAppointment">LIRE PLUS</a>
                           <a  class="btn btn-default btn-sy" id="myBtn2" href="" data-toggle="collapse">ACHETER</a>

                    </div>
                    </div>


                    <div id="myModal" class="modal">

                      <!-- Modal content -->
                      <div class="modal-content">
                        <div class="modal-header">
                          <span class="close">&times;</span>

                          <h2>Description de la ville de DAKAR</h2>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-md-6">
                              <p> Située a l'ouest du senegal, la ville de DAKAR? <br>  est situé sur les bords de l'ocean
                                atlantique.
                              La capitale du senegal rassemble 1,5 millions d'habitants.</p>
                              <p> Cette ville s'etend sur 84 kilometres carrés et a une densité <br> de pratiquement
                              13000 habitants au km carré.  <br>Avec l'agglomeration la population  atteint donc les 3,5 milions d'habitants. </p>
                              <p> Située a l'ouest du senegal, la ville de DAKAR? <br>  est situé sur les bords de l'ocean
                                atlantique.
                            </div>
                            <div class="col-md-6">
                              <img src="imageSenegal/DAKARG1.jpg" alt="image">
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                        </div>
                      </div>
                    </div>
                    </div>
                    <div id="myModal2" class="modal">

                      <!-- Modal content -->
                      <div class="modal-content">
                        <div class="modal-header">
                          <span class="close2">&times;</span>
                          <h2>FAIRE  UN CALCUL</h2>
                        </div>
                        <div class="modal-body">
                          <form class="formulaire_de_calcul" action="" method="post">

                            <h4>formulaire d'achat d'article</h4>
                            <table border="1">
                            <tr>
                              <td>  <label for="list"> veuillez choisir votre article:</label>  </td>
                              <td>
                                <select class="" name="listarticle" id="article" onchange="PrixU()">
                                  <option value="0">choisir le plat</option>
                                  <option value="1"> attieke poisson braisé</option>
                                  <option value="2">attieke poisson grillé</option>
                                  <option value="3"> attieke poisson thon</option>
                                  <option value="4">attieke poisson mouillé</option>
                                  <option value="5">attieke poisson operé</option>
                                </select>
                              </td>
                            </tr>

                      <tr>
                        <td> <label for="seller">prix unitaire</label></td>
                        <td> <input type="text" name="pu" disabled="disabled" id="pu" /></td>
                      </tr>

                      <tr>
                        <td>   <label for="seller"> combien en-voulez vous?</label></td>
                        <td> <input type="number" name="seller" id="nombre" onkeyup="PrixU()" value="listarticle"></td>
                      </tr>
                      </table>
                      <br><br><br>
                      <center>
                         <label for="seller">total achat</label>
                           <input type="text" name="totalachat" id="total" disabled="disabled" />

                        </center>


                          </form>
                        </div>
                        <div class="modal-footer">
                          <h3>Modal Footer</h3>
                        </div>
                      </div>

                    </div>

                    </div>

              <div class="col-md-3 col-lg-3 col-sx-12 col-sm-12">
                 <br>
                 <div class="panel panel-default" >
                   <div class="panel-heading">
                     <h2 class="th2"style="color:#196331;">SOULIER <em> Amas</em></h2>

                    <div class="card" >
                         <img class="card-img-top" src="imageSenegal/shoe4.jpg" alt="Card image" >
                         <br>
                         <br>
               <a  class="btn btn-default btn-sy"  id="myBtn3" data-toggle="modal" data-target="#modalAppointment">LIRE PLUS</a>
               <a  class="btn btn-default btn-sy" id="myBtn31" href="" data-toggle="collapse">ACHETER</a>
                   </div>
                   </div>


                      <div id="myModal3" class="modal">

                        <!-- Modal content -->
                         <div class="modal-content">
                            <div class="modal-header">
                               <span class="close3">&times;</span>

                                 <h2>Description de la ville de PIKINE</h2>
                             </div>
                             <div class="modal-body">
                              <div class="row">
                              <div class="col-md-6">
                                 <p> Avec 1,2 millions d'habitants,mais avec  PIKINE est donc la deuxieme plus grande ville
                   du pays. Elle est située non loin de DAKAR. Elle s'etend sur 95km carrée et a une densité de 12.300 habitants
                         au km carrée. La croissance de la ville est dementielle,car PIKINE est tres convoité par les senegalais
                          qui quittent les campagnes pour la ville.
                        L'exode rurale dope donc la population de la ville.</p>
                              </div>
                               <div class="col-md-6">
                               <img src="imageSenegal/DAKARG1.jpg" alt="image">
                               </div>
                               </div>
                              </div>
                               <div class="modal-footer">
                                </div>
                                </div>
                               </div>
                   </div>
                   <div id="myModal31" class="modal">

                     <!-- Modal content -->
                     <div class="modal-content">
                       <div class="modal-header">
                         <span class="close31">&times;</span>
                         <h2>FAIRE  UN CALCUL</h2>
                       </div>
                       <div class="modal-body">
                         <form class="formualaire_de_calcul" action="" method="post">

                           <h4>formulaire d'achat d'article</h4>
                           <table>
                           <tr>
                             <td>  <label for="list"> veuillez choisir votre article:</label>  </td>
                             <td>
                               <select class="" name="listarticle" id="article" onchange="PrixU1()">
                                 <option value="0">choisir le plat</option>
                                 <option value="1"> attieke poisson braisé</option>
                                 <option value="2">attieke poisson grillé</option>
                                 <option value="3"> attieke poisson thon</option>
                                 <option value="4">attieke poisson mouillé</option>
                                 <option value="5">attieke poisson operé</option>
                               </select>
                             </td>
                           </tr>

                     <tr>
                       <td> <label for="seller">prix unitaire</label></td>
                       <td> <input type="text" name="pu" disabled="disabled" id="pu" /></td>
                     </tr>

                     <tr>
                       <td>   <label for="seller"> combien en-voulez vous?</label></td>
                       <td> <input type="number" name="seller" id="nombre" onkeyup="PrixU1()" value="listarticle"></td>
                     </tr>
                     </table>
                     <br><br><br>
                     <center>
                        <label for="seller">total achat</label>
                          <input type="text" name="totalachat" id="total" disabled="disabled" />

                       </center>


                         </form>
                       </div>
                       <div class="modal-footer">
                         <h3>Modal Footer</h3>
                       </div>
                     </div>

                   </div>

                   </div>

                 <div class="col-md-3 col-lg-3 col-sx-12 col-sm-12">
                    <br>
                    <div class="panel panel-default" >
                      <div class="panel-heading">
                        <h2 class="th2"style="color:#196331;"><span>Air Jordan-7</span</h2>

                       <div class="card" >
                            <img class="card-img-top" src="imageSenegal/G.jpg" alt="Card image" style="margin-Left:-4px;">
                            <br>
                            <br>
                            <a  class="btn btn-default btn-sy"  id="myBtn" data-toggle="modal" data-target="#modalAppointment">LIRE PLUS</a>
                            <a  class="btn btn-default btn-sy" id="myBtn2" href="" data-toggle="collapse">ACHETER</a>
                      </div>
                      </div>


                      <div  class="panel-body collapse" id="touba">
                        <div class="card-body">
                             <h4 class="card-title">Le ville de TOUBA.</h4>
                             <p class="card-text"> Cette ville compte 875 000 habitants,mais avec l'agglomeration c'est
                               quasiment 2 millions d'habitants.Meme si ce chiffre peut etre porté a caution,
                              il revele en tout cas l'emmergence d'une grande ville au senegal</p>

                        </div>
                      </div>
                      </div>

                      </div>

              <div class="col-md-3 col-lg-3 col-sx-12 col-sm-12">
                 <br>
                 <div class="panel panel-default" >
                   <div class="panel-heading">
                     <h2 class="th2"style="color:#196331;">Soulier-<span> colon</span></h2>

                    <div class="card">
                         <img class="card-img-top" src="imageSenegal/G2.jpg" alt="Card image" style="margin-Left:-4px;" >
                         <br>
                         <br>
                         <a  class="btn btn-default btn-sy"  id="myBtn" data-toggle="modal" data-target="#modalAppointment">LIRE PLUS</a>
                         <a  class="btn btn-default btn-sy" id="myBtn2" href="" data-toggle="collapse">ACHETER</a>
                   </div>
                   </div>


                   <div  class="panel-body collapse" id="GD">
                     <div class="card-body">
                          <h4 class="card-title">Les villes de GUEDIAWAYE et THIES .</h4>
                          <p class="card-text">  300 000 habitants environ vivent a GUEDIAWAYE,la quatrieme plus grande ville du senegal.</p>
                          <p class="card-text"> Avec son agglomeration la ville de THIES atteint 2,1 million de personnes. Mais dans la ville
                            c'est seulement 263 000 habitants que l'on recense</p>


                     </div>
                   </div>
                   </div>

                   </div>
          </div>
          </article>