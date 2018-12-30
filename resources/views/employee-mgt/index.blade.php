@extends('layouts.adminapp') 

@section('content')

    <!--Header-->     
<div class="box-header">
    <div class="row">
        <div class="col-sm-8">
          <h3 class="box-title"> List of Employees</h3>
        </div>
        <!--<div class="col-sm-4">-->
        <div class="text-right">   
          <a class="btn btn-primary" href="/create">Add new employee</a>
       <p> </p>
       </div>
    </div>
</div> 
<!--table-->
 <div class="card">
     <div class="card-body">
            <h5 class="card-title"></h5>
               <!--Search table-->
                <input type="text" aria-controls="DataTables_Table_0" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
        
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                    
                        <thead>
                            <tr>
                                <td>NAME</td>
                                <td>ADDRESS</td>
                                <td>MOBILE</td>
                                <td>POSITION</td>
                                <td>GENDER</td>
                                <td>ACTION</td>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employee as $employee)
                            <tr>
                              
                              <td class="center">{{ $employee->first_name }} {{$employee->last_name}}</td>
                              <td class="center">{{ $employee->address }}</td>
                              <td class="center">{{ $employee->mobile }}</td>
                              <td class="center">{{ $employee->position }}</td>
                              <td class="center">{{ $employee->gender }}</td>
                             
                              <td>
                                <form class="row" method="POST" action="{{ route('employee-mgt.destroy', ['id' => $employee->id]) }}" onsubmit = "return confirm('Are you sure?')">
                                    <div class="card-body">
                                    <input type="hidden" name="_method" value="DELETE">

                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <a href="{{ route('employee-mgt.edit', ['id' => $employee->id]) }}"  class="btn btn-warning btn-mini">
                                    Update
                                    </a>
                                    <!--<button type="submit" class="btn btn-danger btn-mini">  Delete
                                          </button>-->
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    <a href="{{ route('employee-mgt.show', ['id' => $employee->id]) }}"  class="btn btn-warning btn-mini">
                                            View
                                            </a>   
                                    </div>
                                     
                                     
                                    <!-- <a href= "{{ route('employee-mgt.destroy', ['id' => $employee->id]) }} "class="btn btn-danger btn-mini">delete</a>
                                    -->
                                </form>
                              </td>
                          </tr>
                        @endforeach
                    
                      <!--  <tbody>
                            
                            <tr>
                                <td>Caesar Vance</td>
                                <td>Pre-Sales Support</td>
                                <td>New York</td>
                                <td>21</td>
                                <td>2011/12/12</td>
                                
                            </tr>
                            
                            <tr>
                                <td>Suki Burks</td>
                                <td>Developer</td>
                                <td>London</td>
                                <td>53</td>
                                <td>2009/10/22</td>
                                
                            </tr>
                            
                           
                            
                        </tbody>-->
                        <tfoot>
                            <tr>
                                    <td>NAME</td>
                                    <td>ADDRESS</td>
                                    <td>MOBILE</td>
                                    <td>POSITION</td>
                                    <td>GENDER</td>
                                    <td>ACTION</td>
                            </tr>
                        </tfoot>
                    </table>
                    <script>
                        function myFunction() {
                        var input, filter, table, tr, td, i;
                        input = document.getElementById("myInput");
                        filter = input.value.toUpperCase();
                        table = document.getElementById("zero_config");
                        tr = table.getElementsByTagName("tr");
                        for (i = 0; i < tr.length; i++) {
                            td = tr[i].getElementsByTagName("td")[0];
                            if (td) {
                            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                            }       
                        }
                       }
                </script>
                </div>

            </div>
        </div>
      </div>
     
      
    @endsection