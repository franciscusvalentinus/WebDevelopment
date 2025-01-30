@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="row">
            <h1 class="col">Fragrance List</h1>
        </div>
        <div class="row">
            <div class="col-md-2 offset-md-10">
                <a href="{{ route('fragrance.create') }}" class="btn btn-primary btn-block" role="button"
                   aria-pressed="true" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">Add Fragrance</a>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped">
                <thead>
                <tr style="background-color: rgba(255, 255, 255, 0.8)">
                    <th scope="col">Name</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Price</th>
                    <th scope="col">Supplied by</th>
                    <th scope="col">Type</th>
                    <th scope="col">Aroma</th>
                    <th scope="col">Last Update</th>
                    <th scope="col">Date Created</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($fragrances as $fragrance)
                    <tr style="background-color: rgba(255, 255, 255, 0.5)">
                        <td><a href="{{ route('fragrance.edit', $fragrance) }}" onmouseover="this.style.textShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.textShadow='0px 0px 0px LightSkyBlue'">{{ $fragrance->nameFragrance }}</a></td>
                        <td>{{ $fragrance->brandFragrance }}</td>
                        <td>{{ $fragrance->priceFragrance }}</td>
                        @foreach ($suppliers as $supplier)
                            @if ($fragrance->supplied_by == $supplier->id)
                                <td>{{ $supplier->nameSupplier }} ({{$supplier->addressSupplier}})</td>
                            @endif
                        @endforeach
                        <td>{{ $fragrance->typeFragrance }}</td>
                        <td>{{ $fragrance->aromaFragrance }}</td>
                        <td>{{ $fragrance->updated_at}}</td>
                        <td>{{ $fragrance->created_at}}</td>
                        <td>
                            <form action="{{ route('fragrance.destroy', $fragrance) }}" method="post" onsubmit="return confirm('Are you sure? This action cannot be undone!')">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onmouseover="this.style.boxShadow='0px 0px 15px HotPink'" onmouseout="this.style.boxShadow='0px 0px 0px HotPink'">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
