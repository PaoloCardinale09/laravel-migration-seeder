<div class="card mb-5">
    <div class="card-header fw-bold h5">
      <span class="">TRENO:
      {{ $train->codice_treno}}
    </span>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item"> <i class="fw-bold">Città di partenza:</i>
       {{ $train->stazione_di_partenza }}
      </li>
      <li class="list-group-item">
        <i class="fw-bold">Città di arrivo:</i> {{ $train->stazione_di_arrivo }}
      </li>
      <li class="list-group-item">
        <i class="fw-bold"> Orario di partenza:</i>
        {{ $train->orario_partenza }} @if ($train->in_orario) <span class="text-white bg-danger">   In ritardo   </span>
            
        @endif
      </li>
      <li class="list-group-item">
        <i class="fw-bold"> Orario di arrivo: </i>
        {{ $train->orario_arrivo }}
      </li>

      <li class="list-group-item">
        <i class="fw-bold"> Data partenza: </i>
        {{ $train->data_partenza }}
      </li>
    

      @if ($train->cancellato)
      <li class="list-group-item text-success">
        Confermato
      </li> 
      @else
      <li class="list-group-item text-danger">
        Cancellato
      </li> 
          
      @endif
    

    </ul>
</div>
</div>