<h1> Includes Hello World</h1>

{{--@includeIf('components.component1', ['html' => '<h1>Componente1</h1>'])--}}
{{--@includeWhen(false,'components.component1', ['html' => '<h1>Componente1</h1>'])--}}
{{--@includeUnless(false,'components.component1', ['html' => '<h1>Componente1</h1>'])--}}

@includeFirst(['components.component2', 'components.component1'], ['html' => '<h1>ComponenteXYZ</h1>'])

{{--@component('components.component')
    <h1>Componente 1 - HTML</h1>
    <p> Um texto qualquer!!!</p>
    
@endcomponent--}}
