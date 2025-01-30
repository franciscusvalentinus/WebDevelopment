@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="row">
            <h1 class="col">Insert Fragrance Data</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('fragrance.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Fragrance Name :</label>
                        <input type="text" class="form-control" name="nameFragrance" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Brand :</label>
                        <input class="form-control" name="brandFragrance" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Supplied by :</label>
                        <select class="custom-select" name="supplied_by" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                            @foreach ($suppliers as $supplier)
                                <option value="{{ $supplier->id }}">{{$supplier->nameSupplier . ' (' . $supplier->addressSupplier .')'}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Price :</label>
                        <input class="form-control" name="priceFragrance" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Type :</label>
                        <input class="form-control" name="typeFragrance" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Aroma :</label>
                        <input class="form-control" name="aromaFragrance" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <button type="submit" class="btn btn-primary" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
