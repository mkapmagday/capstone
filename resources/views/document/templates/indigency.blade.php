<html>

<head>
    <title>Certificate of Indigency</title>
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
                    <h6>CERTIFICATE OF INDIGENCY</h6>
                </b> </u>
        </div>
        <br>
        <div class=cont>
            <p class="message">This is to certify that <u>{{$docres->fname}} {{$docres->mname}} {{$docres->lname}}</u> with postal address @ <u>{{$docres->address}}</u> is a bonafide
            resident of Barangay 386, Zone-39, District-3, Manila.</p>
              
            <p style="text-indent: 130px; margin-top: 30px;">It is further certified that:</p>
            <p class="message" style="margin-top: -15px;"> HE/SHE has known to me of good moral character and can be trusted; 
                <p class="message" style="margin-top: -15px;">   HE/SHE belong to indigent family of our barangay.</p>
                            <p style="text-indent: 250px;">No Meager Income</p>
                            <p style="text-indent: 250px;">No Stable Job</p>

            <p style="text-indent: 70px;  padding-left: 50px;
            padding-right:50px;"> This certification is being issued upon the request by the above mentioned for <u>{{$docres->purpose}}</u>. </p>

            <br>
            <p style="text-align: center;"> Given this <u>{{$date->day}} </u>day of <u>{{$month}} {{$date->year}} </u>.
            </p>
        </div>
   
        <div class="certifiedby">
            <br><br>
             <br><br>
            <br><br>
            @foreach($user as $user)
            @if ($user->hasrole('chairman'))
          <u>  <h3>{{$user->name}}</h3> </u>
            @endif
            @endforeach
        
            <p style="margin-top: -20px;">Punong Barangay</p>
        </div>
 
    <div class="seal">
        <br><br>
        <p>This is not Valid without a seal.</p>
    </div>

</body>

</html>



<style type="text/css">
    .cont {
        margin-top: -50px;
    }
    p {
        font-size: 20px;
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
        font-size: 40px;
        text-decoration: double;
    }

    .message {
        text-align: justify;
        text-indent: 30px;
        font-size: 20px;
        padding-left: 50px;
        padding-right:50px;

    }

    .to {
        margin-left: -520px;
        text-align: center;
        font-size: 25px;
    }

    .certifiedby {
        margin-top: -70px;
        margin-left: 400px;
        text-align: center;
    }

    .background {
        background-image: url('./image/logo2.JPG');
        background-repeat: no-repeat;
        background-position: center;
        background-size: 50% 100%;
    }

  
    .seal {
        margin-left: -350px;
        text-align: center;
    }

</style>


<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>


