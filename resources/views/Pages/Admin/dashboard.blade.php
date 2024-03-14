@extends('Pages.layout.master')
@section('title')
Tableau de bord
@endsection
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-home"></i>
        </span> Tableau de bord
      </h3>
    </div>
  
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            
            @if (Session::has('status'))
            <br>
            <div class="alert alert-success">
              {{Session::get('status')}}
            </div>
            @endif
            <h4 class="card-title">Liste des sous domaines CBOX Sarl</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th> Nom </th>
                    <th> Url </th>
                    <th> Description</th>
                    <th> Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    @foreach ($domaines as $domaine)
                        
                      <td> 
                        {{$domaine->nom}} 
                      </td>
                      <td>
                        {{$domaine->lien}}
                      </td>
                      {{-- <label class="badge badge-gradient-success">DONE</label> --}}
                      <td>   
                        {{$domaine->description}}                    
                      </td>
                      <td> 
                        <div class="btn-group" role="group">

                          <a href="{{ url('admin/editdomaine/'.$domaine->id)}}" class="btn btn-primary mr-2">Edit</a>

                          <form action="{{ url('admin/deletedomaine/'.$domaine->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <input type="submit" class="btn btn-danger mr-2" value="Delete">
                          </form>
                          </div>  
                      </td>
                    </tr>
                    @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection