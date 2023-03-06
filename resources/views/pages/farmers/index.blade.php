@extends('layouts.app')

@section('content')
    <!-- Start Default Table Area -->
    <div class="default-table-area">
        <div class="container-fluid">
            <div class="card-box-style">
                <div class="others-title">
                    <h3>FARMERS</h3>
                </div>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Code</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Lga</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($farmers as $farmer)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $farmer->code  }}</td>
                            <td>{{ $farmer->name  }}</td>
                            <td>{{ $farmer->phone  }}</td>
                            <td>{{ $farmer->lga  }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End Default Table Area -->
@endsection
