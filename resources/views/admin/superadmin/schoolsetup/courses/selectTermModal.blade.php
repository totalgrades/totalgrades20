<!-- The Modal -->
<div class="modal fade" id="selectTermModal-{{$schoolyear->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header" style="background-color: #7FB3D5; color: #FFF">
              <h4 class="modal-title"><strong>School year: {{$schoolyear->school_year}}</strong></h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <div class="widget-body">
                    <div class="widget-main">
                        <h5 class="modal-title">{{strtoupper('Select a Term')}}</h5>
                        <hr>
                        
                        <div class="list-group">
                        @foreach($terms->where('school_year_id', $schoolyear->id) as $term) 
                            <a href="{{asset('/schoolsetup/showcoursesgroups/'.$schoolyear->id) }}/{{$term->id}}" class="list-group-item list-group-item-action">
                                @if ($today->between($term->start_date, $term->show_until ))
                                    <span class="label label-xlg label-danger arrowed arrowed-right"> 
                                    {{$term->term}}
                                    </span>
                                    <span class="badge badge-danger badge-pill">
                                        <i class="ace-icon fa fa-exclamation-triangle bigger-120"></i>
                                        Current
                                    </span>
                                @else
                                    <span class="label label-xlg label-primary arrowed arrowed-right"> 
                                    {{$term->term}}
                                    </span>
                                @endif
                            </a>
                        @endforeach
                        </div>
            
                    </div>
                </div>  
            </div>      
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
            
        </div>
    </div>
</div>