@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="row">
            <h1 class="col">Edit Supplier Data</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('supplier.update', $supplier) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Supplier Name :</label>
                        <input type="text" class="form-control" name="nameSupplier" value="{{ $supplier->nameSupplier }}" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Address :</label>
                        <input class="form-control" value="{{ $supplier->addressSupplier }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Phone Number :</label>
                        <input class="form-control" name="phoneSupplier" value="{{ $supplier->phoneSupplier }}" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Email Address :</label>
                        <input type="date" class="form-control" name="emailSupplier" value="{{ $supplier->emailSupplier }}" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <button type="submit" class="btn btn-primary" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
