<h2>
    {{ $job->title }}
</h2>

<p>
    Congrats! {{ $job->title }} has been posted on our website.
</p>

<p>
    <a href="{{ url('/jobs/' . $job->id) }}">View your job listing.</a>
</p>
