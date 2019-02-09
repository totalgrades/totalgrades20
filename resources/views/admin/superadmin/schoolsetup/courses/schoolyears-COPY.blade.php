@extends('admin.superadmin.dashboard')

@section('content')
    <div class="page-header">
        <div class="alert alert-block alert-success">
            <i class="ace-icon fa fa-info-circle red"></i>
            <strong class="green">
                Step 4:
            </strong>
                Add/Edit Courses<br>
            <span style="color: black">
                <i class="ace-icon fa fa-info-circle blue"></i> Make sure to select the current school year.<br>
                <i class="ace-icon fa fa-info-circle blue"></i> You can select past school year if you wish to edit past course information.<br>
                <i class="ace-icon fa fa-info-circle blue"></i> Clicking on 'Select Term' to select a term in that school year.
            </span>
        </div>
    </div><!-- /.page-header -->
    @include('flash::message')
    <div class="row">
        <div class="col-sm-8">
            <div class="widget-box">
                <div class="widget-header">
                    <h4 class="widget-title"><strong>School Years - Courses</strong></h4>
                    
                </div>

                <div class="widget-body">
                    <div class="widget-main">

                	   <table class="table table-striped table-bordered">
                            <thead>
                                <th>#</th>
                                <th>School Year</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Select Term</th>
                               
                            </thead>
                            <tbody>

                                @foreach ($schoolyears as $key=>$schoolyear)

                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>
                                        @if ($today->between($schoolyear->start_date, $schoolyear->show_until ))
                                            <span style="color: #D15B47; font-weight: bold;">Current Year:</span> {{ $schoolyear->school_year }}
                                        @else
                                            {{ $schoolyear->school_year }}
                                        @endif
                                    </td>
                                    <td>{{ $schoolyear->start_date->toFormattedDateString() }}</td>
                                    <td>{{ $schoolyear->end_date->toFormattedDateString() }}</td>
                                    <td>
                                        <a href="{{asset('/schoolsetup/showcoursesterms/'.$schoolyear->id) }}">
                                            @if ($today->between($schoolyear->start_date, $schoolyear->show_until ))
                                                <button type="button" class="btn btn-danger">Select Term</button>
                                            @else
                                                <button type="button" class="btn btn-primary"><strike>Select Term</strike></button>
                                            @endif
                                        </a>
                                    </td>
                                    @include('admin.superadmin.schoolsetup.courses.selectTermModal')
                                    <script type="text/javascript">
                                      $('#addTerm-{{$schoolyear->id}}').on('click', function(e){
                                         e.preventDefault();
                                        $('#addTermModal-{{$schoolyear->id}}').modal('show');
                                      })
                                    </script>
                                </tr>

                                @endforeach
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="hr hr-18 dotted hr-double"></div>
    <br>

	<div class="alert-danger">
		
		<ul>
			@foreach($errors->all() as $error)

				<li> {{ $error }}</li>

			@endforeach

		</ul>

	</div>


@endsection
