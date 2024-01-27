<div class="{{ $groupClass }}">
    <textarea class="summernote {{ $class }}" id="{{ $id }}" name="{{ $name }}" >{!! $value !!}</textarea>

    <script>
        $("#{{ $id }}").summernote({
            height: {{ $height }},
            toolbar: [
                ['codeview', ['codeview']],
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'strikethrough', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol']],
                ['insert', ['picture']],
                ['table', ['table']],
                ['help', ['help']],
            ],
            styleTags: ['p', 'h1', 'h2', 'h3', 'h4', 'h5'],
            callbacks: {
                @if (isset($livewireModel) && !empty($livewireModel))
                    onChange: function($content, $editable) {
                        @this.{{ $livewireModel }} = $content;
                    },
                @endif
                onPaste: function(e) {
                    var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                    e.preventDefault();
                    setTimeout(function() {
                        document.execCommand('insertText', false, bufferText);
                    }, 10);
                }
            },
            hint: {
                mentions: {!! json_encode($mentions) !!},
                match: /\B@(\w*)$/,
                search: function(keyword, callback) {
                    callback($.grep(this.mentions, function(item) {
                        return item.name.toLowerCase().indexOf(keyword.toLowerCase()) == 0;
                    }));
                },
                template: function(item) {
                    return item.name;
                },
                content: function(item) {
                    return $('<span>').html('<span data-type="mention" data-mention="' + item.id + '" contenteditable="false">@' + item.name + '</span><span>&nbsp;</span>')[0]
                }
            }
        });
    </script>
</div>
