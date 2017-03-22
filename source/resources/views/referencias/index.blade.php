@extends('admin_template')
<?php
    View::share('page_title', 'Referencias'); 
?>
@section('content')
  <div class='row'>
      <div class='col-md-6'>
          <!-- Box -->
          <div class="box box-success box-solid">
              <div class="box-header with-border">
                  <h3 class="box-title">GitHub</h3>
                  <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                  </div>
              </div>
              <div class="box-body">
                Github Privado Laboratorio  <a target="_blank" href="https://github.com/ledsufop/">LEDS</a>.  <br>
                Github Laboratorio <a target="_blank" href="https://github.com/TerraME/terrame">TerraLAB</a>.<br>
                Github Projeto  <a target="_blank" href="https://github.com/ufopleds/DengueME">DengueME</a>.<br>
                Github Privado Projeto  <a target="_blank" href="https://github.com/ufopleds/MI">MI</a>.<br>
              </div><!-- /.box-body -->
          </div><!-- /.box -->
      </div><!-- /.col -->
      <div class='row'>
          <div class='col-md-6'>
              <!-- Box -->
              <div class="box box-success box-solid">
                  <div class="box-header with-border">
                      <h3 class="box-title">Wikis</h3>
                      <div class="box-tools pull-right">
                          <button class="btn  btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                      </div>
                  </div>
                  <div class="box-body">
    Wiki <a target="_blank" href="http://leds.ufop.br/wiki"> LEDS</a>.<br>
  Wiki <a target="_blank" href=" www.terralab.ufop.br"> TerraLAB</a>. <br>
    Wiki <a target="_blank" href="https://github.com/ufopleds/DengueME/wiki"> DengueME</a>.
                  </div><!-- /.box-body -->
              </div><!-- /.box -->
          </div><!-- /.col -->
      </div><!-- /.row -->
  </div><!-- /.row -->
  <div class='row'>
      <div class='col-md-6'>
          <!-- Box -->
          <div class="box box-success box-solid">
              <div class="box-header with-border">
                  <h3 class="box-title">Publicações</h3>
                  <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                  </div>
              </div>
              <div class="box-body">
            1: <a target="_blank" href="https://www.researchgate.net/publication/282927548_A_framework_for_modeling_and_simulating_Aedes_aegypti_and_dengue_fever_dynamics">A framework for modeling and simulating Aedes aegypti and dengue fever dynamics</a>.   <br>
              2:   <a target="_blank" href="https://www.researchgate.net/publication/292397787_Modelagem_e_Simulacao_de_Sistemas_Ambientais_utilizando_o_TerraME">Modelagem e Simulação de Sistemas Ambientais utilizando o TerraME</a>.  <br>
              3:   <a target="_blank" href="http://www.mdpi.com/1660-4601/13/9/920">DengueME: A Tool for the Modeling and Simulation of Dengue Spatiotemporal Dynamics</a>.  <br>
              </div><!-- /.box-body -->
          </div><!-- /.box -->
      </div><!-- /.col -->
      <div class='row' style="margin-left = 0 px">
          <div class='col-md-6'>
              <!-- Box -->
              <div class="box box-success box-solid">
                  <div class="box-header with-border">
                      <h3 class="box-title">E-mails</h3>
                      <div class="box-tools pull-right">
                          <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                      </div>
                  </div>
                  <div class="box-body">
                  Tiago França: <b>tiagofranca@gmail.com</b><br>
                  Tiago Luange: <b>tiagoluange@gmail.com</b><br>
                  Carlos: <b>carlos@gmail.com</b><br>
                  Lucas Saraiva: <b>lucas@gmail.com</b><br>
                  </div><!-- /.box-body -->
              </div><!-- /.box -->
          </div><!-- /.col -->

      </div><!-- /.row -->
  </div><!-- /.row -->

@endsection
