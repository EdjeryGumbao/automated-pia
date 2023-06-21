@extends('layouts.general_layout')

@section('title', 'VII. Recommended Privacy Solutions')

@section('content')

@if($value == 1)
    <p>Welcome to the Recommended Privacy Solutions</p>

    <p>!! Under Construction !!</p>
    <p>From the risks stated in the previous section, identify the recommended solution or mitigation 
        measures. You can cite your existing controls to treat the risks in the same column. </p>
    
        <div class="col-12">
            <div class="card">
              <div class="card-header">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                     <th>Recommended Solutions (Please provide justification)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          

    <form action="proceed_to_end" method="post">
        @csrf
        <button type="submit" class="btn btn-primary" value="1" name="value">Proceed</button>
    </form>

@else
    <p>You have to agree.</p>
    <a href="{{ url('system_description') }}" class="btn btn-primary">Start Again</a>
@endif

@stop