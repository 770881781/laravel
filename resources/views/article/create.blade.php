@extends('article/app')
@section('content')
    <h1 style='text-align:center'>添加文章</h1>    
    {!!Form::open(array('url'=>'article/store'))!!}
        <div class="form-group">
        {!! Form::label('title','标题:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content','正文:') !!}
            {!! Form::textarea('content',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('created_at','发布日期') !!}
            {!! Form::input('date','created_at',date('Y-m-d'),['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('发表文章',['class'=>'btn btn-success form-control']) !!}
        </div>        
    {!!Form::close()!!}
    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif    
@endsection