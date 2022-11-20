<html>

<head>
    <title>Certificate of Oneness</title>
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
                    <h6>CERTIFICATE OF ONENESS</h6>
                </b> </u>

        </div>

            <p class="message">This is to certify that <u>{{$docres->fname}} {{$docres->mname}} {{$docres->lname}}</u> and the name <u>{{$docres->fname}} {{$docres->mname}} {{$docres->lname}}</u> in your masterlist are same person
        and a resident of this barangay.</p>

            <br>
         
            <p class="message">This certification is being issued upon request of the above mentioned name for <u>{{$docres->purpose}}</u>
        and for whatever legal purpose it may serve best.</p>
            <br>
            <p class="message"> This certification is given this <u>{{$date->day}} </u>day of <u>{{$month}} , {{$date->year}} </u>.</p>

            <br>   <br>   <br>
            

       
        <div class="secretary">
      
            <p>Prepared by:</p>
            @foreach($user as $users)
            @if ($users->hasrole('secretary'))
          <u>  <h3>{{$users->name}}</h3> </u>
            @endif
            @endforeach
            <p style="margin-top: -20px; margin-left: 50px">  Secretary</p>
        </div>


        <div class="certifiedby">
       
            <p>Certified by:</p>
     
            @foreach($user as $user)
            @if ($user->hasrole('chairman'))
          <u>  <h3>{{$user->name}}</h3> </u>
            @endif
            @endforeach
   
            <p style="margin-top: -20px;">Punong Barangay</p>
        </div>
   
    <div class="seal">
        <br><br>  <br><br>  <br><br>
        <p>This is not Valid without seal </p>
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
        text-indent: 40px;
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
        margin-top: -140px;
        margin-left: 400px;
        text-align: center;
    }

 

    .seal {
        margin-left: -350px;
        text-align: center;
    }

    .secretary{
        margin-left:70px
    }

</style>


<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>


