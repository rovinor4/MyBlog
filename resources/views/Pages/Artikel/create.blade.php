@extends('Layout.admin')

@section('head')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endsection


@section('body')
    <form method="POST" enctype="multipart/form-data" action="{{ route('artikel.store') }}" class="box space-y-6">

        @csrf
        @method('POST')

        <div>
            <label for="judul" class="label">Judul</label>
            <input type="text" id="judul" name="judul" class="input-control" placeholder="Contoh Judul"
                value="{{ old('judul', $artikel['judul'] ?? '') }}">
        </div>

        <div>
            <label for="input-label" class="label">Image</label>
            <input type="file" id="input-file" name="image" class="input-file">
            @if (isset($artikel['image']) && !empty($artikel['image']))
                <img src="{{ $artikel['image'] ?? '' }}" alt="">
            @endif
        </div>

        <div>
            <label for="input-label" class="label">Isi Artikel</label>
            <div id="editor">{!! $artikel['isi'] ?? '' !!}</div>
            <textarea id="articleContent" name="content" hidden>{{ $artikel['isi'] ?? '' }}</textarea>
        </div>

        <div class="flex justify-end">
            <button type="button"
                class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                Submit
            </button>
        </div>
    </form>



    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        // Initialize Quill Editor
        const quill = new Quill('#editor', {
            theme: 'snow',
            modules: {
                toolbar: [
                    [{
                        'header': [1, 2, 3, false]
                    }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{
                        'list': 'ordered'
                    }, {
                        'list': 'bullet'
                    }],
                    ['link', 'image'],
                    ['clean']
                ]
            },
            placeholder: 'Tulis isi artikel Anda di sini...',
        });

        // Handle Form Submission
        quill.on('text-change', function() {
            const content = quill.root.innerHTML;
            document.getElementById('articleContent').innerHTML = content;
        })
    </script>
@endsection
