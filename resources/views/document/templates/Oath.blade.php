<html>

<head>
    <title>Oath of Undertaking</title>
</head>

<body>

    <div class=header>      
        <h4>REPUBLIC OF THE PHILIPPINES<br>
            CITY OF MANILA <br>
            OFFICE OF THE BARANGAY CHAIRMAN<br>
       BARANGAY 386 ZONE 39<br>
       DISTRICT III <br><br>
  <u>  #401 J. Nepomucemo St. Quiapo 1001 Manila CP# 0995-342-3135 Email: 386zone39@gmail.com </u> </h4>

  <div class=logo>
    <img src="https://i.ibb.co/GQzgtG1/My-project.png" alt="Brgy386logo" height="100px"
    width="100px">
</div>

<div class=logo2>
    <img src="https://i.ibb.co/Nnn3kGQ/Ph-seal-ncr-manila-svg.png" alt="Manilalogo" height="95px"
    width="95px">
</div>

    </div>

  
        <div class="certificate">
            <u> <b>
                    <h6>OATH OF UNDERTAKING</h6>
                </b> </u>
        </div>
        <p class="republic">Republic Act 11261 - First Time Jobseekers Assistance Act</p>
        
        <div class="message">

            <p>I <u>{{$docres->fname}} {{$docres->mname}} {{$docres->lname}}</u> , <u> {{$docres->age}} </u> years of age, a resident of
            <u>{{$docres->address}}</u> for <u>{{$docres->years}}(years)</u>  <u>{{$docres->years}}(months)</u>availing the benefits of <b>Republic Act 11261,</b> other wise known as
        the <b>First Time Jeobsekers Act of 2019,</b> do hereby declare agree and undertaking to abide and be bound by the following:</p>
                <p>1. That this is the first time that I will actively look for a job therefor requesting that a barangay Certificate be issued in my
                    favor to avail the benefits of the law.</p>
                <p>2. That I am aware that the benefits and privilages under the said law shall be valid onlu for (one) 1 year from the date that the
                    barangay certificate.
                </p>
                <p>3. That I can avail benefists of the law only once.</p>
                <p>4. That I can understand that the personal information shall be included in the Roster List of the First Time Jobseekers and will not be
                    used to any unlawful purpose.
                </p>
                <p>5. That I will inform the barangay once I get employeed.</p>
                <p>6. That I am not beneficiary of the Job Start Program under RA 10869 and other laws that give similar exemptions for the 
                    documents or transaction exempted under RA 11261.
                </p>
                <p>7. That if issued the requesteed certification, I will not use the same in any fraud neither falsify nor help and/or assist in the 
                    fabrication of the said certification.
                </p>
                <p>8. That this undertaking is made soley fo the purpose of obtaining Barangay Certification conisist with the objective of RA 
                    11261 and not for any other purpose.
                </p>
                <p>9. That I consent to the use of my personal information pursuant to the Data Privacy Act and other applicable laws, rules, and 
                    regulations.
                </p>


            <p> Signed this <u>{{$date->day}} </u>day of <u>{{$month}} {{$date->year}} </u> in the City/Municipality of 
                <u>{{$docres->municipality}}</u>.</p>


        </div>
       
        <div class="jobseeker">
            <p>Signed by:</p>
           <h3><u>{{$docres->fname}} {{$docres->mname}} {{$docres->lname}}</u></h3> 
           <b> <p style="margin-top: -20px;">First Time Jobseeker Name </p> </b>
           
        </div>


        <div class="certifiedby">
            <p>Witnessed by:</p>
            @foreach($user as $user)
            @if ($user->hasrole('chairman'))
          <u>  <h3>{{$user->name}}</h3> </u>
            @endif
            @endforeach
            <p style="margin-top: -20px;">Punong Barangay</p>
        </div>
   
</body>

</html>



<style type="text/css">
    p.republic{
        margin-top: -45px;
        font-size: 14px;
        text-align: center;
    }
      .logo {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: -550px;
        margin-top: -150px;
    }

    .logo2 {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: 550px;
        margin-top: -100px;
    }

   
    .header {
        margin-top: 10px;
        text-align: center;
    }

    .certificate {
        text-align: center;
        font-size: 30px;
        text-decoration: double;
    }

    .message {
        text-align: justify;
        text-indent: 40px;
        font-size: 16px;
        margin-top: -20px;
        padding-left: 50px;
        padding-right: 50px;
    }

  .jobseeker{
 
        margin-left:80px
  
  }

    .certifiedby {
        margin-top: -120px;
         margin-left: 400px;
         text-align: center;
     }

   
     .seal {
        margin-left: -350px;
        text-align: center;
    }

</style>


<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>


