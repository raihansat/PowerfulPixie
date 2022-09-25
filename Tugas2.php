<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tugas 2-G.211.21.0072</title>
   <style>
  @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=The+Nautigal&display=swap');
      body {
         padding: 0;
         margin: 0;
         box-sizing: border-box;
         background: #da614e;
         font-family: 'Bebas Neue', cursive;

      }

      .wrap {
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         background: #29ffec;
         width: 500px;
         height: auto;
         border-radius: 3px;
         padding: 0 12px;
       
      }

      h1 {
         text-align: center;
         font-weight: 600;
      }

      p {
         background: #eee;
         padding: 2px 8px;
         font-weight: 500;
         font-size: 16px;
         text-align: justify;
      }
   </style>
</head>

<body>
   <?php

   interface Bintang
   {
      public function Makan();
      public function Berjalan();
      public function Bersuara();
      public function Sepeda();
   }
   class Monyet implements Bintang
   {
      public function Makan()
      {
         return "Monyet dapat berjalan<br/>";
      }

      public function Berjalan()
      {
         return "Monyet memakan pisang<br/>";
      }

      public function Bersuara()
      {
         return "Monyet dapat bersuara<br/>";
      }
      public function Sepeda()
      {
         return "Tapi Juga dapat naik sepeda apa<br/>";
      }
   }

   class Lainnya implements Bintang
   {
      public function Makan()
      {
         return "";
      }

      public function Berjalan()
      {
         return "";
      }

      public function Bersuara()
      {
         return "";
      }
      public function Sepeda()
      {
         return "Monyet juga dapat menaiki sebuah sepeda<br/>";
      }
   }

   ?>
   <div class="wrap">
      <h1>Tugas 2</h1>
      <p>
         <?php
         $Monyet = new Monyet;
         $Lainnya = new Lainnya;
         echo "<b>Kemampuan Monyet : </b><br/>";
         echo $Monyet->Makan();
         echo $Monyet->Berjalan();
         echo $Monyet->Bersuara();

         echo "<b>Kemampuan Lainnya Apabila Dilatih : </b><br/>";
         echo $Monyet->Sepeda();
         ?>
      </p>
   </div>
</body>

</html>