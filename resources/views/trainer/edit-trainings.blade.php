@extends('layouts.app')

@section('pageTitle', 'Edit Trainers')

@section('content')


<div class="card">
    <div class="col-sm-5">
      <div class="card-header">
          <h4><strong>Edit Training</strong></h4>
          <div class="card-header-right">                                                             
              <i class="icofont icofont-spinner-alt-5"></i>                                                         
          </div>
      </div>

      <div class="card-block tooltip-icon button-list">
        <form action=" {{ route('trainings.update', $training->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="input-group">
                <span class="input-group-addon" id="password"><i class="icofont icofont-user-alt-4"></i></span>
                    <select name="level" class="form-control @error('level') is-invalid @enderror">
                        <option value="">Level</option>
                        <option value="Junior" @if($training->level == 'Junior') selected @endif>Junior</option>
                        <option value="Intermediate" @if($training->level == 'Intermediate') selected @endif>Intermediate</option>
                        <option value="Senior" @if($training->level == 'Senior') selected @endif>Senior</option>
                    </select>
                    @error('level')
                    <small>{{ $message }}</small>
                    @enderror
            </div>
            <form action=" {{ route('trainings.update', $training->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="input-group">
                    <span class="input-group-addon" id="password"><i class="icofont icofont-user-alt-4"></i></span>
                        <select name="trainingName" class="form-control @error('trainingName') is-invalid @enderror">
                            <option value="">Level</option>
                            <option value="Latihan Tempatan I" @if($training->trainingName == 'Latihan Tempatan I') selected @endif>Latihan Tempatan I</option>
                            <option value="Latihan Tempatan II" @if($training->trainingName == 'Latihan Tempatan II') selected @endif>Latihan Tempatan II</option>
                            <option value="Latihan Tempatan III" @if($training->trainingName == 'Latihan Tempatan III') selected @endif>Latihan Tempatan III</option>
                            <option value="Latihan Tempatan IV" @if($training->trainingName == 'Latihan Tempatan IV') selected @endif>Latihan Tempatan IV</option>
                            <option value="Latihan Tempatan V" @if($training->trainingName == 'Latihan Tempatan V') selected @endif>Latihan Tempatan V</option>
                            <option value="Latihan Berterusan" @if($training->trainingName == 'Latihan Berterusan') selected @endif>Latihan Berterusan</option>
                            <option value="Latihan Kem Tahunan" @if($training->trainingName == 'Latihan Kem Tahunan') selected @endif>Latihan Kem Tahunan</option>
                        </select>
                    @error('trainingName')
                    <small>{{ $message }}</small>
                    @enderror
        </div>
        <div class="input-group">
          <span class="input-group-addon" id="year"><i class="icofont icofont-user-alt-3"></i></span>
          <input type="year" class="form-control" placeholder="Enter Year" title="Enter Year" data-toggle="tooltip" name="year" value="{{$training->year}}" required>
        </div>
          <div class="input-group">
            <span class="input-group-addon" id="startDate"><i class="icofont icofont-user-alt-3"></i></span>
            <input type="date" class="form-control" placeholder="Enter Start Date" title="Enter Start Date" data-toggle="tooltip" name="startDate" value="{{$training->startDate}}" required>
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="endDate"><i class="icofont icofont-user-alt-3"></i></span>
            <input type="date" class="form-control" placeholder="Enter End Date" title="Enter End Date" data-toggle="tooltip" name="endDate" value="{{$training->endDate}}" required>
          </div>
          <button type="submit" class="btn btn-primary waves-effect waves-light m-r-20" data-toggle="tooltip" data-placement="right" title="submit">Update
          </button>
        </form>
      </div>
    </div>
  </div>

@endsection