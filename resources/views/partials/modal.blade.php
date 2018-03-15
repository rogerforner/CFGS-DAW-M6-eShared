<!-- Modal -->
<div class="modal fade" id="deleteNote-{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="deleteNoteLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteNoteLabel">Esborrar apunts</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Tancar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="card-title">"{{ $title }}"</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $updated }}</h6>
        {{-- Info Esborrar Apunts --}}
        <p><strong>Estàs segur de que vols eliminar els apunts?</strong><br>
        Si els elimines ja no els podràs recuperar.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tancar</button>
        <form action="{{ route('notes.destroy',['id'=>$id]) }}" method="post">
          {{ method_field('delete') }}
          {{ csrf_field() }}
          <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Esborrar</button>
        </form>
      </div>
    </div>
  </div>
</div>
