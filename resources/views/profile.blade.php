@extends('layouts.app')

@section('content')
<div class=" content" style="background: gainsboro">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table table-bordered text-center " style="margin-top: 20px ">
                <tr>
                    <td colspan="2" class=" danger">Imformation</td>
                </tr>
                <tr class="active"> 
                      <td>My Name </td>
                      <td>{{ Auth::user()->name }}</td>
                </tr>
                <tr class="success">
                    <td> Email</td>
                     <td>{{ Auth::user()->email }}</td>
                </tr>
                <tr class="warning">
                     <td>Weight</td>
                     <td> {{ Auth::user()->weight }}</td>
                </tr>
                 <tr class="danger">
                     <td>Height</td>
                     <td>{{ Auth::user()->height }}</td>
                </tr>
                <tr class="active">
                     <td>Address</td>
                     <td> {{ Auth::user()->address }}</td>
                </tr>
                <tr class="success">
                     <td>Age</td>
                     <td>{{ Auth::user()->age }}</td>
                </tr>
                 <tr class="success">
                     <td>Password</td>
                     <td>*******************</td>
                </tr>
            </table>
             <div >
                 <button class="btn " style="background: pink; float: right; margin-bottom: 15px"  ><a href="fix/{{ Auth::user()->idPerson}}" class="fix" >Fix Information</a></button>
             </div>
        </div>
    </div>
</div>
@endsection
