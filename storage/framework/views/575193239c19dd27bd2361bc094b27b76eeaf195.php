<html>

<head>
    <title>Cetification</title>
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
             <b><h5>CERTIFICATION</h5></b> 
        </div>
     
        <p class="message" >
            <b class="to"> TO WHOM IT MAY CONCERN: </b> <br>
     
            <p class="message" >This is to certify that Mr. / Ms. <u><?php echo e($docres->fname); ?> <?php echo e($docres->mname); ?> <?php echo e($docres->lname); ?></u>, born on<u> <?php echo e($bdate->format('F')); ?> <?php echo e($bdate->day); ?> <?php echo e($bdate->year); ?> </u> is a bonafide
            resident of Barangay 386, Zone-39, District III, Manila, with postal address at <u><?php echo e($docres->address); ?></u>, Quiapo. Manila.</p>

            <p class="message">He/She has known to me of good moral character and can be trusted. He/She has never been involved in any unlawful activities and a law abiding citizen
                of this Barangay up to the present.
            </p>

            <p class="message"> This certification is being issued upon the request by the above mentioned for whatever legal purposes it may serve. </p>
                    <p class="message"><b>AS PER REQUIREMENT AND/OR TO SUPPORT HIS/HER</b> 
                   <div class=choices>     
                    <table>  
                        <tr>
                            <th> </th>
                            <th> </th>
                            
                        </tr>   
                        <tr> <td>( ) Requirement for Employment &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</td>          <td>  ( ) School Admission / Requirement </td>  </tr>
                            <tr>  <td>( ) Hospital Purposes      </td>            <td>     ( ) Processing Calamity </td>  </tr>
                                <tr>  <td>( ) Medical Purposes    </td>               <td>     ( ) Loan Purposes  </td> </tr>
                                    <tr>  <td> ( ) Bank Transaction   </td>              <td>       ( ) ID for Senior Citizen </td>  </tr>
                                        <tr>  <td> ( ) For Travel Abroad   </td>             <td>       ( ) Transfer of Residence </td>  </tr>
                                            <tr>  <td> ( ) Financial Assistance  </td>          <td>       ( ) Relocation Purposes </td>  </tr>
                                                <tr>  <td> ( ) School or Office ID  </td>           <td>        ( ) Proof of Indigency </td>  </tr>
                                                    <tr>  <td>  ( ) Business Registration  </td>        <td>         ( ) Maynilad Requirement </td>  </tr>
                                                        <tr>  <td> ( ) Proof of Residency  </td>             <td>       ( ) <u>Other</u></p> </td> </tr>
                    </table>
                   </div>
            <p class="message"><b>IN WITNESS WHEREOF</b> I have here unto set my hand and affixed the official seal of this office. Done in the City of Manila, this
            <u><?php echo e($date->day); ?> </u>day of <u><?php echo e($month); ?> <?php echo e($date->year); ?> </u>. </p>

        <div class="secretary">
            <p>Attested by:</p>  
            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($users->hasrole('secretary')): ?>
          <u>  <h3><?php echo e($users->name); ?></h3> </u>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
            <p style="margin-top: -20px;">Barangay Secretary</p>
        </div>


        <div class="certifiedby">
            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($user->hasrole('chairman')): ?>
          <u>  <h3><?php echo e($user->name); ?></h3> </u>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
            <p style="margin-top: -20px;">Punong Barangay</p>
        </div>
  
    <div class="seal">
        <br><br>
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
        font-size: 15px;
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

    .choices {
      margin-left: 90px

    
    }
    .certifiedby {
       margin-top: -70px;
        margin-left: 400px;
        text-align: center;
    }


    .seal {
        margin-left: -350px;
        text-align: center;
    }
    .secretary{
        margin-left:100px
    }


</style>


<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>


<?php /**PATH C:\xampp\htdocs\capstone\resources\views/document/templates/certification.blade.php ENDPATH**/ ?>