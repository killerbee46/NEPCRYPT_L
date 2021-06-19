@extends('frontend.encro')
@section('crypto')

<script>
    function decrypt(){
        var etext = document.getElementById('ciphertext').value;
        document.getElementById('decoded').value = etext;
    }
</script>
<div class="encrypt" style="text-align: center; padding-top: 10px;">
    <div style="background-color: black;color: crimson; font-size: 1.5em;margin-left: 5%;margin-right: 5%;">
        Enter the encoded cipher here...
    </div>
    <div>
        <textarea style="height: 28vh;width: 90%;background-color: black;color: crimson; font-size: 1.3em;" class="ciphertext" id="ciphertext"></textarea>
    </div>
    <div style=" margin-bottom: 10px;font-size: 2em;">
        <button onclick="decrypt()" class="btn btn-danger">DECRYPT</button>
    </div>
    <div style="background-color: black;color: aliceblue; font-size: 1.5em;margin-left: 5%;margin-right: 5%;">
        See your result here...
    </div>
    <div>
        <Textarea style="height: 28vh;width:90%;background-color: black;color: aliceblue; font-size: 1.3em;" class="decoded" id="decoded"></Textarea>
    </div>
    
    
</div>


@endsection