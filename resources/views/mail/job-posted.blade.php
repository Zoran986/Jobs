<h2>
    {{ $job->title }}
</h2>
<p>
    Congrats! Your job is now live on our website.log
</p>

<p>
    <a href="{{url('/jobs/'. $job->id)}}">View Your Job Listing</a>
</p>