@extends('frontend.encro')
@section('crypto')

<script src="../../essential/aes.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"
    integrity="sha256-/H4YS+7aYb9kJ5OKhFYPUjSJdrtV6AeyJOtTkw6X72o=" crossorigin="anonymous"></script>
<script>
    function encrypt() {
        var enckey = document.getElementById('enckey').value;
        var ptext = document.getElementById('plain').value;
        var encrypted = CryptoJS.AES.encrypt(ptext, enckey);
        document.getElementById('encoded').value = encrypted;
    }


</script>
<div class="row">
    <div class="col-md-6">
        <div class="instruction">
            Enter your messages here...
        </div>
        <!-- <form action="/encrypt" method="POST">
                <div>
                    <textarea class="plain" id='plain' style="width: 100%;height:60vh"></textarea>
                </div>
                <button type="submit" class="btn btn-warning">Enrypt</button>
            </form> -->
        <div>
            <textarea class="plain" id='plain' style="width: 100%;height:60vh"></textarea>
        </div>
        <span style="color: aliceblue;">Enter Key here:</span>
            <input type="text" name='enckey' id='enckey'>
        <button onclick="encrypt()" class="btn btn-warning">Enrypt</button>
    </div>
    <div class="col-md-6">
        <div class="instruction">
            See your result here...
        </div>
        <div>
            <Textarea class="encoded" id='encoded' style="width: 100%;height:60vh"></Textarea>
        </div>
    </div>
</div>


</div>


@endsection