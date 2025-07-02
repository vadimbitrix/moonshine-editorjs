@props([
    'value' => '',
])

<div class="box">
    <x-moonshine::form.textarea
        :attributes="$attributes->merge([
            'data-type' => 'editor-js',
            'class' => 'hidden',
        ])"
    >{!! $value ?? '' !!}</x-moonshine::form.textarea>

    <div id="editorjs"></div>
</div>

<script>
    const editorJsConf = @php echo json_encode(config('moonshine-editor-js')['toolSettings']) @endphp;
</script>

@vite('resources/js/field.js', 'vendor/moonshine-editorjs')
@vite('resources/css/field.css', 'vendor/moonshine-editorjs')
