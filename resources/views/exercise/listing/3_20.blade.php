<p>
    {{ __('exercises/3_20.description1') }}
</p>
<pre><code>(define x (cons 1 2))
(define z (cons x x))
(set-car! (cdr z) 17)
(car x)
17</code></pre>
<p>
    {{ __('exercises/3_20.description2') }}
    <a title="3.11" href="{{ route('exercises.show', ($exercise->id - 9)) }}">3.11</a>{{ __('exercises/3_20.description3') }}
</p>
