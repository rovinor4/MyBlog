@extends('Layout.admin')

@section('body')
    <div class="box">
        <div class="flex justify-end" style="margin-bottom: 20px;">
            <a href="{{ route('artikel.create') }}">
                <button type="button"
                    class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Tambah Artikel
                </button>
            </a>
        </div>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Judul</th>
                        <th>Dibuat Oleh</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($artikel as $data)
                        <tr>
                            <td>{{ $data['id'] }}</td>
                            <td>{{ $data['judul'] }}</td>
                            <td>{{ $data['Users']['name'] }}</td>
                            <td>
                                <a href="">Edit</a>
                                <a href="">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
