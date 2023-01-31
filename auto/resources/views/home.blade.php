@extends('template.dashboard')

@section('title')
  <h1 class="m-0">Painel De Controle</h1>
@endsection

@section('conteudo-principal')
    <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                <div class="inner">
                    <h3>50</h3>
                    <p>Postos Cadastrados</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>
                    <p>Bounce Rate</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                <div class="inner">
                    <h3>KM 71205</h3>
                    <p>Próx.troca de óleo</p>
                </div>
                <div class="icon">
                    <i class="fa fa-car ml-2"></i>
                </div>
                <a href="#" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                <div class="inner">
                    <h3>05</h3>
                    <p>Documentos à Vencer</p>
                </div>
                <div class="icon">
                    <i class="fa fa-file"></i>
                </div>
                 <a href="#" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            </div>
      </div><!-- /.container-fluid -->
@endsection

@section('footer')
    <footer class="main-footer">
        <p> Sistema - Controle de Abastecimento e Manutenção Automotivo </p><strong>Copyright &copy; 2023 - </strong>
             Todos os direitos reservados.
        <div class="float-right d-none d-sm-inline-block">
            <b>Versão</b> 1.0
        </div>
    </footer>
@endsection
