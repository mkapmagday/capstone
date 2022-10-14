<html>

<head>
    <title>Certifcate of Stipend</title>
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
                    <h5>BARANGAY CERTIFICATION</h5>
                </b> </u>
        </div>
        
        <p class="message" >
            <b class="to"> TO WHOM IT MAY CONCERN: </b> <br> </p>

        
     

            <p class="message">This is to certify that <u>{{$docres->fname}} {{$docres->mname}} {{$docres->lname}}</u> was born on <u>{{$bdate->format('F')}} {{$bdate->day}} {{$bdate->year}}</u> is a bonafide
            resident of Barangay 386, Zone-39, District-3, Manila. </p>

            <br>
         
            <p class="message">This further certify that <u>{{$docres->fname}} {{$docres->mname}} {{$docres->lname}}</u> authorized his/her <u>{{$docres->relation}}, {{$docres->representative}}</u>
        to claim his/her <u>{{$docres->purpose}}</u> on his/her <u> Social Pension Stipend </u> behalf because he/she <u>{{$docres->reason}}</u>. </p>
            <br>
            <p class="message"> This certification is given this <u>{{$date->day}} </u>day of <u>{{$month}} {{$date->year}} </u>.</p>

            <br>
            
       
       
        <div class="representative">  
            <br> 
            <u><h3>{{$docres->representative}}</h3></u>
            <p style="margin-top: -20px;"> Name of Representative </p>
            <p style="margin-top: -20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (Signature)</p>
        </div>

        <div class="beneficiary">  
            <br>     <br> 
           <u> <h3>{{$docres->fname}} {{$docres->mname}} {{$docres->lname}}</h3> </u>
            <p style="margin-top: -20px;">&nbsp;&nbsp;&nbsp;&nbsp; NAME of Beneficiary</p>
            <p style="margin-top: -20px;">(Signature and Thumb mark)</p>
        </div>

        <div class="certifiedby">
            <br><br>
            @foreach($user as $user)
            @if ($user->hasrole('chairman'))
         <u>   <h3>{{$user->name}}</h3> </u>
            @endif
            @endforeach
            <p style="margin-top: -20px;">Barangy Captain</p>
        </div>
 
    <div class="seal">
        <br><br><br><br><br>
        <p>This is not Valid without a seal.</p>
    </div>

</body>

</html>



<style type="text/css">
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
        justify-content: center;
        text-align: justify;
        text-indent: 70px;
        font-size: 20px;
        padding-left: 50px;
        padding-right:50px;
        
    }   
    b.to {
        justify-content: center;
        text-indent: -390px;
        text-align: center;
        font-size: 15px;
        margin-top: -50px;
        display: block;
    }

    .certifiedby {
        margin-top: -250px;
        margin-left: 400px;
        text-align: center;
    }



    .seal {
        margin-left: -350px;
        text-align: center;
    }
    .representative {
        margin-left: 50px
    }
  
    .beneficiary{
        margin-left: 50px
    }
</style>


<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>


