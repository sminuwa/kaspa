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
                        <th scope="col">Action</th>
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
                            <td>
                                <a href="{{ route('farmer.show', $farmer->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i></a>
                                <a href="#" class="btn btn-xs btn-success edit-farmer"><i class="fa fa-pencil"></i></a>
                                <a href="{{ route('farmer.destroy', $farmer->id) }}" class="btn btn-xs btn-danger delete-farmer"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End Default Table Area -->
@endsection


@push('style')

@endpush


@push('script')
    <script>
        $(document).ready(function(){
            let body = $('body')
            body.on('click', '.add-farmer-form', function(){
                $('.add-farmer-modal').modal('toggle')
            })
        })
    </script>
@endpush
