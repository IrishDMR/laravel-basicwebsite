@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex omnis blanditiis aspernatur perferendis reiciendis qui, culpa doloribus voluptates necessitatibus debitis, at quisquam nostrum id eaque nesciunt, labore saepe quidem dolorum!</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection
