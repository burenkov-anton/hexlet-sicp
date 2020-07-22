<p>{{ __('exercises/2_22.description.1') }}</p>
<pre><code>(define (square-list items)
  (define (iter things answer)
    (if (null? things)
        answer
        (iter (cdr things) 
              (cons (square (car things))
                    answer))))
  (iter items nil))
</code></pre>
<p>{{ __('exercises/2_22.description.2') }}</p>
<p>{{ __('exercises/2_22.description.3') }}</p>
<pre><code>(define (square-list items)
  (define (iter things answer)
    (if (null? things)
        answer
        (iter (cdr things)
              (cons answer
                    (square (car things))))))
  (iter items nil))
</code></pre>
<p>{{ __('exercises/2_22.description.4') }}</p>
