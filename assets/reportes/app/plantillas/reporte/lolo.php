<?php 
function getPlantilla($productos){

 $plantilla='</head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="logo.png">
      </div>
      <h1>INVOICE 3-2-1</h1>
      <div id="company" class="clearfix">
        <div>Company Name</div>
        <div>455 Foggy Heights,<br /> AZ 85004, US</div>
        <div>(602) 519-0450</div>
        <div><a href="mailto:company@example.com">company@example.com</a></div>
      </div>
      <div id="project">
        <div><span>PROJECT</span> Website development</div>
        <div><span>CLIENT</span> John Doe</div>
        <div><span>ADDRESS</span> 796 Silver Harbour, TX 79273, US</div>
        <div><span>EMAIL</span> <a href="mailto:john@example.com">john@example.com</a></div>
        <div><span>DATE</span> August 17, 2015</div>
        <div><span>DUE DATE</span> September 17, 2015</div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">Numero de empleado</th>
            <th class="desc">Nombre</th>
            <th>Num. Empleado </th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>';

        foreach ($productos as $producto) {
         $plantilla.='<tr>
            <td class="service">'.$producto["id_empleado"].'</td>
            <td class="desc">'.$producto['nombres_empleado'].'</td>
            <td class="unit">'.$producto['telefono_empleado'].'</td>
            <td class="qty">'.$producto['email_empleado'].'</td>
          </tr>';
          }
        $plantilla.='</tbody>
          </table>
          <div id="notices">
            <div>NOTICE:</div>
            <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
          </div>
        </main>
        <footer>
          Invoice was created on a computer and is valid without the signature and seal.
        </footer>
      </body>';
  return $plantilla;
  }
 ?>