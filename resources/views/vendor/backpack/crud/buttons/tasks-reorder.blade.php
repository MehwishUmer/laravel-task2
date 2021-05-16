@if ($crud->get('reorder.enabled'))

<div class="dropdown" style="display: inline-block;">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="la la-arrows"></i> Reorder
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <?php $projects = App\Models\Project::all();?>
    
  @foreach ($projects as $project)
    <a class="dropdown-item" href="{{ url($crud->route.'/'.$project->id.'/reorder') }}">Reorder Tasks of "<?=$project->name?>"
    </a>
    @endforeach
  </div>
</div>
@endif