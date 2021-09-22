<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
    <div class="card col-10 m-auto">
        <div class="card-header">
            Sản phẩm đã chọn
        </div>
        <div class="card-body p-0">
            <div class="d-flex">
                <div class="p-2 border">STT</div>
                <div class="p-2 border  col-4 ">TênSP</div>
                <div class="p-2 border col-3 border text-center">
                    <div class="input-group">
                        <span class="input-group-text btn btn-danger"
                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()"> - </span>
                        <input type="number" value="1" class="form-control text-center" min="1" max="100">
                        <span class="input-group-text btn btn-success"
                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()"> + </span>
                    </div>
                </div>
                <div class="p-2 border col-2 border text-end">Tiền</div>
                <div class="p-2 border flex-grow-1 text-end">
                    <a href="#" class="btn btn-default ">
                        <i class="bi bi-trash"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>

</body>

</html><?php /**PATH E:\app\xampp\htdocs\web3013\demo\lesson6\app\views/cart/index.blade.php ENDPATH**/ ?>