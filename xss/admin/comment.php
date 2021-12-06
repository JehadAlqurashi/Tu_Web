<?php
 include 'sidebar.php';
 $comment = $connect->query("select * from contact")->fetch_all(MYSQLI_ASSOC);
?>

<section class="page-content">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href=" https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap.min.css">

</head>
<body>
    <br>
    <div>
        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>role</th>
                </tr>
            </thead>
            <tbody>
                <?php 

                foreach($comment as $co){

                
                ?>
                <tr>
                    <td><?php echo $co['name']; ?></td>
                    <td><?php echo $co['email']; ?></td>
                    <td><?php echo $co['subject']; ?></td>
                </tr>
                <?php

                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap.min.js  "></script>

    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable( {
                responsive: true
            } );
        
            new $.fn.dataTable.FixedHeader( table );
        } );
    </script>
</body>
</html>
  </section>
  <section class="grid">
    <article></article>
    <article></article>
    <article></article>
    <article></article>
    <article></article>
    <article></article>
    <article></article>
    <article></article>
  </section>
  <footer class="page-footer">
    <span>made by </span>
    <a href="https://georgemartsoukos.com/" target="_blank">
      <img width="24" height="24" src="https://assets.codepen.io/162656/george-martsoukos-small-logo.svg" alt="George Martsoukos logo">
    </a>
  </footer>
</section>

















<script src="../js/admin.js"></script>