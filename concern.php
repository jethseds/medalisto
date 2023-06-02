<?php session_start(); ?>
<?php include 'config/config.php'; ?>
<?php class data extends Connection{ public function managedata(){ ?>
<?php include 'data/data.php'; ?>
<?php
if (isset($_POST['surveyreport'])) {
  echo "<script>window.location.href='survey.php';</script>";
}else if (isset($_POST['adrreport'])) {
  echo "<script>window.location.href='https://primaryreporting.who-umc.org/PH';</script>";
}
?>
<!doctype html>
<html lang="en">
  <head><?php include 'include/head.php'; ?>
  </head>
  
  <body class="bg-light">
    <?php include 'include/navbar.php'; ?>
    <br><br><br><br><br>
    <div style="max-width: 1440px;" class="container">
        <div class="row m-auto">
          <div class="col-lg-12 col-md-12">
            <br>
           
           <div class="card border-0">
             <div class="card-body">
              <form method="POST" target="_blank">
                <div class="d-flex">
                  <div>
                   <img src="images/logo.png" width="150px">
                  </div>
                  <div style="color: #cee672;">
                    <p>Republic of the Philippines</p>
                    <h2 style="color: #8059a5;">MedAlisto</h2>
                    <br>
                    <small><i>partnership by San Pedro College-Pharmacy Department Students &</i></small>
                    <br>
                    <small><i>Food and Drug Administration-Center for Drug Regulation and Research</i></small>
                  </div>
                </div>


                <h4 style="color: #cee672;">Online Adverse Drug Reaction Form</h4>
                <p>Welcome!
                Report any suspected unusual side effects to medicines and vaccines including traditional and herbal medicinal products. </p>
                <p>Please provide all relevant information and as complete as possible.</p>
                <p><b>MedAlisto aims to provide a more accessible and efficient way to report Adverse Drug Effects and even complaints straight to the FDA through providing 'scannable' QR Code images across local community pharmacies in Davao City. By doing so, MedAlisto and its researchers hope to provide a step forward in developing  the methods for Adverse Drug Effect Reporting in the Philippines and subsequently improve the status of Drug Regulation and Safety for the consumers.</b></p>

                <input type="checkbox" name="termsandconditions" required> I accept the terms & conditions 
                <br>
                <small data-toggle="modal" data-target="#termsandconditions" class="text-primary" style="cursor: pointer;">View the terms & conditions</small>
                
                <div class="mt-4">
                  
                    <button type="submit" name="surveyreport" class="form-control btn btn-large btn-flat text-white" style="background-color: #cee672;">I’m here to submit the survey</button>
                    <button type="submit" name="adrreport" class="form-control btn btn-large btn-flat text-white" style="background-color: #cee672;">I’m here to submit a report to FDA</button>
                </div>
              </form>
             </div>
           </div>
          </div>
        </div>
    </div>
    <br><br><br><br><br>


<!-- Modal -->
<div class="modal fade" id="termsandconditions" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card-body">

              <h4>
                DATA PRIVACY FORM
              </h4>


              <p>
                Together with the FDA-CDRR (Food and Drug Administration-Center for Drug Regulation and Research), the MedAlisto Program is dedicated to safeguarding the security and privacy of all personal data that is in its possession. The "Data Privacy Act of 2012" (DPA), also known as Philippine Republic Act No. 10173, and its Implementing Rules and Regulations, are in compliance with this information (DPA-IRR). It outlines the data protection procedures used by FDA and MedAlisto to protect the personal information of the people it deals with and to make those people aware of their legal rights.
              </p>



              <p>
                You will be notified of any revisions to this Data Privacy Notice and Consent Form via the FDA and MedAlisto's websites. You can amend if you wish to not do it anymore in the following emails.
              </p>


              <p>
                medalistophilippines@gmail.com
              </p>

              <p>
                pharmacovigilance@fda.gov.ph
              </p>



              <p>
                Links on the website may lead to other websites with information practices that differ from ours. Visitors should review the privacy policies on the other sites since we have no control over the data that is provided to or collected by these third parties. The web sites utilize "cookies" to improve your user experience. We store your preferences in your computer's browser using text files called cookies. Unless you choose to give us your email address or other personal information, cookies by themselves do not reveal this information to us. However, if you choose to provide personally identifying information to our site, this information may be connected to the information kept in the cookie.
              </p>



              <p>
                *insert check box* Click the box if you understand and agree with the data privacy form and wished to proceed to the website
              </p>

              <h4>TERMS AND CONDITIONS</h4>
              <p>
                Welcome to the MedAlisto website. The accompanying terms and conditions of use are accepted if you use this website or view it in any way further. Please refrain from using our website if you disagree with any portion of these terms and conditions.

                <h6>Acknowledgment</h6>
                These are the rules that apply to using this service as well as the contract between you and the website. All users' rights and responsibilities with relation to using the Service are outlined in these Terms and Conditions.

                You consent to being bound by these Terms and Conditions by accessing or using the Service. You are not permitted to access the Service if You Disagree With Any Portion Of These Terms And Conditions.

                The Website's Privacy Policy must also be accepted and followed in order for you to access and use the Service. Our Privacy Policy informs You of Your privacy rights and the ways in which the law protects You while describing Our policies and practices regarding the gathering, use, and sharing of Your personal information when You use the Application or the Website. Before using Our Service, please carefully read Our Privacy Policy.

                <h6 class="mt-4">Other Website Links</h6>
                Links to third-party websites or services that are not within the Company's control or ownership may be found on our service.

                We have no control over, and accept no liability for, any third-party web sites or services' content, privacy policies, or practices. You hence acknowledge and agree that the Website shall not be responsible or liable, directly or indirectly, for any injury or damage of any kind resulting from use of or reliance on any such content, goods, or services made available on or through any such web sites or services, whether such injury or damage is foreseeable or arises from a negligent act or omission on the part of the Company.

                We firmly encourage that before using any third-party websites or services, you read their terms of service and privacy policies.

                <h6 class="mt-4">Confidentiality</h6>
                Your personal information will be protected in privacy by MedAlisto. We only collect and store information for our own purposes, such as the survey question answers. We will only use the data you voluntarily give us.


                <h6 class="mt-4">Governing Law</h6>

                The Terms and Your use of the Service shall be governed by the laws of the Country, except its rules regarding conflicts of law. Other local, state, national, or international laws may also apply to how you use the application.
                

                <h6 class="mt-4">Dispute Resolution</h6>

                You consent to first attempt an informal resolution of any issues or disagreements with the Service by speaking with the researchers or website owner.

                <h6 class="mt-4">Modifications to These Conditions</h6>
                We have the right to change these Terms at any time and at our sole discretion. We shall use reasonable efforts to give you at least 30 days' notice before any new terms go into effect, if the adjustment is important. We reserve the right to judge what contains a material change.

                You agree to be bound by the amended terms if you access or use Our Service after such revisions take effect. Please discontinue using the website and the Service if, in whole or in part, You disagree with the new terms.

              </p>
             </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    <?php include 'include/footer.php'; ?>

  </body>
</html>
<?php } } $data = new data();$data->managedata(); ?>