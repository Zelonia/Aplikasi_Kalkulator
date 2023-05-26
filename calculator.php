<!DOCTYPE html>
<html>
<head>
 <title>Calculator</title>
 <style type="text/css">
  .tombol{
   background-color: deepskyblue;
  }
  .tabel{
   background-color: gold;
   margin: 10px;
   padding: 10px;
  }
 </style>
</head>
<body>
    <center>
 <form name="calculator">
  
  <table style="background-color:brown" class="tabel">
   <caption>Calculator</caption>
   <tr>
    <td>Angka 1</td><td>:</td><td><input type="number" name="angka1"></td>
   </tr>
   <tr>
    <td>Angka 2</td><td>:</td><td><input type="number" name="angka2"></td>
   </tr>
   <tr>
    <td>Angka 3</td><td>:</td><td><input type="number" name="angka3"></td>
   </tr>
   <tr>
    <td>Hasil</td><td>:</td><td><input type="number" name="hasil"></td>
   </tr>
   <tr>
    <td colspan="3" align="center">
     <input class="tombol" type="button" onclick="operator1()" value="Hitung">
    </td>
   </tr>
  </table>
 </form>
</center>
<script>
    var angka1 = null;
    var angka2 = null;
    var angka3 = null;
    var hasil1 = null;
    var hasil2 = null;

    function operator2(){
        var op2=prompt("Pilih operasi yang digunakan: \n1.tambah \n2.Kurang \n3.bagi \n4. kali");
        if(op2=="1"){
            hasil2=hasil1+angka3;
        }
        else if(op2=="2"){
            hasil2=hasil1-angka3;
        }
        else if(op2=="3"){
            hasil2=hasil1/angka3;
        }
        else if(op2=="4"){
            hasil2=hasil1*angka3;
        }
        document.calculator.hasil.value=hasil2;
    }

    function operator1(){
        angka1=parseFloat(document.calculator.angka1.value);
        angka2=parseFloat(document.calculator.angka2.value);
        angka3=parseFloat(document.calculator.angka3.value);

        var op1=prompt("Pilih operasi yang digunakan: \n1.tambah \n2.Kurang \n3.bagi \n4. kali");
        if(op1=="1"){
            hasil1=angka1+angka2;
        }
        else if(op1=="2"){
            hasil1=angka1-angka2;
        }
        else if(op1=="3"){
            hasil1=angka1/angka2;
        }
        else if(op1=="4"){
            hasil1=angka1*angka2;
        }
        operator2()
    }
    </script>

</body>
</html>