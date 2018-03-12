@if ($note->exists)
  <form action="{{route('notes.update',['note'=>$note->id])}}" method="post" enctype="multipart/form-data">
    {{method_field('put')}}
@else
    <form action="{{action('NotesController@store')}}" method="post" enctype="multipart/form-data">
@endif
  {{csrf_field()}}
  <div class="form-group">
    <label for="nom">Nom dels apunts:</label>
    <input type="text" name="nom" required class="form-control"value="{{$note->nom or old('nom')}}">
  </div>
  <div class="form-group">
    <label for="nom">Descripció:</label>
    <textarea class="form-control" name="descripcio" rows="3" cols="50">{{$note->descripcio or old('descripcio')}}</textarea>
  </div>
  <label for="categoria">Camps d'estudi:</label>
  <div class="form-group " style="    display: -webkit-box;">
    <input type="hidden" name="idusuari" value="{{Auth::user()->id}}">
    <select class="form-control" name="idcategoria">
      <option value="">--------</option>
      @forelse ($categories as $category1)
          <option type="checkbox" name="idcategoria" value="{{$category1->id}}"
          @if($category1 == $note->idcategory)
            selected
          @endif
          >{{$category1->nom}}</option>
      @empty

      @endforelse
    </select>
    <span class="col-1"data-toggle="tooltip" data-placement="right" title="Has d'escullir una categoria" ><i class="fas fa-question " ></i></span>
  </div>
  <label for="cos">Cos dels apunts:</label>
  <textarea class="form-control editor mb-2" name="note" rows="10" cols="50">{!! $note->note or old('note') !!}</textarea>
    <button type="submit" class="btn btn-primary my-3">
      Desar apunts
    </button>
</form>


<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<script>
      var editor_config = {
        path_absolute : "/",
        selector: "textarea.editor",
        plugins: [
          "advlist autolink lists link image charmap print preview hr anchor pagebreak",
          "searchreplace wordcount visualblocks visualchars code fullscreen",
          "insertdatetime media nonbreaking save table contextmenu directionality",
          "emoticons template paste textcolor colorpicker textpattern codesample",
          "fullpage toc spellchecker imagetools help"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic strikethrough | alignleft aligncenter alignright alignjustify | ltr rtl | bullist numlist outdent indent removeformat formatselect| link image media | emoticons charmap | code codesample | forecolor backcolor",
        external_plugins: { "nanospell": "{{ asset('js/tinymce/plugins/nanospell/plugin.js') }}" },
        nanospell_server:"php",
        browser_spellcheck: true,
        relative_urls: false,
        remove_script_host: false,
        file_browser_callback : function(field_name, url, type, win) {
          var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
          var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

          var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
          if (type == 'image') {
            cmsURL = cmsURL + "&type=Images";
          } else {
            cmsURL = cmsURL + "&type=Files";
          }

          tinymce.activeEditor.windowManager.open({
            file: '/vendor/studio-42/elfinder/elfinder.html',// use an absolute path!
            title: 'File manager',
            width: 900,
            height: 450,
            resizable: 'yes'
          }, {
            setUrl: function (url) {
              win.document.getElementById(field_name).value = url;
            }
          });
        }
      };

      tinymce.init(editor_config);
    </script>

<script>
  {!! \File::get(base_path('vendor/barryvdh/laravel-elfinder/resources/assets/js/standalonepopup.min.js')) !!}
</script>
