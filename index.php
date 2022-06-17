<?php 
require './include/config.php';
require './include/header.php';
?>
      <div class="section accent">
         <div class="w-container">
            <div class="section-title-group">
               <h2 class="section-heading centered white">Advanced Encryption Standard (AES)</h2>
               <div class="section-subheading center off-white">A Free, Fast, Secure client side File Encryption.</div>
            </div>
            <div class="w-row">
               <div class="w-col w-col-12">
                  <div class="white-box transparent">
                    <div class="container h-100">
                        <div class="row h-100 justify-content-center align-items-center">
                    
                          <div class="col sm-12 col-md-8 col-lg-6">
                           
                            <div class="custom-file">
                                <label class="custom-file-label" for="customFile">
                                    <div id="file-placeholder" style="color: #fff;">Choose a file to encrypt/decrypt</div>
                                  </label><br>
                              <input type="file" class="form-field w-input" maxlength="256" id="customFile">
                             
                            </div>                   
                            <br>
                            <div class="form-group">
                              <div class="input-group mb-3" style="color: #000;">
                                <label for="inputPassword"></label>
                                <input type="text" id="inputPassword" placeholder="Enter a Decryption Key or generate one (recommended)"
                                     class="form-field w-input" maxlength="256" aria-describedby="passwordHelpInline">
                                <div class="input-group-append">
                                  <button class="button tab w-inline-block w-tab-link" type="button" id="generateButton" data-toggle="tooltip"
                                    data-placement="right" title="Generate Secure Key"><i style="color: #fff;" class="fas fa-sync-alt"></i></button>
                                </div>
                              </div>
                    
                              <small id="passwordHelpInline" class="text-muted">
                                <b style="color: #fff;">Strength</b>: <span id="strength-text"></span>
                              </small>
                              <div class="progress progress-sm" style="color: #000;" >
                                <div class="progress-bar bg-secondary" id="strength-meter" role="progressbar" style="width: 4;"
                                  aria-valuenow="0" aria-valuemin="0" aria-valuemax="4"></div>
                              </div>
                              <br><br>
                            </div>
                            
                            <button type="button" class="button tab w-inline-block w-tab-link" id="encryptBtn">Encrypt</button>
                            <button type="button" class="button tab w-inline-block w-tab-link" id="decryptBtn">Decrypt</button><br><br>
                            <button type="button" class="button tab w-inline-block w-tab-link" id="resetBtn" style="display: none"><i
                                class="fas fa-redo"></i> Reset</button>
                            <br>
                            <small class="text-muted">
                              <P style="color: #fff;">files are not uploaded to server, everything is done offline in your browser.</P>
                            </small>
                            <br>
                            <div id="error"></div>
                            
                          </div>
                          <!--end col-->
                        </div><!-- end row -->
                        <div class="row h-100 justify-content-center align-items-center" style="color: #fff;">
                          <div class="col-sm-12 col-md-8 col-lg-6" style="color: #fff;" id="results"></div>
                          <!--end col-->
                        </div><!-- end row -->
                    
                      </div><!-- end container -->
                  </div>
               </div>
               
            </div>
         </div>
      </div>
      <div class="section">
        <div class="w-container">
           <div class="section-title-group">
              <h2 class="section-heading centered">Made By</h2>
              <!-- <div class="section-subheading center">This is some text inside of a div block.</div> -->
           </div>
           <div class="w-row">
              <div class="w-col w-col-6">
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p> -->
                 </div>
              </div>
              <div class="w-col w-col-6">
                 <div data-w-id="29c25774-570b-ddb2-69b5-f4ddbb194afd" style="opacity:0.9" class="white-box">
                    <img src="assets/images/ravi.jpg" width="210" alt="" class="grid-image"/>
                    <h3>Ravi kumar</h3>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p> -->
                 </div>
              </div>
           </div>
        </div>
     </div> 
     
<?php 
require './include/footer.php';
?>
 