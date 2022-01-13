<head>
    <script type="text/javascript" src="XX"></script>
</head>
<br><br>
<form id="folio_form" name="folio_form" method="post" action="index.php?CONT=53">
    <!--Cambio realizado el 20/07/2021-->

    <!-- Cambio realizado el 27/07/2021-->
    <body bgcolor="#E0E0E0">

    <style>
        h3{
            color: black;
            font-family: "Microsoft YaHei", "Tahoma", "boldface", Arial;
        }
        p{
            font-family: "Microsoft YaHei", "Tahoma", "boldface", Arial;
            font-size:small;
        }
        input[type=text]{
            width:50%;
            padding: 12px 20px;
            border: 2px solid black;
            border-radius:2px;
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
    
    <br><br>
    <h3>Folio de descuento</h3>
    <table width="100%" style="border-collapse: collapse" border="0">
        <tr>
            <td width="70%">
                <input type="hidden" name="ID_FOLIO" id="ID_FOLIO" value="0">
                <input type="text" maxlength="6" name="FOLIO" id="FOLIO" minlength="6" required="true" placeholder="Ingrese su folio de descuento">
            </td>
            <td valign="top">
                <p id="log" style="padding-left: 30px;"></p>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Guardar" class="button">
            </td>
        </tr>
        
    </table>
    <br>
    
</form>