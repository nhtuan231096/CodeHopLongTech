@extends('layouts.admin')
@section('title','Import sản phẩm hàng loạt từ file .csv')
@section('links','Sản phẩm')    
@section('main')
<form class="form-horizontal" method="POST" action="{{ route('import_process') }}">
    {{ csrf_field() }}
    <input type="hidden" name="csv_data_file_id" value="{{ $csv_data_file->id }}" />

    <table class="table">
        @if (isset($csv_header_fields))
        <tr>
            @foreach ($csv_header_fields as $csv_header_field)
                <th>{{ $csv_header_field }}</th>
            @endforeach
        </tr>
        @endif
        @foreach ($csv_data as $row)
            <tr>
            @foreach ($row as $key => $value)
                <td>{{ $value }}</td>
            @endforeach
                <td>1</td>
            </tr>
        @endforeach
        <tr>
            @foreach ($csv_data[0] as $key => $value)
                <td>
                    <select class="form-control" name="fields[{{ $key }}]">
                        <option value="">Chọn cột</option>
                        @foreach (config('app.db_fields') as $db_field)
                            <option value="{{ (\Request::has('header')) ? $db_field : $loop->index }}"
                                @if ($key === $db_field) selected @endif>{{ $db_field }}</option>
                        @endforeach

                    </select>
                </td>
            @endforeach
        </tr>
    </table>

    <button type="submit" class="btn btn-primary">
        Import Data
    </button>
</form>
@stop()
