@extends('layout.master')

    @section('title', '| All categories')

    @section('content')
        <div class="container">

            <div class="row">
            @include('partials.adminleft')
            
                <div class="panel panel-default col-md-9">
                    <div class="panel-heading">
                        <h3 class="text-center"> All Categories</h3><hr>
                        <a href="{{ route('category.create')}}" class="btn btn-primary pull-right"> Add Category</a>
                        <div class="clearfix"></div>
                    </div>
                    
                    <div class="panel-body">
                        
                        <div class="col-md-12">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No.#</th>
                                        <th>Name</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                <a href="{{route('category.edit', $category->id)}}" class="btn btn-warning">Edit
                                                </a>
                                            </td>

                                            <td>
                                            {{Form::open([
                                                'method' => 'DELETE', 
                                                'route' => ['category.destroy',$category->id]
                                                ])
                                            }}

                                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }} 

                                            {!! Form::close() !!}
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
        
    @endsection