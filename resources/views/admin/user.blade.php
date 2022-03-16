@extends('admin.app')

@section('style')
<style>
</style>
@endsection
@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-lg-2 col-md-3">
            <select id="choose_approval" class="form-control" onchange="prosesSearch()">
                <!--<option value="all">- Semua -</option>-->
                <option value="true">Approve</option>
                <option value="false" selected="true">Not Approve</option>
            </select>
        </div>
        <div class="col-lg-4 col-md-8">
            <div class="btn-group" role="group" aria-label="...">
                <button type="button" id="btn-valid" class="btn btn-primary" onclick="prosesValidChecked('true')">Approve</button>
                <button type="button" id="btn-batal" class="btn btn-danger" onclick="prosesValidChecked('false')" disabled="true">Not Approve</button>
                <button type="button" id="btn-batal" class="btn btn-info" onclick="prosesSearch()">
                    <span class="fa fa-refresh"></span> Refresh
                </button>
            </div>
        </div>
    </div>
    <table id="table-user"></table>
</div>
{{-- <table id="table-user" class="table table-bordered table-striped table-hover dataTable" role="grid">
    <thead>
        <tr role="row">
            <th style="width:250px !important">name</th>
            <th style="width:130px !important">email</th>
        </tr>
    </thead>
</table> --}}
@endsection