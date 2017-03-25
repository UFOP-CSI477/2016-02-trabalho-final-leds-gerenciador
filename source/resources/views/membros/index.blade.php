@extends('admin_template')
<?php
    View::share('page_title', 'Equipe');
?>
@section('content')

<section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Hover Data Table</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                              <th class="sorting" role="columnheader" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending">Nome</th>
                                                  <th>Tipo</th>
                                                <th>Curso/Departamento</th>
                                                <th> Area </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($alunos as $aluno)
                                            <tr>
                                                <td>$aluno->nome</td>
                                                <td><span class="label label-warning">ALUNO</span></td>
                                                <td>$aluno->curso</td>
                                                <td> - </td>
                                            </tr>
                                            @endforeach
                                            @foreach($professores as $prof)
                                              <tr>
                                                  <td>$prof->nome</td>
                                                  <td><span class="label label-success">PROFESSOR</span></td>
                                                  <td>$prof->departamento</td>
                                                  <td> $prof->area </td>
                                              </tr>
                                              @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                              <th>Nome</th>
                                              <th>Tipo</th>
                                              <th>Curso/Departamento</th>
                                              <th> Area </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

  </section><!-- /.content -->
  <!-- jQuery 2.0.2 -->
       <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
       <!-- Bootstrap -->
       <script src="../../js/bootstrap.min.js" type="text/javascript"></script>
       <!-- DATA TABES SCRIPT -->
       <script src="../../js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
       <script src="../../js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
       <!-- AdminLTE App -->
       <script src="../../js/AdminLTE/app.js" type="text/javascript"></script>

       <!-- page script -->
       <script type="text/javascript">
           $(function() {
               $("#example1").dataTable();
               $('#example2').dataTable({
                   "bPaginate": true,
                   "bLengthChange": false,
                   "bFilter": false,
                   "bSort": true,
                   "bInfo": true,
                   "bAutoWidth": false
               });
           });
       </script>
@endsection
