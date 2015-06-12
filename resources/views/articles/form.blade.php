<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>
<!-- body Form Input-->
<div class="form-group">
    {!! Form::label('body', 'body:') !!}
    {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
</div>

<!-- published_at Form Input-->
<div class="form-group">
    {!! Form::label('published_at', 'Published On:') !!}
    {!! Form::input('date', 'published_at', date('Y-m-d'), ['class'=>'form-control']) !!}
</div>

{{-- tags Input --}}
<div class="form-group">
            {!! Form::label('tags', 'Tags:') !!}
            {!! Form::select('tags[]', $tags, null, ['class'=>'form-control', 'multiple']) !!}
</div>


<!-- Add Article Form Input-->
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=> 'btn btn-primary form-control']) !!}
</div>