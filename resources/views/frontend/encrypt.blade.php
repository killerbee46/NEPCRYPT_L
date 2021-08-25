@extends('frontend.encro')
@section('crypto')

<script src="aes.js"></script>
<script> 
    function encrypt(){
        var ptext = document.getElementById('plain').value;
        // Encrypt
        var ciphertext = CryptoJS.AES.encrypt(ptext, 1234);
        document.getElementById('encoded').value = ciphertext;
    }
</script>
<div class="encrypt" style="text-align: center; padding-top: 10px;">
    <div style="background-color: black;color: chartreuse; font-size: 1.5em;margin-left: 5%;margin-right: 5%;">
        Enter your messages here...
    </div>
    <div>
        <textarea style="height: 28vh;width: 90%;background-color: black;color: chartreuse; font-size: 1.3em;" class="plain" id='plain'></textarea>
    </div>
    <div style=" margin-bottom: 10px;font-size: 2em;">
        <button class="btn btn-success" onclick="encrypt()">ENCRYPT</button>
    </div>
    <div style="background-color: black;color: crimson; font-size: 1.5em;margin-left: 5%;margin-right: 5%;">
        See your result here...
    </div>
    <div>
        <Textarea style="height: 28vh;width:90%;background-color: black;color: crimson; font-size: 1.3em;" class="encoded" id='encoded'></Textarea>
    </div>
    
    
</div>


@endsection