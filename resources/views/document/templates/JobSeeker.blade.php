<html>

<head>
    <title>Barangay Certification (First Time Jobseeker)</title>
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
                    <h6>BARANGAY CERTIFICATION<br>
                    ( FIRST TIME JOB SEEKER ASSISTANCE ACT-RA 11261 )</h6>
                </b> </u>

        </div>     
        <br>
            <p class="message" style="margin-top: -30px;">This is to certify that Mr./Ms. <u>{{$docres->fname}} {{$docres->mname}} {{$docres->lname}}</u> a resident of <u>{{$docres->address}}</u> for <u>{{$docres->years}}</u>
            years and <u>{{$docres->months}}</u> months, is a qualified availee of <b>R.A. 11261 or the First Time Job Seeker Act of 2019.</b>
            resident of Barangay 386, Zone-39, District-3, Manila.</p>

        
            <p class="message">I further certify that the holder/bearer was informed his/her rights, including the duties and responsibilities according to 
                RA 11261 through the <b>Oath of Undertaking</b> he/she has signed and executed in the presence of Barangay Official/s.
            </p>
    
            <p class="message">Signed this <u>{{$date->day}} </u>day of <u>{{$month}} {{$date->year}} </u> in the City/Municipality of <u>{{$docres->municipality}}</u>.</p>

            <p class="message">This certification is valid only until <u>{{$date->day}} {{$month}} {{$date->addYear()->year}} </u> One (1) year from the issuance.</p>
        
        

        <div class="secretary">
            <br>
   
            @foreach($user as $users)
            @if ($users->hasrole('secretary'))
         <u>   <h3>{{$users->name}}</h3> </u>
            @endif
            @endforeach
            <p style="margin-top: -20px;">Punong Barangay / Authorized Barangay Official and Position</p>
          
            <u><p>{{$date->day}} {{$month}} {{$date->year}}</p></u>
            <p style="margin-top: -15px;">Date</p>
        </div>

 
        <div class="certifiedby">
            <br>
            <p>Witnessed by:</p>
          
            @foreach($user as $user)
            @if ($user->hasrole('chairman'))
         <u>   <h3>{{$user->name}}</h3> </u>
            @endif
            @endforeach
            <p style="margin-top: -20px;">Punong Barangay / Authorized Barangay Official and Position</p>
            <u><p>{{$date->day}} {{$month}} {{$date->year}}</p></u>
            <p style="margin-top: -20px;">Date</p>
        </div>
   
    <div class="seal">
        <br><br>
        <p>This is not Valid without a seal.</p>
    </div>

</body>

</html>



<style type="text/css">
    h6{
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


    p.message {
  
        text-align: justify;
        text-indent: 30px;
        font-size: 18px;
        padding-left: 50px;
        padding-right:50px;
    }

    .to {
        margin-left: -520px;
        text-align: center;
        font-size: 25px;
    }

    .certifiedby {
        margin-left: 450px;
        text-align: center;
        margin-top: -20px;
    }



    .seal {
        margin-left: -400px;
        text-align: center;
    }

    .secretary{
        margin-top: -10px;
        margin-left: 450px;
        text-align: center;
    }
</style>


<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>


