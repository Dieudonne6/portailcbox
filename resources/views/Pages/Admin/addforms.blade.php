@extends('Pages.layout.master')
@section('title')
Ajouter un sous domaine
@endsection
@section('content')


<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-home"></i>
        </span> Ajouter
      </h3>
      @if (Session::has('status'))
      <br>
      <div class="alert alert-success">
        {{Session::get('status')}}
      </div>
      @endif
    </div>
    <div class="row">
      <div class="col-md-12 mx-auto grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" action="{{url('admin/savedomaine')}}" method="POST">
              @csrf
              <div class="form-group">
                <label for="exampleInputUsername1">Nom du sous-domaine</label>
                <input type="text" class="form-control" id="exampleInputUsername1" name="nom" placeholder="Nom du sous-domaine">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Lien du sous-domaine</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="lien" placeholder="Lien du sous-domaine">
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Description</label>
                <textarea class="form-control" id="exampleTextarea1" name="description" rows="4"></textarea>
              </div>
              <button type="submit" class="btn btn-gradient-primary me-2">Ajouter</button>
              <button class="btn btn-light" type="reset">Annuler</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection