<div class="div_fondo_invertido">

    <!-- Cambio realizado el 27/07/2021-->
    <body bgcolor="#E0E0E0">

    <style>
        h3{
            color: black;
            font-family: "Microsoft YaHei", "Tahoma", "boldface", Arial;
        }
        h4{
            color: blue;
            text-decoration: underline;
            font-family: "Microsoft YaHei", "Tahoma", "boldface", Arial;
        }
        p{
            font-family: "Microsoft YaHei", "Tahoma", "boldface", Arial;
            font-size:small;
        }

        input[type=file]{
            background: linear-gradient(#B2B6C2, #6F7178);
            border: none;
            color: white;
            width:450px;
            padding: 15px 60px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 12px;
        }

        input[type=submit]{
            background-color: #74AF0D;
            border: none;
            color: white;
            width:10%;
            padding: 10px 30px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            
        }


    </style>

    <form method="post" enctype="X" action="X">
        <h3>Pagar</h3>
        <p>2. Pago con PayPal. Acceso 24 horas después de subir el comprobante de pago.</p>
        <img src="X" alt="Paypal" style="width:200px;height:120px;">
        <input type="hidden" value="DET" name="DET">
        <p>El comprobante debe pesar menos de 1 MB.</p>
        <input type="file" name="image" id="image" accept="X" required="true"><br>
        <input type="submit" class="button" value="Subir comprobante">
    </form>
</div>