<nav class="pagination {{ $type }}">
{!! with(new \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Pagination\Mdf3Presenter($model->appends( (isset($parameters) ? $parameters : []) ) ))->render() !!}
</nav>