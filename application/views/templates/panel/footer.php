 <!-- start: Javascript -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
   
    
    <!-- plugins -->
    <script src="<?php echo base_url();?>assets/js/plugins/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/fullcalendar.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/jquery.nicescroll.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/jquery.datatables.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/datatables.bootstrap.min.js"></script>


    <script src="<?php echo base_url(); ?>assets/plugins/multi-select/js/jquery.multi-select.js"></script>



    <!-- custom -->
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
     
    <script type="text/javascript">
          $(document).ready(function(){
            $('#datatables-example').DataTable({
              "languaje":{
                "lengtMenu":"Mostrar _MENU_ registros por pagina",
                "zeroRecords":"No se encontraron resultados en su busqueda",
                "searchPlaceholder":"Escriba lo que desea buscar",
                "info":"Mostrando registros de _START_ al _END_ de un total de ",
                "infoEmpty":"No existen registros",
                "infoFiltered":"(Filtrando un total de _MAX_ registros)",
                "search":"Buscar",
                "paginate":{
                  "first":"Primero",
                  "last":"Ultimo",
                  "next":"Siguiente",
                  "previous":"Anterior"
                }

              }
            });

          });
    </script>
    
  <!-- end: Javascript -->
  </body>
</html>