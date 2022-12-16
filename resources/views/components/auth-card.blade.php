<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100"
    style="background-image: url('https://i.ibb.co/ss3RXh3/Login.jpg'); background-repeat: no-repeat; 
    background-attachment: fixed; background-size: cover;">
    <div>
        {{ $logo }}
    </div>

    <div class=" sm: mt-3 px-3 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg" style="background-image: linear-gradient(white, #7fa046); width:650px;">
    <center>
    {{ $slot }}
    </center>
        
    </div>
</div>
